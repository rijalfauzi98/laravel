<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BudgetController extends Controller
{
    public function index()
	{
		return view('budget/dashboard');
	}


	public function table()
	{
		$pegawai = DB::table('pegawai')->get();
		return view('budget/table',['pegawai' => $pegawai]);
	}

	public function profile()
	{
		return view('budget/profile');
	}

	public function tambah(Request $request)
	{
	// insert data ke table pegawai
		DB::table('pegawai')->insert([
			'pegawai_nama' => $request->nama,
			'pegawai_jabatan' => $request->jabatan,
			'pegawai_umur' => $request->umur,
			'pegawai_alamat' => $request->alamat
		]);
	// alihkan halaman ke halaman pegawai
		return redirect('/budget/table');
	}

	public function edit($id)
	{
	// mengambil data pegawai berdasarkan id yang dipilih
		$pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
		return view('budget/table',['pegawai' => $pegawai]);
	}

	// update data pegawai
	public function update(Request $request)
	{
	// update data pegawai
		DB::table('pegawai')->where('pegawai_id',$request->id)->update([
			'pegawai_nama' => $request->nama,
			'pegawai_jabatan' => $request->jabatan,
			'pegawai_umur' => $request->umur,
			'pegawai_alamat' => $request->alamat
		]);
	// alihkan halaman ke halaman pegawai
		return redirect('/budget/table');
	}


	// method untuk hapus data pegawai
	public function hapus($id)
	{
	// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('pegawai')->where('pegawai_id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
		return redirect('/budget/table');
	}


}
