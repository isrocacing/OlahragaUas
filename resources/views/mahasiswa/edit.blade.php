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
                <h3>Edit Data Siswa</h3>
            </div>
        </div>
        <br>

        @if ($errors->all())
            <div class="alert alert-danger">
                <strong>Whoops! </strong> Ada permasalahan inputanmu.<br>
                <ul>
                    @foreach ($errors as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{route('mahasiswa.update',$mahasiswa->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="namaSiswa" class="col-sm-2 col-form-label">Nama Siswa</label>
                <div class="col-sm-10">
                    <input type="text" name="namaSiswa" class="form-control" id="namaSiswa" value="{{$mahasiswa->namaSiswa}}" placeholder="Nama Siswa">
                </div>
            </div>
            <div class="form-group row">
                <label for="nisSiswa" class="col-sm-2 col-form-label">NIS</label>
                <div class="col-sm-10">
                    <input type="text" name="nisSiswa"  class="form-control" id="nisSiswa" value="{{$mahasiswa->nisSiswa}}" placeholder="NIS">
                </div>
            </div>
            <div class="form-group row">
                <label for="kelasSiswa" class="col-sm-2 col-form-label">kelas Siswa</label>
                <div class="col-sm-10">
                    <select id="kelasSiswa" name="kelasSiswa"class="form-control">
                        <option {{$mahasiswa->kelasSiswa == '10' ? 'selected' : ''}} value="10"> kelas 10</option>
                        <option {{$mahasiswa->kelasSiswa == '11' ? 'selected' : ''}} value="11"> kelas 11</option>
                        <!-- <option {{$mahasiswa->angkatanMahasiswa == '2014' ? 'selected' : ''}} value="2014"> Angkatan 2014</option> -->
                        <option {{$mahasiswa->kelasSiswa == '12' ? 'selected' : ''}} value="12"> kelas 12</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="jurusanSiswa" class="col-sm-2 col-form-label">Jurusan Siswa</label>
                <div class="col-sm-10">
                    <select id="jurusanSiswa" name="jurusanSiswa"class="form-control">
                        <option {{$mahasiswa->jurusanSiswa == 'IPA' ? 'selected' : ''}} value="IPA"> Jurusan IPA</option>
                        <option {{$mahasiswa->jurusanSiswa == 'IPS' ? 'selected' : ''}} value="IPS"> Jurusan IPS</option>
                       <!--  <option {{$mahasiswa->angkatanMahasiswa == '2014' ? 'selected' : ''}} value="2014"> Angkatan 2014</option> -->
                        <option {{$mahasiswa->jurusanSiswa == 'BAHASA' ? 'selected' : ''}} value="BAHASA"> Jurusan BAHASA</option>
                    </select>
                </div>
            </div>
            <!-- <div class="form-group row">
                <label for="judulskripsiMahasiswa" class="col-sm-2 col-form-label">Judul Skripsi</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="judulskripsiMahasiswa" rows="8" cols="80" placeholder="Masukkan Judul Skripsi">{{$mahasiswa->judulskripsiMahasiswa}}</textarea>
                    </div>
            </div>
            <div class="form-group row">
                <label for="pembimbing1" class="col-sm-2 col-form-label">Pembimbing 1</label>
                <div class="col-sm-10">
                    <input type="text" name="pembimbing1" class="form-control" value="{{$mahasiswa->pembimbing1}}" id="pembimbing1" placeholder="Pembimbing 1">
                </div>
            </div>
            <div class="form-group row">
                <label for="pembimbing2" class="col-sm-2 col-form-label">Pembimbing 2</label>
                <div class="col-sm-10">
                    <input type="text" name="pembimbing2" class="form-control" value="{{$mahasiswa->pembimbing2}}" id="pembimbing2" placeholder="Pembimbing 2">
                </div>
            </div> -->
            <!--<div class="form-group row">
                <label for="gambarMahasiswa" class="col-sm-2 col-form-label">Pilih gambar</label>
                <div class="col-sm-10">
                    <input type="file" name="gambarMahasiswa">
                <p class="text-danger">{{ $errors->first('gambarMahasiswa') }}</p>
                </div>
            </div>-->

             <hr>
                <div class="form-group">
                    <a href="{{route('mahasiswa.index')}}" class="btn btn-success">Kembali</a>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
        </form>

    </div>
    </body>
</html>
    
@endsection