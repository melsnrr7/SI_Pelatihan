<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPeserta extends Model
{
    use HasFactory;
    protected $fillable = ['id_jurusan', 'nama_lengkap', 'nik,', 'pendidikan_terakhir', 'nomor_hp', 'email', 'status'];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan', 'id');
    }
}
