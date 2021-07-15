<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KmeansController extends Controller
{
    public function data2017()
    {
        $result = shell_exec("kmeans " . base_path(). "kmeans/app.py");
        $data = json_decode($result);
        dd($result);
        return view('pages.hasil cluster.index2017',['collections'=>$data]);
    }

    public function result()
    {
        $result = shell_exec("kmeans " . base_path(). "\data\tahun2017");
        echo $result;
    }

}
