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

    public function create(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
 
        $nama_file = time()."_".$file->getClientOriginalName();
 
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $url = "data_file/$nama_file";
        $file->move($tujuan_upload,$nama_file);
        
        \App\Sewa::create([
            'nama_Kendaraan'=> $request['nama'],
            'kapasitas'=> $request['kapasitas'],
            'harga'=> $request['harga'],
            'verifikasi'=> $request['verifikasi'],
            'urlimage'=> $url,
        ]);
    	return redirect('/garage')->with('sukses','Data Berhasil Ditambahkan!');


    }

}
