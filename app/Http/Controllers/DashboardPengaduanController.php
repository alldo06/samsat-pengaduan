<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;

class DashboardPengaduanController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$pengaduans = Pengaduan::latest()->paginate(8);
		$tanggapans = Tanggapan::all();
		// if ($pengaduans->tanggapan) {
		// 	$pengaduans->status = 'Done';
		// }
		return view('dashboard.pengaduan.index', [
			'pengaduans' => $pengaduans,
			'tanggapans' => $tanggapans
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Pengaduan  $pengaduan
	 * @return \Illuminate\Http\Response
	 */
	public function show(Pengaduan $pengaduan)
	{
		return view('dashboard.show-pt', [
			'pengaduan' => $pengaduan,
			'tanggapan' => Tanggapan::all()
		]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Pengaduan  $pengaduan
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Pengaduan $pengaduan)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Pengaduan  $pengaduan
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Pengaduan $pengaduan)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Pengaduan  $pengaduan
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Pengaduan $pengaduan)
	{
		//
	}
}
