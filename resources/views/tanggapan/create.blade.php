@extends('layouts.main')

@section('container')
<div class="container my-3">
	<h1>Tanggapan</h1>
	@foreach ($pengaduan as $item)
			
	@endforeach
	<h3>{{ $item->nama }}</h3>
	<p>{{ $item->isi }}</p>
	<form method="POST" action="/tanggapan" class="col-lg-8" enctype="multipart/form-data">
		@csrf
		<input type="hidden" name="pengaduan_id" id="pengaduan_id" value="{{ $item->id }}">
		<div class="mb-3">
			<label for="isi_tanggapan" class="form-label">Isi Tanggapan</label>
			<textarea class="form-control @error('isi_tanggapan') is-invalid @enderror" id="isi_tanggapan" name="isi_tanggapan" required value="{{ old('isi_tanggapan') }}"></textarea>
		</div>
		<button type="submit" class="btn btn-success">Kirim</button>
	</form>
</div>
	
@endsection

