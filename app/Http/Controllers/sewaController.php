<?php

namespace App\Http\Controllers;

use Illuminate\Http\Gambar;
use Illuminate\Http\Request;
use Illuminate\Http\auth;


class sewaController extends Controller
{
     public function index()
    {
    	$data_sewa = \App\Sewa::all();
        return view('sewa.index',['data_sewa'=>$data_sewa]);
    }


    public function detail($id)
    {
        $detail_sewa = \App\Sewa::find($id);
        return view('sewa.single',['detail_sewa'=>$detail_sewa]);
    }
}
