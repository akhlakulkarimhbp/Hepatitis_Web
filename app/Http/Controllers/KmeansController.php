<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KmeansController extends Controller
{

    public function hasil1()
    {
        
        $data = json_decode(file_get_contents('http://127.0.0.1:5000/data/2017'), true);
        
        // dd($datakecamatan);
        // dd($data);
        // dd($json);
        return view('pages.hasil cluster.index2017',['collections'=>$data]);

    }

    public function hasil2()
    {
        $data = json_decode(file_get_contents('http://127.0.0.1:5000/data/2018'), true);
        return view('pages.hasil cluster.index2018',['collections'=>$data]);
    }

    public function hasil3()
    {
        $data = json_decode(file_get_contents('http://127.0.0.1:5000/data/2019'), true);
        return view('pages.hasil cluster.index2019',['collections'=>$data]);
    }
    
    public function grafik1()
    {
        $datakecamatan=[];
        $datacluster=[];
        $dataclusterRendah=[];
        $dataclusterSedang=[];
        $dataclusterTinggi=[];
        
        $data = json_decode(file_get_contents('http://127.0.0.1:5000/data/2017'), true);
        
        foreach($data as $i){
            array_push($datakecamatan,$i['kecamatan']);
            
            if($i['cluster'] == 'Rendah') { 
                array_push($dataclusterRendah, 1);
                array_push($dataclusterSedang, 0);
                array_push($dataclusterTinggi, 0); 
                } elseif($i['cluster'] == 'Sedang') {
                array_push($dataclusterRendah, 0);
                array_push($dataclusterSedang, 2);
                array_push($dataclusterTinggi, 0); 
                } else {            
                array_push($dataclusterRendah, 0);
                array_push($dataclusterSedang, 0);
                array_push($dataclusterTinggi, 3); 
                }  
            }
        return view('pages.grafik.index2017',['datakecamatan'=>$datakecamatan, 'clusterRendah'=>$dataclusterRendah, 'clusterSedang'=>$dataclusterSedang, 'clusterTinggi'=>$dataclusterTinggi]); 
    }
    public function grafik2()
    {
        $datakecamatan=[];
        $datacluster=[];
        $dataclusterRendah=[];
        $dataclusterSedang=[];
        $dataclusterTinggi=[];
        
        $data = json_decode(file_get_contents('http://127.0.0.1:5000/data/2018'), true);
        
        foreach($data as $i){
            array_push($datakecamatan,$i['kecamatan']);
            
            if($i['cluster'] == 'Rendah') { 
                array_push($dataclusterRendah, 1);
                array_push($dataclusterSedang, 0);
                array_push($dataclusterTinggi, 0); 
                } elseif($i['cluster'] == 'Sedang') {
                array_push($dataclusterRendah, 0);
                array_push($dataclusterSedang, 2);
                array_push($dataclusterTinggi, 0); 
                } else {            
                array_push($dataclusterRendah, 0);
                array_push($dataclusterSedang, 0);
                array_push($dataclusterTinggi, 3); 
                }  
            }
        return view('pages.grafik.index2018',['datakecamatan'=>$datakecamatan, 'clusterRendah'=>$dataclusterRendah, 'clusterSedang'=>$dataclusterSedang, 'clusterTinggi'=>$dataclusterTinggi]); 
    }
    public function grafik3()
    {
        $datakecamatan=[];
        $datacluster=[];
        $dataclusterRendah=[];
        $dataclusterSedang=[];
        $dataclusterTinggi=[];
        
        $data = json_decode(file_get_contents('http://127.0.0.1:5000/data/2019'), true);
        
        foreach($data as $i){
            array_push($datakecamatan,$i['kecamatan']);
            
            if($i['cluster'] == 'Rendah') { 
                array_push($dataclusterRendah, 1);
                array_push($dataclusterSedang, 0);
                array_push($dataclusterTinggi, 0); 
                } elseif($i['cluster'] == 'Sedang') {
                array_push($dataclusterRendah, 0);
                array_push($dataclusterSedang, 2);
                array_push($dataclusterTinggi, 0); 
                } else {            
                array_push($dataclusterRendah, 0);
                array_push($dataclusterSedang, 0);
                array_push($dataclusterTinggi, 3); 
                }  
            }
        return view('pages.grafik.index2019',['datakecamatan'=>$datakecamatan, 'clusterRendah'=>$dataclusterRendah, 'clusterSedang'=>$dataclusterSedang, 'clusterTinggi'=>$dataclusterTinggi]); 
    }
}
