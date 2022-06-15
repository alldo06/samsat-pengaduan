<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardOverviewController extends Controller
{
    public function index()
		{
			$totalPengaduan = Pengaduan::count();

			$pengaduanBulanan = Pengaduan::whereMonth('created_at', Carbon::now()->month)->count();

			$pengaduanHariIni = Pengaduan::whereDay('created_at', Carbon::now()->day)->count();

			$menungguDitanggapi = Pengaduan::where('status', 'waiting')->count();
			
			// dd($menungguDitanggapi);

			return view('dashboard.index', [
				'totalPengaduan' => $totalPengaduan,
				'pengaduanBulanan' => $pengaduanBulanan,
				'pengaduanHariIni' => $pengaduanHariIni,
				'menungguDitanggapi' => $menungguDitanggapi,
			]);
		}
}
