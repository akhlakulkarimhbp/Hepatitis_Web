<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Datakriteria;

class DataKriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_kriteria=DataKriteria::all();
        return view('pages.datakriteria.index', compact('data_kriteria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.datakriteria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $air_bersih= $request->air_bersih;
        $kasus= $request->kasus;
        $penduduk= $request->penduduk;
        $sanitasi= $request->sanitasi;
        $rumah_sehat= $request->rumah_sehat;
        $datakriteria = new DataKriteria;
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
        $data_kriteria = DataKriteria::findorfail($id);
        return view('pages.datakriteria.edit',compact('data_kriteria'));
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
