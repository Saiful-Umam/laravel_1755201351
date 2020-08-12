@extends('layouts.app')
@section('title','Skripsi Page')
@section('bread1','Skripsi')
@section('bread2','Data')
@section('content')
    <h3>Form Skripsi</h3><hr>
    
   @include('layouts.alert')
    <form action="{{ route('skripsi.update', $skripsi->id) }}" method="POST">
   @csrf
   @method('PUT')
    <div class="form-group row">
      <label for="id" class="col-sm-12">ID</label>
      <div class="col-sm-3">
        <input type="text" name="id" class="form-control" id="id"placeholder="id">
       @error('id')<small id="id" class="form-text text-danger">{{ $message}}</small>@enderror
      </div>
    </div>
    <div class="form-group row">
      <label for="id" class="col-sm-12">NIM</label>
      <div class="col-sm-5">
        <input type="text" name="nim" class="form-control"id="nim" placeholder="Masukan nama dengan benar">
       @error('nim')<small id="nim" class="form-text textdanger">{{ $message }}</small>@enderror
      </div>
    </div>
    <div class="form-group row">
      <label for="id" class="col-sm-12">Nama Mahasiswa</label>
      <div class="col-sm-3">
        <input type="text" name="nama_mahasiswa" class="form-control"id="nama_mahasiswa" placeholder="Masukan nama dengan benar">
       @error('nama_mahasiswa')<small id="nama_mahasiswa" class="form-text textdanger">{{ $message }}</small>@enderror
      </div>
    </div>
    <div class="form-group row">
      <label for="id" class="col-sm-12">Judul</label>
      <div class="col-sm-8">
        <textarea name="judul" class="form-control" id="judul"></textarea>
      </div>
      </div>
      <div class="form-group row">
      <label for="id" class="col-sm-12">Tempat Penelitian</label>
      <div class="col-sm-8">
        <textarea name="tempat_penelitian" class="form-control" id="tempat_penelitian"></textarea>
      </div>
      </div>
    <div class="form-group row">
      <label for="id" class="col-sm-12">Alamat</label>
      <div class="col-sm-8">
        <textarea name="alamat" class="form-control" id="alamat"></textarea>
      </div>
    </div>
    <button class="btn btn-primary" type="submit">Simpan</button>
    <a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
    </form>
@endsection