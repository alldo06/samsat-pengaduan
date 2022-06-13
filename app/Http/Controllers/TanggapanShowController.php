<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;

class TanggapanShowController extends Controller
{    
	public function show(Pengaduan $pengaduan)
	{
		return view('dashboard.pengaduan.show', [
			"pengaduan" => $pengaduan,
			'tanggapan' => Tanggapan::all()
		]);
	}
}
