<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
	{
		$user = DB::table('user')->get();
		return view('user/index',['user' => $user]);
	}

	public function tambah()
	{
		return view('user/tambah');
	}

	public function store(Request $request)
	{
		DB::table('user')->insert([
			'user_nama' => $request->nama,
			'user_umur' => $request->umur,
			'user_alamat' => $request->alamat
		]);
		return redirect('/user');
	}

	public function edit($id)
	{
		$user = DB::table('user')->where('user_id',$id)->get();
		return view('user/edit',['user' => $user]);
	}

	public function update(Request $request)
	{
		DB::table('user')->where('user_id',$request->id)->update([
			'user_nama' => $request->nama,
			'user_umur' => $request->umur,
			'user_alamat' => $request->alamat
		]);
		return redirect('/user');
	}

	public function hapus($id)
	{
		DB::table('user')->where('user_id',$id)->delete();
		return redirect('/user');
	}
}
