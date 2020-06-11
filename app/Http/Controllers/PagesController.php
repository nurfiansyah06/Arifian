<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    //
    public function home()
    {
        return view ('index');

    }

    public function about()
    {
        return view ('about');

    }

    public function tambah()
    {
        return view ('tambah');

    }

    public function store(Request $request)
	{
		DB::table('students')->insert([
		'nama' => $request->nama,
		'hp' => $request->hp,
		'email' => $request->email,
	]);
	return redirect('/siswa')->with(['success' => 'Data Berhasil Disimpan']);
	}

	public function edit($id)
	{

	$siswa = DB::table('students')->where('id',$id)->get();
	return view('edit',['siswa' => $siswa]);
 
	}
	
	public function update(Request $request)
	{
	DB::table('students')->where('id',$request->id)->update([
	'nama' => $request->nama,
	'hp' => $request->hp,
	'email' => $request->email,
	]);
	return redirect('/siswa')->with(['success' => 'Data Berhasil Diganti']);
	}

	public function hapus($id)
	{

	DB::table('students')->where('id',$id)->delete();
	return redirect('/siswa')->with(['success' => 'Data Berhasil Dihapus']);
	}	
}
