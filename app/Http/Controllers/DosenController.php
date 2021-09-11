<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
	public function index(){
		$nama = "Rijal Fauzi";
		$pelajaran = ["Algoritma & Pemrograman","cek","Pemrograman Web"];
    	return view('biodata',['nama' => $nama , 'matkull' => $pelajaran]);
	}
}
