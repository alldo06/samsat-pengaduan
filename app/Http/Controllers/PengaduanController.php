<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('pages.pengaduan.index', [
			"title" => "Pengaduan",
			"pengaduan" => Pengaduan::latest()->filter(request(['search']))->get()
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('pages.pengaduan.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		// $date = Carbon::now()->format('d/m/Y');

		$validatedData = $request->validate([
			'nama' => 'required|max:255',
			'alamat' => 'required|max:255',
			'email' => 'max:255',
			'nomor_hp' => 'required|numeric',
			'isi' => 'required|max:500',
			'image' => 'image|file|max:1024',
			'sk_agreement' => 'required',
		]);

		if ($request->file('image')) {
			$validatedData['image'] = $request->file('image')->store('pengaduan-images', 'public');
		}

		Pengaduan::create($validatedData);

		return redirect('/pengaduan');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Pengaduan  $pengaduan
	 * @return \Illuminate\Http\Response
	 */
	public function show(Pengaduan $pengaduan)
	{
		return view('pages.pengaduan.show', [
			'aduan' => $pengaduan,
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
