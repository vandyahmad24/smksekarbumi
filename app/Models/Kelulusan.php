<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelulusan extends Model
{
    use HasFactory;
    protected $table = 'kelulusan';
    protected $fillable = ['nama','tempat_lahir','tanggal_lahir','orang_tua','nis','nisn','tahun_lulus','id_jurusan','kelulusan'];
    public function jurusan()
    {
    	return $this->belongsTo(Jurusan::class,'id_jurusan','id');
    }
}
