<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Rencana;
use Carbon;

class RencanaController extends Controller
{
    public function index()
	{
		$rencana = DB::table('a_rencana')->get();
		$no = 1;
		return view('transaksi/rencana/index',['rencana' => $rencana],['no' => $no]);
	}

	public function tambah()
	{
		//untuk mengambil data combo box di table tipe
		$tipe = DB::table('a_tipe')->get();
		$klas = DB::table('a_klasifikasi')->get();
		return view('transaksi/rencana/tambah',['tipe' => $tipe],['klas' => $klas]);


	}

	public function store(Request $request)
	{
		DB::table('a_rencana')->insert([
			'no_referensi' => $request->noref,
			'tgl_buat' => $request->tglbuat,
			'tgl_tempo' => $request->tgltempo,
			'budget_anggaran' => $request->budget,
			'tipe_anggaran' => $request->tipe,
			'klasifikasi' => $request->klas,
			'deskripsi' => $request->deskripsi,
			'divisi' => $request->divisi,
			'user_id' => $request->user
		]);
		return redirect('transaksi/rencana')
		->with('success_message', 'Berhasil menambah Data baru');;
	}

	public function edit($id)
	{
		$rencana = DB::table('a_rencana')->where('rowid',$id)->get();
		$tipe = DB::table('a_tipe')->get();
		$klas = DB::table('a_klasifikasi')->get();
		// $rencana = Rencana::query()->where('rowid', $id)->first();
		// $rencana = Rencana::query()->with('tipe')->where('rowid', $id)->first();
		// return response()->json($rencana);
		// return view('transaksi/rencana/edit', ['r' => $rencana, 'klas' => $klas, 'tipe' => $tipe]);
		return view('transaksi/rencana/edit',['rencana' => $rencana, 'tipe' => $tipe, 'klas' => $klas]);
		// return response()->json($klas);
	}

	public function update(Request $request)
	{
		DB::table('a_rencana')->where('rowid',$request->id)->update([
			'no_referensi' => $request->noref,
			'tgl_buat' => $request->tglbuat,
			'tgl_tempo' => $request->tgltempo,
			'budget_anggaran' => $request->budget,
			'tipe_anggaran' => $request->tipe,
			'klasifikasi' => $request->klas,
			'deskripsi' => $request->deskripsi,
			'divisi' => $request->divisi,
			'user_id' => $request->user
		]);
		return redirect('/transaksi/rencana')
		->with('success_message', 'Berhasil mengubah Data');
	}

	public function hapus($id)
	{
		DB::table('a_rencana')->where('rowid',$id)->delete();
		return redirect('/transaksi/rencana');
	}

}
