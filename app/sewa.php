<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    protected $table ='sewa';
    protected $fillable = ['nama_Kendaraan','kapasitas','harga','id_rental','verifikasi','urlimage'];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
