@extends('layout/main')

@section('title','Tentang Saya')
    


@section('container')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/styleabout.css">
<div class="container">
<div class="card">
    <div class="box">
        <div class="img">
            <img src="{{'img/user.jpg'}}">
        </div>
        <h2>Muhamad Nur Arifiansyah<br><span>Mahasiswa</span></h2>
        <p>Program Studi Teknik Informatika</p>
        <h3><strong>Universitas Negeri Semarang </strong></h3>
        <span>
            <ul>
                <li><a href="https://www.facebook.com/MuhamadNurArifiansyah"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="https://wa.me/6281368608834"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                <li><a href="https://www.linkedin.com/in/muhamad-nur-arifiansyah-12a356196/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/nur_arifiansyah"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </span>
    </div>
</div>

</div>
@endsection