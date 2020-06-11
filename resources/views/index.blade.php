@extends('layout/main')

@section('title','Pendaftaran Siswa Baru')
    


@section('container')
<div class="container">
    <center>
<br><h1>Pendaftaran Siswa Baru <br> Sebuah Sekolah</h1><br>
<div class="card" style="width: 18rem;">
        <img src="{{ ('img/school.png') }}" class="card-img-top" alt="gambarsekolah" style="margin-top:5px;width:150px">
        <div class="card-body">
          <h5 class="card-title">Siswa Baru Sebuah Sekolah</h5>
          <p class="card-text">Alamat : Jl. Jalan, Jawa Tengah, Semarang Indonesia</p>
          <a href="{{url('/siswa/tambah')}}" class="btn btn" style="border-radius:3px;background:yellowgreen;color:white">Silahkan Daftar</a>
        </div>
      </div>

    </center>

    
</div>
@endsection