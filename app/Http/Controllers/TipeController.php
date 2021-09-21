<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TipeController extends Controller
{
    public function index()
	{
    	// mengambil data dari table pegawai
		$tipe = DB::table('a_tipe')->get();

    	// mengirim data pegawai ke view index
		return view('master/tipe/index',['tipe' => $tipe]);
	}

    // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{
	// memanggil view tambah
		return view('master/tipe/tambah');
	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
	// insert data ke table pegawai
		DB::table('a_tipe')->insert([
			'tipe_id' => $request->tipe_id,
			'tipe_nama' => $request->nama,
			'user_id' => $request->user
		]);
	// alihkan halaman ke halaman pegawai
		return redirect('master/tipe');
	}

	// method untuk edit data pegawai
	public function edit($id)
	{
	// mengambil data pegawai berdasarkan id yang dipilih
		$tipe = DB::table('a_tipe')->where('rowid',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
		return view('master/tipe/edit',['tipe' => $tipe]);
	}

	// update data pegawai
	public function update(Request $request)
	{
	// update data pegawai
		DB::table('a_tipe')->where('rowid',$request->id)->update([
			'tipe_id' => $request->tipe_id,
			'tipe_nama' => $request->nama,
			'user_id' => $request->user
		]);
	// alihkan halaman ke halaman pegawai
		return redirect('/master/tipe');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
	// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('a_tipe')->where('rowid',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
		return redirect('/master/tipe');
	}
}
