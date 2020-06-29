<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = "transaksi_donasi";
 
    public function donatur()
    {
    	return $this->belongsToMany('App\Donatur');
    } 

    public function bank()
    {
    	return $this->belongsToMany('App\Bank');
    } 

    public function KategoriDonasi()
    {
    	return $this->belongsToMany('App\KategoriDonasi');
    } 

    public function Aktivitas()
    {
    	return $this->belongsToMany('App\Aktivitas');
    } 




}
