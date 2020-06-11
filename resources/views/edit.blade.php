@extends('layout/main')

@section('title','Form Pendaftaran Siswa')

@section('container')
 
	<div class="container">
    <br><a href="{{url('/siswa')}}" class="btn" style="border-radius:3px;background:greenyellow;color:white"><strong>Kembali Ke Data Siswa</strong></a>
    @foreach ($siswa as $users)
    <form action="{{url('/siswa/update')}}" method="post">
		<h3 style="font-family: sans-serif;color:grey">Form Pendaftaran Siswa</h3>
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $users->id }}">
		<label>
		  <p class="label-txt">MASUKKAN NAMA</p>
        <input type="text" class="input" name="nama" required="required" value="{{$users-> nama}}">
		  <div class="line-box">
			<div class="line"></div>
		  </div>
		</label>
		<label>
		  <p class="label-txt">MASUKKAN NO.HANDPHONE</p>
		  <input type="text" class="input" name="hp" required="required" value="{{$users-> hp}}">
		  <div class="line-box">
			<div class="line"></div>
		  </div>
		</label>
		<label>
		  <p class="label-txt">MASUKKAN EMAIL</p>
		  <input type="text" class="input" name="email" required="required" value="{{$users-> email}}">
		  <div class="line-box">
			<div class="line"></div>
		  </div>
		</label>
		 <button type="submit">SIMPAN DATA</button>
    </form>
    @endforeach
  </div>
<style>
form {
  width: 60%;
  margin: 60px auto;
  background: #efefef;
  padding: 60px 120px 80px 120px;
  text-align: center;
  -webkit-box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
  box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
  margin-top: 10px;
}
label {
  display: block;
  position: relative;
  margin: 40px 0px;
}
.label-txt {
  position: absolute;
  top: -1.6em;
  padding: 10px;
  font-family: sans-serif;
  font-size: .8em;
  letter-spacing: 1px;
  color: rgb(120,120,120);
  transition: ease .3s;
}
.input {
  width: 100%;
  padding: 10px;
  background: transparent;
  border: none;
  outline: none;
}

.line-box {
  position: relative;
  width: 100%;
  height: 2px;
  background: #BCBCBC;
}

.line {
  position: absolute;
  width: 0%;
  height: 2px;
  top: 0px;
  left: 50%;
  transform: translateX(-50%);
  background: #8BC34A;
  transition: ease .6s;
}

.input:focus + .line-box .line {
  width: 100%;
}

.label-active {
  top: -3em;
}

button {
  display: inline-block;
  padding: 12px 24px;
  background: rgb(220,220,220);
  font-weight: bold;
  color: rgb(120,120,120);
  border: none;
  outline: none;
  border-radius: 3px;
  cursor: pointer;
  transition: ease .3s;
}

button:hover {
  background: greenyellow;
  color: #ffffff;
}

</style>
<script>
$(document).ready(function(){

$('.input').focus(function(){
  $(this).parent().find(".label-txt").addClass('label-active');
});

$(".input").focusout(function(){
  if ($(this).val() == '') {
	$(this).parent().find(".label-txt").removeClass('label-active');
  };
});

});
</script>

@endsection