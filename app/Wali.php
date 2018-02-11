<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
     protected $table='walis';
   protected $fillable=['nama','alamat'];
   public $timestamps=true;
}
