<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sewa extends Model
{
    protected $table ='sewa';
    protected $fillable = ['nama_Kendaraan','kapasitas','harga','id_rental','verifikasi','urlimage'];
}
