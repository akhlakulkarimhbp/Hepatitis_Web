import matplotlib.pyplot as plt

from flask import Flask, request, jsonify, render_template
from flask_cors import CORS
import pandas as pd
import numpy as np
import mysql.connector as mysql
import csv
import json
import sys
from sklearn.cluster import KMeans
from sklearn import preprocessing
from sklearn import metrics
from sklearn.preprocessing import MinMaxScaler


hostname = 'localhost'
username = 'root'
password = ''
database = 'hepatitis_mapping'
app = Flask(__name__)
CORS(app)
app.config["DEBUG"] = True

def get_id_kecamatan():
    myConnection = mysql.connect(host=hostname, user=username, password=password, database=database)
    cur = myConnection.cursor()
    sql = "SELECT id_kecamatan FROM kecamatan" + " ORDER BY id_kecamatan ASC;"
    cur.execute(sql)
    data = cur.fetchall()
    myConnection.close()
    return data

def get_namakecamatan():
    myConnection = mysql.connect(host=hostname, user=username, password=password, database=database)
    cur = myConnection.cursor()
    sql = "SELECT nama_kecamatan FROM kecamatan" + " ORDER BY id_kecamatan ASC;"
    cur.execute(sql)
    data = cur.fetchall()
    myConnection.close()
    return data

def tupple_to_list(data):
    tmp_data = []
    for item in data:
        tmp_it = []
        if len(item) > 1:
            for i in item:
                tmp_it.append(i)
            tmp_data.append(tmp_it)
        elif len(item) == 1:
            tmp_data.append(item[0])
    return tmp_data

def get_data(table, field:tuple, tahun):
    myConnection = mysql.connect(host=hostname, user=username, password=password, database=database)
    list_id_kecamatan = tupple_to_list(get_id_kecamatan())
    data_rasio = np.zeros((12,5))
    for (ds, c_row) in zip(list_id_kecamatan, range(0, 12)):
        sql = "SELECT "
        for item in field:
            sql += item + ","
        sql = sql[:-1] + " FROM " + table + " WHERE id_kecamatan=" + str(ds) + " AND tahun=" + str(tahun) + " ORDER BY tahun ASC;"
        cur = myConnection.cursor()
        cur.execute(sql)
        data = cur.fetchall()
        col_data = data[0][0]
        if col_data == None:
            col_data = 0
        data_rasio[c_row] = (ds, col_data, 0, 0)
    myConnection.close()
    return data_rasio


def get_status(item):
    status = ""
    if item == 0:
        status = "Sedang"
    if item == 1:
        status = "Rendah"
    if item == 2:
        status = "Tinggi"
    return status

@app.route('/data/<int:tahun>')
def hitung_per_tahun(tahun):
    kasus = get_data("datakriteria", ("kasus",), tahun)
    rumah_sehat = get_data("datakriteria", ("rumah_sehat",), tahun)
    sanitasi = get_data("datakriteria", ("sanitasi",), tahun)
    penduduk = get_data("datakriteria", ("penduduk",), tahun)
    air_bersih = get_data("datakriteria", ("air_bersih",), tahun)
    df1 = pd.DataFrame(kasus)
    df2 = pd.DataFrame(rumah_sehat)
    df3 = pd.DataFrame(sanitasi)
    df4 = pd.DataFrame(penduduk)
    df5 = pd.DataFrame(air_bersih)

    #Create file csv
    data = pd.concat([
      df1.loc[:, 1] ,
      df2.loc[:, 1], 
      df3.loc[:, 1], 
      df4.loc[:, 1],
      df5.loc[:, 1]
      ], 
      axis=1)
    X = data.iloc[:,[0,1,2,3,4]].values

    #Normalisasi data ke skala 0-1
    scaler = MinMaxScaler()
    x_scaled = scaler.fit_transform(X)
    print(x_scaled)

    #Proses Kmeans
    kmeans=KMeans(n_clusters= 3, init = 'k-means++', max_iter = 300, n_init = 10, random_state = 0).fit(x_scaled)
    # centers = kmeans.cluster_centers_
    labels = kmeans.predict(x_scaled)

    print(labels)

    hasil_cluster = labels.tolist()
    list_nama_kecamatan = tupple_to_list(get_namakecamatan()) 
    list_jml_kasus = pd.to_numeric(data.iloc[:,0].values) 
    list_jml_rumah_sehat = pd.to_numeric(data.iloc[:,1].values) 
    list_jml_sanitasi = pd.to_numeric(data.iloc[:,2].values) 
    list_jml_penduduk = pd.to_numeric(data.iloc[:,3].values)
    list_jml_air_bersih = pd.to_numeric(data.iloc[:,4].values)

    result = []
    stts = ""
    for (
      item, 
      jml_kasus, 
      jml_rumah_sehat, 
      jml_sanitasi, 
      jml_penduduk, 
      jml_air_bersih, 
      cluster 
      ) in zip(
        list_nama_kecamatan, 
        list_jml_kasus, 
        list_jml_rumah_sehat, 
        list_jml_sanitasi,
        list_jml_penduduk,  
        list_jml_air_bersih, 
        hasil_cluster 
        ):
        status = get_status(cluster)
        result.append(
          {
            "kecamatan": item, 
            "jml_kasus":jml_kasus, 
            "jml_rumah_sehat":jml_rumah_sehat, 
            "jml_sanitasi":jml_sanitasi, 
            "jml_penduduk":jml_penduduk, 
            "jml_air_bersih":jml_air_bersih, 
            "cluster": status
          })
    
    return json.dumps(result)

if __name__ == '__main__':
      app.run(debug='true' )