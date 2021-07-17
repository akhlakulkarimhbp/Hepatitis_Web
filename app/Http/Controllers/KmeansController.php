<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KmeansController extends Controller
{
    // function list()
    // {
    //     $data = Http::get('http://127.0.0.1:5000/data/2017')->json();
    //     return view('pages.hasil cluster.index2017', ['data'=>$data]);
    // }
    public function hasil1()
    {
        $data = json_decode(file_get_contents('http://127.0.0.1:5000/data/2017'), true);
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
}
