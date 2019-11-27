<?php

namespace App\Http\Controllers;

use Illuminate\Http\Gambar;
use Illuminate\Http\Request;
use Illuminate\Http\auth;
use Illuminate\Http\Imagick;

class penyewaanDashboardController extends Controller
{
	public function view()
    {
        return view('penyewaanDashboard.index');
    }
    public function create(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:4886',
            'nama' => 'required',
            'kapasitas' => 'required',
            'harga' => 'required',
            'detail' => 'required',

        ]);

        $file = $request->file('file');
 
        $nama_file = time()."_".$file->getClientOriginalName();
 
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $url = "data_file/$nama_file";
        $file->move($tujuan_upload,$nama_file);
        $idnya = auth()->user()->id;
        \App\Sewa::create([
            'nama_kendaraan'=> $request['nama'],
            'kapasitas'=> $request['kapasitas'],
            'harga'=> $request['harga'],
            'detail'=> $request['detail'],
            'id_rental'=>$idnya,
            'urlimage'=> $url,
        ]);

        return redirect('/garage')->with('sukses','Data Berhasil Ditambahkan!');


    } 
}
