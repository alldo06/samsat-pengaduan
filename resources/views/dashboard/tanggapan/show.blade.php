@extends('dashboard.layouts.main')

@section('container')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 my-5 ml-3">
		<h1 class="f-24 font-weight-bold title-detail">Pengaduan & Tanggapan</h1>
	</div>
	<div class="detail-pt mx-5">

		{{-- pengaduan --}}
		<div class="my-3 p-3">
			<small class="text-muted">{{ $tanggapan->created_at }}</small>			
			<p class="font-weight-bold my-3 f-20">Oleh {{ $tanggapan->nama }}</p>
			<p class="py-2 mb-0 f-18">{{ $tanggapan->isi_tanggapan }}</p>
		</div>

		{{-- Looping --}}
		{{-- <div class="my-3">
			<h5>Pengpengaduan</h5>
			<p>{{ $pengaduan->nama }}</p>
			<p>{{ $pengaduan->isi }}</p>
		</div>
		<div class="my-3">
			<h5>Tanggapan</h5>
			@if (empty($pengaduan->tanggapan->isi_tanggapan))
			<p>Belum ada tanggapan</p>
			@else
			<p>{{ $pengaduan->tanggapan->isi_tanggapan }}</p>
			@endif
		</div> --}}
		<hr>

		{{-- Tanggapan --}}
		{{-- @if (empty($pengaduan->tanggapan->isi_tanggapan))
		<div class="tanggapan my-3 p-3">			
			<form method="POST" action="/tanggapan" class="col-lg-8" enctype="multipart/form-data">
				@csrf
				<input type="hidden" name="pengpengaduan_id" id="pengpengaduan_id" value="{{ $pengaduan->id }}">
				<div class="mb-3">
					<label for="isi_tanggapan" class="form-label">Isi Tanggapan</label>
					<textarea class="form-control @error('isi_tanggapan') is-invalid @enderror" id="isi_tanggapan" name="isi_tanggapan" required value="{{ old('isi_tanggapan') }}"></textarea>
				</div>
				<button type="submit" class="btn btn-success">Kirim</button>
			</form>
		</div>
		@else
		<div class="tanggapan my-3 p-3">
			<p class="font-weight-bold f-20">Tanggapan</p>
			<small class="text-muted mb-3">{{ $pengaduan->tanggapan->created_at }}</small>		
			<p class="py-2 mb-0 f-18">{{ $pengaduan->tanggapan->isi_tanggapan }}</p>
		</div>
		@endif --}}

		{{-- <a href="/tanggapan/create" class="btn btn-outline-success">Beri tanggapan</a> --}}

		{{-- Beri Tanggapan --}}
		<div class="tanggapan">
		</div>
	</div>
	
@endsection