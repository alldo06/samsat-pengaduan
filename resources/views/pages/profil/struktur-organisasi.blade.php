@extends('layouts.main')

@section('container')
		
<div class="container">
	<div class="box">
		<div class="struktur-header">
			<h2>Struktur Organisasi</h2>
		</div>
		<hr/>
		<div class="struktur-content">
			<div class="content-row struktur-content-row">
				<div class="bagan-card">
					<img src='/img/Deni_Handoyo.jpg' alt="Kapus"/>
					<h4>H. Deni Handoyo, S.Sos., M.M</h4>
					<p>Kepala Pusat</p>
				</div>
			</div>
			<div class="content-row struktur-content-row2">
				<div class="bagan-card">
					<img src="/img/Bagus-Setiadi.jpg" alt="Kasubag"/>
					<h4>Bagus Setiyadi, S.H</h4>
					<p>Kasubag Tata Usaha</p>
				</div>
				<div class="bagan-card">
					<img src="/img/Nandang-Juhaeni.jpg" alt="KPP"/>
					<h4>Nandang Juhaeni Permana, S.P</h4>
					<p>Kasi Penerimaan dan Penagihan</p>
				</div>
				<div class="bagan-card">
					<img src="/img/Erin.jpg" alt="KPP"/>
					<h4>Erin Novaristiawan, ST., MBA</h4>
					<p>Kasi Pendataan dan Penetapan</p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection