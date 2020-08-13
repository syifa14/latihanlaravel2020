@extends('layouts.app')
@section('title','Skripsi Page')
@section('bread1','Skripsi')
@section('bread2','Data')
@section('content')
  <h3>Master Data Skripsi</h3>
  <p><a href="/skripsi/create" class="btn btn-success btn-sm">Tambah</a></p>
    @include('layouts.alert')
  <table class="table table-striped" id="mhs-table">
    <thead>
      <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama Mahasiswa</th>
        <th>Judul</th>
        <th>Tempat Penelitian</th>
        <th>Alamat</th>
        <th>Pilihan</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($skripsi as $item)
      <tr>
        <td>{{ $loop->index +1 }}</td>
        <td>{{ $item->nim }}</td>
        <td>{{ $item->nama_mahasiswa }}</td>
        <td>{{ $item->judul }}</td>
        <td>{{ $item->tempat_penelitian }}</td>
        <td>{{ $item->alamat }}</td>
        <td class="d-flex">
          <a href="{{ route('skripsi.edit', $item->id)}}" class="btn btn-success px-2 py-1 mr-2">Edit</a>
          <form action="{{ route('skripsi.destroy', $item->id)}}" method="post">
            @csrf
            @method("delete")
            <button type="submit" class="btn btn-danger px-2 py-1">Hapus</button>
          </form>
        </td>
      </tr>
      @empty
          <tr>
            <td colspan="6" class="text-center">Data masih kosong</td>
          </tr>
      @endforelse
    </tbody>
  </table>
@endsection