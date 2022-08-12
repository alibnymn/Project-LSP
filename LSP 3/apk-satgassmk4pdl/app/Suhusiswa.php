<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suhusiswa extends Model
{

    protected $table = 'suhusiswas';
    protected $primaryKey = 'id_suhu';

    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }
}