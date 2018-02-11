<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
     protected $table='siswas';
   protected $fillable=['nama','nis','kelas'];
   public $timestamps=true;
}
