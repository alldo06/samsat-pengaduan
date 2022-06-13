@extends('layouts.main')

@section('container')

<div class="container">
	<div class="e-samsat">
		<div class="e-samsat-header">
			<h2>E-Samsat Jabar</h2>
		</div>
		<hr/>
		<div class="e-samsat-content">
			<div class="w50">
				<h3>E-Samsat Jabar</h3>
				<p>
					E-Samsat Jabar merupakan salah satu inovasi dari <span>Tim Pembina Samsat Jawa Barat </span> 
					dalam memberikan pelayanan pembayaran pajak kendaraan bermotor dan pengesahan 
					STNK dengan cara pembayaran melalui ATM Bank yang telah bekerja sama di seluruh 
					wilayah Indonesia.
				</p>
				<div class="button-to">
					<a href="https://sambara.puslia.jabarprov.go.id/sambara_v2/"
					class="button feature-btn">Sambara Web</a>
					<a href="https://play.google.com/store/apps/details?id=id.go.bapenda.sambara&hl=en&gl=ID"
					class="button feature-btn">Sambara Mobile</a></div>
				</div>
			<div class="w50">
				<h3>Keuntungan Menggunakan E-Samsat Jabar</h3>
				<p>
					E- Samsat Jabar memberikan banyak keuntungan serta kemudahan, pembayaran yang 
					dilakukan langsung oleh Wajib Pajak via ATM, diharapkan dapat menghindarkan 
					percaloan, menghilangkan korupsi penerimaan pajak, ketepatan perhitungan pajak 
					yang akan dibayarkan, serta tentunya memberikan kenyamanan bagi para Wajib Pajak.
				</p>
				<div class="highlight">
					<p>
						Pembayaran Pajak Kendaraan Bermotor melalui E-Samsat ini bisa dilakukan di 
						lebih dari 38.000 jaringan ATM-ATM Bank yang telah bekerja-sama di seluruh 
						wilayah Indonesia.
					</p>
				</div>
			</div>
			<br/>
		</div>
			<div class="syarat-ketentuan-header">
				<h2>Syarat & Ketentuan</h2>
			</div>
			<div class="syarat-dan-ketentuan">
				<div class="syarat">
					<ul>
						<li>Kendaraan tidak dalam status blokir Ranmor/blokir data kepemilikan.</li>
						<li>Wajib Pajak memiliki telpon dan nomor  seluler yang aktif (bila meminta kode bayar melalui SMS).</li>
						<li>Wajib Pajak Memiliki Nomor Rekening Tabungan dan Kartu ATM di Bank BJB atau Bank BNI atau Bank BCA.</li>
						<li>Berlaku untuk pembayaran pajak kendaraan daftar ulang 1 (satu) tahunan.</li>
						<li>Tidak berlaku untuk pembayaran pajak kendaraan yang bersamaan dengan ganti STNK (5 tahunan).</li>
						<li>Masa berlaku pajak yang bisa dibayar kurang dari 6 bulan dari masa jatuh tempo.</li>
						<li>Wajib pajak adalah perseorangan (bukan badan usaha/yayasan/badan sosial).</li>
					</ul>							
				</div>
			</div>
			<br />
			<div class="e-samsat-header">
				<h2>Mekanisme Pembayaran</h2>
			</div>
			<hr />
			<div class="e-samsat-content">
				<div class="box">
					<div class="row">
						<p>Sebelum melakukan pembayaran Pajak Kendaraan melalui E-Samsat Jabar, 
							nasabah harus sudah terlebih dahulu mendapatkan Kode Bayar, yang mana Kode 
							Bayar tersebut bisa didapatkan melalui Aplikasi Sambara atau SMS Gateway 
							Samsat atau Website Bapenda.
						</p>
						<p>Cara mendapatkan Kode Bayar bisa melalui (pilih salah satu) :</p>
					</div>
					<div class="row">
						<h3>1. Aplikasi Samabara</h3>
						<p>Aplikasi Sambara bisa diunduh terlebih dahulu di :</p>
						<p><a href="https://play.google.com/store/apps/details?id=id.go.bapenda.sambara&hl=en&gl=ID">Google Play Store</a></p>
						<ul>
							<li>Pada menu Sambara pilih Info PKB lalu isikan Nomor Polisi Kendaraan, 
								klik Cari, dan akan tertera besaran pajak yang harus dibayarkan,
							</li>
							<li>Selanjutnya klik Lanjut Daftar Online,</li>
							<li>Isikan No. KTP Pemilik kendaraan dan 5 digit terakhir No. Rangka 
								Kendaraan (No. Rangka bisa dilihat di lembar STNK),
							</li>
							<li>Lalu klik Proses</li>
						</ul>
					</div>
					<div class="row">
						<h3>2. SMS Gateway Samsat</h3>
						<p>Kirim SMS ke 0811 211 9211 dengan format :</p>
						<p>Esamsat [spasi] No. Rangka [spasi] NIK/KTP</p>
						<p>Contoh: Esamsat MH4LX150CEJP19XXX 3204391708730XXX</p>
					</div>
					<div class="row">
						<h3>3. Website Bapenda</h3>
						<p><a href="https://sambara.puslia.jabarprov.go.id/sambara_v2/">Kunjungi Halaman Info PKB (klik disini)</a></p>
						<ul>
							<li>Pada halaman Info PKB, isikan Nomor Polisi Kendaraan, klik Cari, dan 
								akan tertera besaran pajak yang harus dibayarkan,
							</li>
							<li>Selanjutnya klik Lanjut Daftar Online,</li>
							<li>Isikan No. KTP Pemilik kendaraan dan 5 digit terakhir No. Rangka 
								Kendaraan (No. Rangka bisa dilihat di lembar STNK),
							</li>
							<li>Lalu klik Proses</li>
						</ul>
					</div>
					<br />
					<hr />
					<br />
					<div class="row">
						<p>
							Setelah mendapatkan Kode Bayar silahkan melakukan pembayaran melalui :
						</p>
						<div class="list">
							<ul>
								<li>Tabungan Samsat (T-Samsat)</li>
								<li>Pembayaran PPOB</li>
								<li>Alfamart</li>
								<li>ATM</li>
								<li>Tokopedia</li>
								<li>Bukalapak</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
	</div>
</div>
		
@endsection