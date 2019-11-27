<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penyewaan extends Model
{
    protected $table ='penyewaan';
    protected $fillable =['id','id_user','nama','alamat','kontak','accepted'];
}
