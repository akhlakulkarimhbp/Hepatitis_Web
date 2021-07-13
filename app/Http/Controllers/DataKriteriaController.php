<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Datakriteria;
use App\Models\Kecamatan;


class DataKriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_kriteria=DataKriteria::with('kecamatan')->OrderBy('tahun','DESC')->orderBy('id_kecamatan','ASC')->get();
        return view('pages.datakriteria.index', compact('data_kriteria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        $kec=Kecamatan::all();
        return view('pages.datakriteria.create', compact('kec'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $id_kecamatan= $request->id_kecamatan;
        $tahun= $request->tahun;
        $air_bersih= $request->air_bersih;
        $kasus= $request->kasus;
        $penduduk= $request->penduduk;
        $sanitasi= $request->sanitasi;
        $rumah_sehat= $request->rumah_sehat;
        $datakriteria = new DataKriteria;
        $datakriteria->id_kecamatan=$id_kecamatan;
        $datakriteria->tahun=$tahun;
        $datakriteria->air_bersih=$air_bersih;
        $datakriteria->kasus=$kasus;
        $datakriteria->penduduk=$penduduk;
        $datakriteria->sanitasi=$sanitasi;
        $datakriteria->rumah_sehat=$rumah_sehat;
        $datakriteria->save();
        return redirect()->route('datakriteria.index')->with('success', 'Data Berhasil disimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datakriteria  $datakriteria
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datakriteria  $datakriteria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $kec=Kecamatan::all();
        $data_kriteria = DataKriteria::findorfail($id);
        return view('pages.datakriteria.edit',compact('data_kriteria','tahun','kec'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Datakriteria  $datakriteria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data_kriteria=DataKriteria::findorfail($id);
        $data_kriteria->update($request->all());
        return redirect()->route('datakriteria.index')->with('success', 'Data Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datakriteria  $datakriteria
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $datakriteria=DataKriteria::findorfail($id);
        $datakriteria->delete();
        return back()->with('success', 'Data Berhasil dihapus');
    }
}
