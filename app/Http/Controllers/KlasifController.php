<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KlasifController extends Controller
{
    public function index()
	{
		$klasifikasi = DB::table('a_klasifikasi')->get();
		return view('master/klas/index',['klasifikasi' => $klasifikasi]);
	}

	public function tambah()
	{
		return view('master/klas/tambah');
	}

	public function store(Request $request)
	{
		DB::table('a_klasifikasi')->insert([
			'klasifikasi_id' => $request->klas_id,
			'klasifikasi_nama' => $request->nama,
			'user_id' => $request->user
		]);
		return redirect('master/klas')
		->with('success_message', 'Berhasil menambah Data baru');;
	}

	public function edit($id)
	{
		$klasifikasi = DB::table('a_klasifikasi')->where('rowid',$id)->get();
		return view('master/klas/edit',['klasifikasi' => $klasifikasi]);
	}

	public function update(Request $request)
	{
		DB::table('a_klasifikasi')->where('rowid',$request->id)->update([
			'klasifikasi_id' => $request->klas_id,
			'klasifikasi_nama' => $request->nama,
			'user_id' => $request->user
		]);
		return redirect('/master/klas')
		->with('success_message', 'Berhasil mengubah Data');
	}

	public function hapus($id)
	{
		DB::table('a_klasifikasi')->where('rowid',$id)->delete();
		return redirect('/master/klas');
	}
}
