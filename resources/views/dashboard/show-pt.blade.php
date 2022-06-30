@extends('dashboard.layouts.main')

@section('container')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-lg-2 mt-5 mb-lg-2 ml-3 mb-3">
		<h1 class="h3 font-weight-bold title-detail">
			@if (empty($pengaduan->tanggapan->isi_tanggapan))
				Pengaduan
			@else
				Pengaduan & Tanggapan
			@endif
		</h1>
	</div>
	<div class="detail-pt mx-md-4 px-lg-5">

		{{-- pengaduan --}}
		<div class="my-lg-2 py-lg-2 px-3">
			<small class="text-muted">{{ $pengaduan->created_at->format('d/m/Y') }}</small>
			<p class="fw-600 mt-3 mb-1 h4">Oleh {{ $pengaduan->nama }}</p>
			<p class="text-muted f-16">{{ $pengaduan->alamat }}</p>
			@if ($pengaduan->image)
			<div class="image-wrapper">
				<img src="{{ asset('storage/' . $pengaduan->image) }}" alt="Gambar Pengaduan" class="image-full">
			</div>
			@endif
			<article class="py-2 mb-0 f-18">{!! $pengaduan->isi !!}</article>
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
		@if (empty($pengaduan->tanggapan->isi_tanggapan))
		<div class="tanggapan my-lg-3 py-lg-3 px-sm-3 mb-3 pb-3">			
			<form method="POST" action="/tanggapan" class="col-lg-12" enctype="multipart/form-data">
				@csrf
				<input type="hidden" name="pengaduan_id" id="pengaduan_id" value="{{ $pengaduan->id }}">
				<input type="hidden" name="id_pengaduan" id="id_pengaduan" value="{{ $pengaduan->id_pengaduan }}">
				<div class="mb-3">
					{{-- <label for="isi_tanggapan" class="form-label f-20 font-weight-bold mb-3">Tanggapan</label>
					<textarea class="form-control @error('isi_tanggapan') is-invalid @enderror" id="summernote" name="isi_tanggapan" required value="{{ old('isi_tanggapan') }}" rows="5"></textarea> --}}
					
					<input id="isi_tanggapan" type="hidden" name="isi_tanggapan">
					<trix-editor input="isi_tanggapan"></trix-editor>

					{{-- @if (empty($pengaduan->tanggapan->file))
					<div class="mb-3">
						<label for="file" class="form-label ">File</label>
						<img class="img-preview img-fluid mb-2 col-sm-5">
						<input class="form-control @error('file') is-invalid @enderror" type="file" id="file" name="file" onchange="previewfile()">
						@error('file')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>
					@else
					<div class="image-wrapper">
						TEST
					</div>
					@endif --}}

				</div>

				<div class="d-flex justify-content-end">
					<button type="submit" class="btn button-red tanggapi-btn">Tanggapi</button>
				</div>
			</form>
		</div>
		@else
		<div class="tanggapan my-lg-3 py-lg-3 px-sm-3 mb-3 pb-3">
			<small class="text-muted mb-3">{{ $pengaduan->tanggapan->created_at->format('d/m/Y') }}</small>
			<p class="fw-600 bold f-20 mb-0">Tanggapan</p>
			<p class="f-16">Ditanggapi oleh {{ $pengaduan->tanggapan->userResponse->nama }}</p>
			<article class="py-2 mb-0 f-18">{!! $pengaduan->tanggapan->isi_tanggapan !!}</article>
		</div>
		@endif

		{{-- <a href="/tanggapan/create" class="btn btn-outline-success">Beri tanggapan</a> --}}
	</div>
@endsection