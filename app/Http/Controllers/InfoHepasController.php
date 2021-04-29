<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoHepas;

class InfoHepasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function index()
    {
        $info_hepas=InfoHepas::orderBy('nama_info','ASC')->get();
        return view('pages.datainfohepa.index', compact('info_hepas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.datainfohepa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama_info = $request->nama_info;
        $isi_info = $request->isi_info;
        $infohepas = new InfoHepas;
        $infohepas->nama_info=$nama_info;
        $infohepas->isi_info=$isi_info;
        $infohepas->save();
        return redirect()->route('infohepas.index')->with('success', 'Data Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info_hepas = InfoHepas::findorfail($id);
        return view('pages.datainfohepa.edit',compact('info_hepas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $info_hepas=InfoHepas::findorfail($id);
        $info_hepas->update($request->all());
        return redirect()->route('infohepas.index')->with('success', 'Data Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $info_hepas=InfoHepas::findorfail($id);
        $info_hepas->delete();
        return back()->with('success', 'Data Berhasil dihapus');
    }
}
