<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sewaController extends Controller
{
     public function index()
    {
    	$data_sewa = \App\Sewa::all();
        return view('sewa.index',['data_sewa'=>$data_sewa]);
    }
}
