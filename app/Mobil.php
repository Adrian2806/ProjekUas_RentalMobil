<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table='mobil';
    protected $primaryKey='id_mobil';
    protected $fillable=['merk_mobil','plat_mobil','warna_mobil','tahun_mobil']; 
}
