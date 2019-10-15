<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	/*protected $guarded = [];*/
	//digunakan untuk developer

    protected $fillable = ['title', 'description'];
    //rekomendasi menggunakan fillable, agar tidak berubah struktur nya jika ada yang berusaha memasukkan data selain dari title dan description. dan biasa digunakan pada kolom komentar.
}
