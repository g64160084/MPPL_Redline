<?php

namespace App\Http\Controllers;

use Illuminate\Http\Gambar;
use Illuminate\Http\Request;
use Illuminate\Http\auth;


class sewaController extends Controller
{
    
     public function index()
    {
        $userstatus = auth()->user()->status;
    	$data_sewa = \App\Sewa::all();
        return view('sewa.index',['data_sewa'=>$data_sewa,'userstatus'=>$userstatus]);
    }


    public function detail($id)
    {
        $detail_sewa = \App\Sewa::find($id);
        $iduser = $detail_sewa->id_rental;
        $useracc = \App\User::find($iduser);
        $notelp = \App\Penyewaan::where('id_user', $iduser)
                                ->where('accepted', 1)
                                ->first();
        return view('sewa.single',['detail_sewa'=>$detail_sewa, 'useracc'=>$useracc, 'notelp'=>$notelp]);
    }
}
