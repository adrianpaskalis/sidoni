<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aktivitas extends Model
{
    protected $table="aktivitas"; 

     public function peserta() {
        return $this->hasMany('App\Peserta');
 } 
 public function transaksi()
    {
    	return $this->hasMany('App\Transaksi');
    } 
}
