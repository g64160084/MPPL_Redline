<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penyewaanDashboard extends Model
{   
	protected $table ='sewa';
    protected $fillable = ['nama_kendaraan','kapasitas','harga','id_rental','detail','urlimage'];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
