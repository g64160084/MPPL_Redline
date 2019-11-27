<?php

namespace App\Http\Controllers;

use Illuminate\Http\Gambar;
use Illuminate\Http\Request;
use Illuminate\Http\auth;

class penyewaanController extends Controller
{
    public function view()
    {	
    	$data_praktikum = \App\Penyewaan::all();

    	return view('penyewaan.index');
    }

        public function kendaraan()
    {
        return view('penyewaan.kendaraan');
    }

    public function create(Request $request)
    {   
    	$usernya = auth()->user()->id;
        \App\Penyewaan::create([
        	'id_user' =>$usernya,
            'nama'=> $request['nama'],
            'alamat'=> $request['alamat'],
            'kontak'=> $request['kontak'],
            'accepted'=> '0',
        ]);
    	return redirect('/penyewaan')->with('sukses','Data Berhasil Ditambahkan!');


    }    
}
