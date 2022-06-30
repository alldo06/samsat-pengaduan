@extends('layouts.main')

@section('container')
<div class="container mb-4">
	<div class="pengaduan">
		<div class="pengaduan-header">
			<h2>Saran & Pengaduan</h2>
		</div>
		<hr/>
		<div class="pengaduan-content">
			<p class="pengaduan-desc">
				Untuk menyampaikan saran atau pengaduan atau pertanyaan silahkan klik tombol "Buat Pengaduan".
			</p>
			<div class="my-3">
				<a href="/pengaduan/create" class="btn button-red">Buat Pengaduan</a>
				<form action="/pengaduan" class="input-group my-3 searchbar">
					<div class="form-outline">
						<input type="text" class="form-control" placeholder="Search . . ." name="search" value="{{ request('search') }}">
					</div>
					<button class="btn btn-outline-danger" type="submit">
						<span data-feather="search" class="feather text-white searchbar-icon"></span>
					</button>
				</form>
				@if ($pengaduan->count())
					@foreach ($pengaduan as $aduan)
					<div onclick="location.href='/pengaduan/{{ $aduan->id_pengaduan }}'" class="card-pgd py-4 px-4 my-4">
						{{-- <div class="d-flex justify-content-between">
							<p class="f-18 author">Oleh {{ $aduan->nama }}</p>
							@if ($aduan->status == 'waiting')
								<p class="f-16">Status : Belum ditanggapi</p>									
							@elseif ($aduan->status == 'done')
								<p class="f-16">Status : Sudah ditanggapi</p>
							@else
								<p class="f-16">-</p>
							@endif
						</div> --}}
						@if ($aduan->status == 'waiting')
							<p class="f-14 text-muted">Status : Belum ditanggapi</p>
						@elseif ($aduan->status == 'done')
							<p class="f-14 text-muted">Status : Sudah ditanggapi</p>
						@else
							<p class="f-14 text-muted">-</p>
						@endif
						<p class="f-18 author">Oleh {{ $aduan->nama }}</p>
						<p class="substring-card pt-2 mb-1">{!! $aduan->isi !!}</p>
						<small class="f-14 text-muted">{{ $aduan->created_at->format('d/m/Y') }}</small>
					</div>
					@endforeach
					{{-- @foreach ($pengaduan as $aduan)
						<div class="card-pgd p-3 my-4">
							<a href="/pengaduan/{{ $aduan->id }}">{{ $aduan->nama }}</a>
							<p>{{ $aduan->isi }}</p>
						</div>
					@endforeach --}}
				@else
					<p class="text-center fs-4 my-5">Pengaduan tidak ditemukan</p>
				@endif
			</div>
		</div>
		<div class="d-flex justify-content-center paginating">
			{{ $pengaduan->appends(request()->except('page'))->links('pagination::paging') }}
		</div>
	</div>
</div>
	
@endsection

