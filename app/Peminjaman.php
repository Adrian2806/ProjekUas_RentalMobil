<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table='peminjaman';
    protected $primaryKey='id_peminjaman';
    protected $fillable=['id_mobil','mobil_pinjam','tgl_masuk','tempo','tgl_keluar']; 
}
