@extends('layouts.main')

@section('container')
<div class="home">
	<div class="jumbotron" id="home"></div>
	<div class="jumbotron-logo-top">
		<div class="logo-left">
			<a href="https://bapenda.jabarprov.go.id/">
				<img src="/img/Logo-Bapenda-Jabar.png" alt="Logo Bapenda" />
			</a>
		</div>
		<div class="logo-right">
			<div class="logo-right-top">
				<a href="https://humas.polri.go.id/category/satker/polda-jabar/">
					<img src="/img/logo-polri.png" alt="" />
				</a>
				<a href="https://jabarprov.go.id/">
					<img src="/img/logo-provinsi-jabar.png" alt="" />
				</a>
			</div>
			<div class="logo-right-bottom">
				<a href="https://www.jasaraharja.co.id/">
					<img src="/img/Logo Jasa Raharja.png" alt="" class="logo-size" />
				</a>
				<a href="https://www.bankbjb.co.id/">
					<img src="/img/Logo Bank BJB.png" alt="" class="logo-size" />
				</a>
			</div>
		</div>
	</div>
	<div class="jumbotron-title">
		<h1>P3D WILAYAH KAB. INDRAMAYU II HAURGEULIS</h1>
		<h2 class="h3">"Aja klalen bayar pajak, jeh"</h2>
	</div>
	{{-- <div class="maskot">
		<div class="gubernur">
			<img src="/img/gubernur.png" alt="Gubernur dan Wagub" />
		</div>
		<div class="penda">
			<img src="/img/penda3.png" alt="Maskot Bapenda" />
		</div>
			{/* <img src={kangPenda} alt="" class="aldo" />
			<img src={buPenda} alt="" class="hani" /> */}
	</div> --}}
	<div class="apps-links">
		<a
			href="https://sambara.puslia.jabarprov.go.id/sambara_v2/"
			class="apps-box web"
		>
			<h3>Website : </h3>
			<img src="/img/sambara-logo.png" alt="Sambara" class="sambara-web" />
		</a>
		<a
			href="https://play.google.com/store/apps/details?id=id.go.bapenda.sambara&hl=en&gl=ID"
			class="apps-box mobile"
		>
			<h3>Mobile Apps : </h3>
			<img src="/img/sambara-logo-mobile.png" alt="" class="sambara-mobile" />
		</a>
		<br />
	</div>
	{{-- <div class="greetings">
		<img src="/img/gubernur.png" alt="Gubernur dan Wagub" class="gubmobile" />
		<img src="/img/greeting2.png" alt="" class="pendamobile" />
	</div> --}}
	<div class="slog">
		<h1>
			<span>BAPENDA</span> BISA JABAR JUARA !
		</h1>
	</div>
	<div class="fluid">
		{{-- {/* <div class="content-row blue-bg">
			<div class="w50">
				<div class="box-icon">
					<img src={pintripleuntung} alt="Triple Untung Plus" />
				</div>
			</div>
			<div class="w50">
				<div class="deskripsi">
					<h2>TRIPLE UNTUNG PLUS</h2>
					<p>Hadir kembali dari 1 Agustus 2021 - 24 Desember 2021</p>
					<a href="/e-samsat-jabar" class="button feature-btn">
						Details
					</a>
				</div>
			</div>
		</div> */} --}}

		<div class="content-row blue-bg">
			<div class="w50 vertical-auto">
				<div class="box-icon">
					<img src="/img/Icon-esamsat.png" alt="Icon Feature" />
				</div>
			</div>
			<div class="w50 vertical-auto">
				<div class="deskripsi">
					<h2>E-SAMSAT JABAR</h2>
					<p>Cara mudah bayar pajak kendaraan online</p>
					<a href="/samsat/e-samsat" class="button feature-btn">
						Details
					</a>
				</div>
			</div>
		</div>

		{{-- {/* <div class="content-row column-rev">
			<div class="w50">
				<div class="deskripsi even">
					<h2 class="small">SAMSAT KELILING & SAMSAT GENDONG</h2>
					<p>Bayar pajak kendaraan kini lebih dekat dengan Anda</p>
				</div>
			</div>
			<div class="w50">
				<div class="box-icon">
					<div class="samling">
						<h2>SAMLING</h2>
					</div>
					<div class="samdong">
						<h2>SAMDONG</h2>
					</div>
				</div>
			</div>
		</div> */} --}}

		<div class="content-row column-rev">
			<div class="w50">
				<div class="deskripsi even">
					<h2>SAMSAT KELILING & SAMSAT GENDONG</h2>
					<p>Bayar pajak kendaraan kini lebih dekat dengan Anda</p>
				</div>
			</div>
			<div class="w50">
				<div class="box-icon">
					<img src="/img/samkel-icon.png" alt="Icon Feature" class="icon-mobil" />
				</div>
			</div>
		</div>

		<div class="content-row blue-bg">
			<div class="w50">
				<div class="box-icon">
					<div class="samling">
						<h2 class="">SAMADES</h2>
					</div>
				</div>
			</div>
			<div class="w50">
				<div class="deskripsi">
					<h2>SAMSAT MASUK DESA</h2>
					<p>Bayar pajak kendaraan kini sudah masuk desa</p>
				</div>
			</div>
		</div>

		<div class="content-row column-rev">
			<div class="w50">
				<div class="deskripsi even">
					<h2 class="small">SAMSAT KECAMATAN</h2>
					<p>Bayar pajak kendaraan kini sudah masuk kecamatan</p>
				</div>
			</div>
			<div class="w50">
				<div class="box-icon">
					<div class="samling">
						<h2>SAMSAT</h2>
					</div>
					<div class="samdong">
						<h2>KECAMATAN</h2>
					</div>
				</div>
			</div>
		</div>

		<div class="home-footer">
			<div class="home-footer-head">
				<img src="/img/logo-humas-samsat-hgl.png" alt="Samsat Haurgeulis" />
				<h3>SAMSAT HAURGEULIS</h3>
			</div>
			<div class="home-footer-info">
				<div class="row-info">
					<a href="https://www.facebook.com/samsathaurgeulis-108546404153784">
						<FaFacebookF />
					</a>
					<a href="https://www.instagram.com/samsathaurgeulis/">
						<FaInstagram />
					</a>
				</div>
				<div class="row-info">
					<ul>
						<li>
							<a href="https://bapenda.jabarprov.go.id/">Bapenda Jabar</a>
						</li>
						<hr />
						<li>
							<a href="/layanan/samsat-keliling">Samling</a>
						</li>
						<hr />
						<li>
							<a href="/layanan/samsat-gendong">Samdong</a>
						</li>
						<hr />
						<li>
							<a href="/layanan/samsat-kecamatan">Samkec</a>
						</li>
						<hr />
						<li>
							<a href="/layanan/samsat-desa">Samades</a>
						</li>
						<hr />
						<li>
							<a href="/pengaduan">Pengaduan</a>
						</li>
						<hr />
						<li>
							<a href="/samsat/e-samsat">E-Samsat</a>
						</li>
					</ul>
				</div>
				<div class="row-info alamat">
					<p>
						Jl. Jenderal Sudirman No.1, Bojongnegara, Sumbermulya Kec.
						Haurgeulis, Kabupaten Indramayu, Jawa Barat
					</p>
					<p>(0234) 742750</p>
				</div>
			</div>
		</div>
	</div>
</div>
	
@endsection