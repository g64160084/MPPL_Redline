<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sewaController extends Controller
{
     public function index()
    {
        return view('sewa.index');
    }
}
