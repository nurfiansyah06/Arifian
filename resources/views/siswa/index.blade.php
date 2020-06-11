@extends('layout/main')

@section('title','Data Siswa')
    


@section('container')

<br><br>
<div class="container">

        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button> 
            <strong>{{ $message }}</strong>
        </div>
      @endif
  
      @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
        </div>
      @endif
  
      @if ($message = Session::get('warning'))
        <div class="alert alert-warning alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
      </div>
      @endif
  
      @if ($message = Session::get('info'))
        <div class="alert alert-info alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
        </div>
      @endif
  
      @if ($errors->any())
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert">×</button> 
          Please check the form below for errors
      </div>
      @endif
    
    <div class="card">
        <div class="card-body" style="grey" style="border-radius:10px">
<h1>Data Siswa Sebuah Sekolah</h1>
<br>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">No.Handphone</th>
            <th scope="col">Email</th>
            <th scope="col">Opsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($siswa as $users)
        <tr>
        <th scope="row">{{@$loop->iteration}}</th>        
            <th scope="row">{{$users -> nama}}</th>        
            <th scope="row">{{$users -> hp}}</th>        
            <th scope="row">{{$users -> email}}</th>                        
            <th scope="row">
                <a href="{{ url("siswa/edit/{$users->id}")}}" class="badge badge-success">Edit</a>    
                <a href="{{ url("siswa/hapus/{$users->id}")}}" class="badge badge-danger">Hapus</a>        
            </th>        
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
</div>
@endsection
