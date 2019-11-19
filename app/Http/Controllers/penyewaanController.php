<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class penyewaanController extends Controller
{
    public function view()
    {	
    	$data_praktikum = \App\Penyewaan::all();

    	return view('penyewaan.index');
    }
}
