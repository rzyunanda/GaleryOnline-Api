<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Galeries extends Model
{
	
	protected $appends = ['gambar_url'];

    public function getGambarUrlAttribute()
    {
    	return url(Storage::url($this->gambar));
    }

     public $fillable = [
        'nama',
        'lokasi',
        'gambar',
        'deskripsi',
        'lat',
        'lng'
        
    ];
}
