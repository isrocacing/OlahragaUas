<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = ['namaSiswa','nisSiswa','kelasSiswa','jurusanSiswa'];
    // protected $fillable = ['namaMahasiswa','nimMahasiswa','angkatanMahasiswa','judulskripsiMahasiswa','pembimbing1','pembimbing2'];
}
