@extends('layouts.main')

@section('container')
<div class="container">
	<div class="detail-pt px-5">
		<div class="pengaduan-header">
			<h2>Saran, Pengaduan dan Permintaan Informasi</h2>
		</div>
		<hr>

		{{-- Aduan --}}
		<div class="my-3 p-3">
			<small class="text-muted">{{ $aduan->created_at }}</small>			
			<p class="h3 fw-500 mt-2 pt-title">Oleh {{ $aduan->nama }}</p>
			@if ($aduan->image)
			<div class="my-4" style="max-height: 350px; overflow:hidden">
				<img src="{{ asset('storage/' . $aduan->image) }}" alt="Gambar Pengaduan" class="img-fluid">
			</div>
			@endif
			<p class="py-2 px-4 mb-0 f-18">{{ $aduan->isi }}</p>
		</div>

		{{-- Looping --}}
		{{-- <div class="my-3">
			<h5>Pengaduan</h5>
			<p>{{ $aduan->nama }}</p>
			<p>{{ $aduan->isi }}</p>
		</div>
		<div class="my-3">
			<h5>Tanggapan</h5>
			@if (empty($aduan->tanggapan->isi_tanggapan))
			<p>Belum ada tanggapan</p>
			@else
			<p>{{ $aduan->tanggapan->isi_tanggapan }}</p>
			@endif
		</div> --}}
		<hr>

		{{-- Tanggapan --}}
		@if (empty($aduan->tanggapan->isi_tanggapan))
		<div class="text-center mt-3 mb-5 p-3">		
			<p class="fw-500 h3">Belum ada tanggapan</p>
		</div>
		@else
		<div class="tanggapan mt-3 mb-5 p-3">
			<small class="text-muted">{{ $aduan->tanggapan->created_at }}</small>			
			<p class="font-weight-bold">Tanggapan</p>
			<p class="py-2 mb-0">{{ $aduan->tanggapan->isi_tanggapan }}</p>
		</div>
		@endif

		{{-- <a href="/tanggapan/create" class="btn btn-outline-success">Beri tanggapan</a> --}}

		{{-- Beri Tanggapan --}}
		{{-- <div class="tanggapan">
			<form method="POST" action="/tanggapan" class="col-lg-8" enctype="multipart/form-data">
				@csrf
				<input type="hidden" name="pengaduan_id" id="pengaduan_id" value="{{ $aduan->id }}">
				<div class="mb-3">
					<label for="isi_tanggapan" class="form-label">Isi Tanggapan</label>
					<textarea class="form-control @error('isi_tanggapan') is-invalid @enderror" id="isi_tanggapan" name="isi_tanggapan" required value="{{ old('isi_tanggapan') }}"></textarea>
				</div>
				<button type="submit" class="btn btn-success">Kirim</button>
			</form>
		</div> --}}
	</div>
</div>
	
@endsection