@extends('layouts.main')

@section('container')
<div class="container my-3">
	<h1>Tanggapan</h1>
	{{-- <a href="/pengaduan/create" class="btn btn-success">Buat Pengaduan</a> --}}
	<hr>
	<div class="card">
		@foreach ($tanggapans as $tanggapan)
			<a href="/tanggapan/{{ $tanggapan->id }}">{{ $tanggapan->id }}</a>
			<p>{{ $tanggapan->isi_tanggapan }}</p>
		@endforeach
	</div>
</div>
	
@endsection

