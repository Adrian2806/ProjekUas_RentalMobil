<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table='admin';
    protected $primaryKey='id_admin';
    protected $fillable=['nama_admin','username_admin','password_admin']; 
}
