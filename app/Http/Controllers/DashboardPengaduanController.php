<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardPengaduanController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$pengaduans = Pengaduan::with('tanggapan')->sortable()->latest()->paginate(10);
		// $tanggapans = Tanggapan::all();
		
		foreach ($pengaduans as $pengaduan) {
			if ($pengaduan->tanggapan) {
				$pengaduan->status = 'done';
				$pengaduan->save();
				// dd('hit', $pengaduan->status);
			}
		}
		
		return view('dashboard.pengaduan.index', compact('pengaduans'));
	}

	public function exportPDF()
		{
			// $this->index();
			$pengaduans = Pengaduan::all();
			// view()->share('pengaduans', $pengaduans);
			$pdf = PDF::loadView('dashboard.pengaduan.into-pdf', ['pengaduans' => $pengaduans]);

			return $pdf->download('pengaduan.pdf');
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
		
		if ($pengaduan->image) {
			Storage::delete($pengaduan->image);
		}

		Pengaduan::destroy($pengaduan->id);

		return redirect('/dashboard/pengaduan');
	}
}
