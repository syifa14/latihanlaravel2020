@extends('layouts.app')
@section('title','Skripsi Page')
@section('bread1','Skripsi')
@section('bread2','Data')
@section('content')
<h3>Form Skripsi</h3><hr>
@include('layouts.alert')
<form action="{{ route('skripsi.store')}}" method="POST">
@csrf
<div class="form-group row">
  <label for="nim" class="col-sm-12">NIM</label>
    <div class="col-sm-3">
    <input type="text" name="nim" class="form-control" id="nim"
    placeholder="Masukan NIM">
    @error('nim')
    <small id="nim" class="form-text text-danger">
      {{ $message }}
    </small>
    @enderror
  </div>
</div>
<div class="form-group row">
  <label for="nama_mahasiswa" class="col-sm-12">Nama Mahasiswa</label>
  <div class="col-sm-5">
  <input type="text" name="nama_mahasiswa" class="form-control" id="nama_mahasiswa" placeholder="Masukan Nama Anda">
    @error('nama_mahasiswa')
      <small id="nama_mahasiswa" class="form-text text-danger">
        {{ $message }}
      </small>
    @enderror
  </div>
</div>
<div class="form-group row">
  <label for="judul" class="col-sm-12">Judul Penelitian</label>
  <div class="col-sm-5">
  <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukan Nama judul">
    @error('judul')
      <small id="judul" class="form-text text-danger">
        {{ $message }}
      </small>
    @enderror
  </div>
</div>
<div class="form-group row">
  <label for="tempat_penelitian" class="col-sm-12">Temp Penelitian</label>
  <div class="col-sm-8">
  <input type="text" name="tempat_penelitian" class="form-control" id="tempat_penelitian" placeholder="Masukan Nama tempat_penelitian">
    @error('tempat_penelitian')
      <small id="tempat_penelitian" class="form-text text-danger">
        {{ $message }}
      </small>
    @enderror
  </div>
</div>
<div class="form-group row">
  <label for="tempat_penelitian" class="col-sm-12"> Alamat Tempat Penelitian</label>
  <div class="col-sm-5">
  <textarea name="alamat" id="alamat" class="form-control"></textarea>
    @error('tempat_penelitian')
      <small id="tempat_penelitian" class="form-text text-danger">
        {{ $message }}
      </small>
    @enderror
  </div>
</div>
  <button class="btn btn-primary" type="submit">Simpan</button>
  <a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
</form>
  @endsection