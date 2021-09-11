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
}
