<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;

class TanggapanController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('tanggapan.index', [
			'tanggapans' => Tanggapan::latest()->get()
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('tanggapan.create', [
			'pengaduan' => Pengaduan::all()
		]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$validatedData = $request->validate([
			'pengaduan_id' => 'required',
			'id_pengaduan' => 'required',
			'isi_tanggapan' => 'required'
		]);
		
		// if ($request->file('file')) {
		// 	$validatedData['file_name'] = $request->file('file')->getClientOriginalName();
		// 	$validatedData['file_extension'] = $request->file('file')->getClientOriginalExtension();
		// 	$validatedData['file'] = $request->file('file')->store('tanggapan-files', 'public');
		// 	// $validatedData['files'] = $request->file('files')->storeAs('tanggapan-files',$file_name);
		// }

		$validatedData['user_id'] = auth()->user()->id;

		Tanggapan::create($validatedData);

		return back();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Tanggapan  $tanggapan
	 * @return \Illuminate\Http\Response
	 */
	public function show(Tanggapan $tanggapan)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Tanggapan  $tanggapan
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Tanggapan $tanggapan)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Tanggapan  $tanggapan
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Tanggapan $tanggapan)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Tanggapan  $tanggapan
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Tanggapan $tanggapan)
	{
		//
	}
}
