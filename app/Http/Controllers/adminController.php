<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function view()
    {	
    	$data_penyewaan = \App\Penyewaan::all();
    	return view('admin.index',['data_penyewaan'=>$data_penyewaan]);
    }


    public function approve($id)
    {
        $approve = \App\Penyewaan::find($id);
        $approve->update(['accepted'=>'1']);
        return redirect('/admin')->with('sukses','Data Berhasil Di Approve!');
    }

    public function cancel($id)
    {
        $approve = \App\Penyewaan::find($id);
        $approve->update(['accepted'=>'0']);
        return redirect('/admin')->with('sukses','Data Berhasil Di Cancel!');
    }

}
