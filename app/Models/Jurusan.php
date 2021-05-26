<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $table = 'jurusan';
    public function kelulusan()
    {
    	return $this->hasMany(Kelulusan::class,'id_jurusan','id');
    }
   
}
