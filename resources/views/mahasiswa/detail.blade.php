@extends('layouts.app')
@section('content')

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Data Siswa</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class=" form-row">
            <div class="col-lg-12">
                <h3>Detail Siswa</h3>
            </div>
        </div>
        <br>

        <div class="form-group row">
            <label for="namaSiswa" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
            <div class="col-sm-10">
                {{$mahasiswa->namaSiswa}} 
            </div>
        </div>
        <div class="form-group row">
            <label for="nisSiswa" class="col-sm-2 col-form-label">NIM Mahasiswa</label>
            <div class="col-sm-10">
                {{$mahasiswa->nisSiswa}}
            </div>
        </div>
        <div class="form-group row">
            <label for="kelasSiswa" class="col-sm-2 col-form-label">Angkatan Mahasiswa</label>
            <div class="col-sm-10">
                 {{$mahasiswa->kelasSiswa}}
            </div>
        </div>
        <div class="form-group row">
            <label for="jurusanSiswa" class="col-sm-2 col-form-label">Jurusan</label>
            <div class="col-sm-10">
                 {{$mahasiswa->jurusanSiswa}}
            </div>
        </div>
        <!-- <div class="form-group row">
            <label for="judulskripsiMahasiswa" class="col-sm-2 col-form-label">Judul Skripsi</label>
                <div class="col-sm-10">
                    {{$mahasiswa->judulskripsiMahasiswa}}
                </div>
        </div>
        <div class="form-group row">
            <label for="pembimbing1" class="col-sm-2 col-form-label">Pembimbing 1</label>
            <div class="col-sm-10">
                {{$mahasiswa->pembimbing1}}
            </div>
        </div>
        <div class="form-group row">
            <label for="pembimbing2" class="col-sm-2 col-form-label">Pembimbing 2</label>
            <div class="col-sm-10">
                {{$mahasiswa->pembimbing2}} 
            </div>
        </div> -->
        <div class="form-group row">
            <div class="col-md-12">
                <a href="{{route('home.index')}}" class="btn  btn-success">Kembali</a>
            </div>
        </div>

    </div>
</body>
</html>

@endsection