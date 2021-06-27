<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InfoHepas;
use App\Http\Resources\ApiResource;

class ApiController extends Controller
{
    public function index()
    {
        $data = InfoHepas::all();
        return ApiResource::collection($data);
    }
    
}
