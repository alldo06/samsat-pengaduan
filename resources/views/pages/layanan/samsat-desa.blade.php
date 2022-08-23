@extends('layouts.main')

@section('container')

<div class="container">
	<div class="jadwal-box">
		<div class="jadwal-header">
			<h2>Samsat Masuk Desa</h2>
			<hr/>
			<p>
			Demi memudahkan pelayanan dalam pengurusan pengesahan surat tanda nomor kendaraan 
			(STNK), serta pembayaran pajak kendaraan bermotor, Bapenda Jabar memberikan 
			pelayanannya hingga ke desa-desa.
			</p>
			<p>
			Program Samsat Masuk Desa (SAMADES) ini merupakan inovasi layanan pemungutan 
			pajak kendaraan bermotor dengan cara menjemput ke desa yang selama ini jauh atau
			 tidak terjangkau dari Kantor Samsat induk dan Samsat Keliling. Untuk Samsat Masuk Desa,
				akan ditempatkan di lokasi yang mudah dijangkau masyarakat yakni kantor lurah,
				 desa, camat dan balai desa pertemuan warga yang bertujuan untuk meningkatkan 
				 kesadaran masyarakat untuk membayar pajak.
			</p>
			<p>
			Kini para wajib pajak tidak harus datang ke Kantor Samsat Induk, cukup membayar 
			pajak di Samsat Masuk Desa (Samades) yang buka setiap hari kecuali hari libur.
			</p>
			<br/>
			<div class="syarat-ketentuan-header">
				<h2>Syarat & Ketentuan</h2>
			</div>
			<div class="syarat-dan-ketentuan">
				<div class="syarat w50">
					<h3>Persyaratan Pelayanan Samsat Keliling</h3>														
					<ul>
						<li>E-KTP Asli Pemilik sesuai data di STNK</li>
						<li>STNK Asli.</li>
						<li>Bukti Pelunasan PKB dan SWDKLL (SKPD tahun terakhir).</li>
					</ul>							
				</div>
				<div class="syarat2 w50">
					<h3>Maksud :</h3>
					<p>Memberikan kemudahan pelayanan dalam pembayaran PKB Untuk Pengesahan STNK 
						Setiap Tahun kepada warga di pelosok pedesaan.
					</p>
					<h3>Tujuan :</h3>
					<p>Untuk memberikan kemudahan bagi para wajib pajak yang berdomisili di wilayah 
						pedesaan yang lokasinya jauh dari Kantor Pelayanan Samsat.
					</p>
				</div>
			</div>
		</div>
		<br/>
		<span class="line blue-bg"></span>
		<div class="jadwal-title">
			<h2>Jadwal</h2>
		</div>
			<div class="jadwal-content">
					<div class="jadwal-hari">
						<h4 class="text-white">Senin - Sabtu</h4>
						<h4 class="text-white">08.00 - 12.00</h4>
					</div>
					<div class="jadwal-wt">
						<h4>Desa Patrol</h4>
					</div>
			</div>
	</div>
	
	{{-- <span class="line blue-bg"></span>
	<div class="sub-header">
		<h2>Dokumentasi</h2>
	</div> --}}
</div>
		
@endsection