<?php

namespace App\Http\Controllers;

use Illuminate\Http\Gambar;
use Illuminate\Http\Request;
use Illuminate\Http\auth;

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

        ]);

        $file = $request->file('file');
 
      	// nama file
	echo 'File Name: '.$file->getClientOriginalName();
	echo '<br>';
 
      	// ekstensi file
	echo 'File Extension: '.$file->getClientOriginalExtension();
	echo '<br>';
 
      	// real path
	echo 'File Real Path: '.$file->getRealPath();
	echo '<br>';
 
      	// ukuran file
	echo 'File Size: '.$file->getSize();
	echo '<br>';
 
      	// tipe mime
	echo 'File Mime Type: '.$file->getMimeType();
 
      	// isi dengan nama folder tempat kemana file diupload
	$tujuan_upload = 'data_file';
	$file->move($tujuan_upload,$file->getClientOriginalName());
        // menyimpan data file yang diupload ke variabel $file


    } 
}
