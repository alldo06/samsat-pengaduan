@extends('dashboard.layouts.main')

@section('container')
		
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 my-5 ml-3">
		<h1 class="f-24 font-weight-bold title-detail">Pengaduan</h1>
	</div>   

	{{-- @if (session()->has('success'))
		<div class="alert alert-success col-lg-12" role="alert">
			{{ session('success') }}
		</div>
	@endif --}}
	
	<div class="table-responsive table-wrapper">
		<table class="table table-hover table-data">
			<caption class="table-caption">
				<span class="f-18">List</span>
				<a href="/dashboard/pengaduan/export-pengaduan" class="btn button-red float-right">Export to PDF</a>
			</caption>
			<thead>
				<tr>
					{{-- <th scope="col">#</th> --}}
					<th scope="col">@sortablelink('nama', 'Nama')</th>
					<th scope="col">@sortablelink('isi', 'Isi Pengaduan')</th>
					<th scope="col">@sortablelink('created_at', 'Tanggal')</th>
					<th scope="col">@sortablelink('alamat', 'Alamat')</th>
					<th scope="col">@sortablelink('email', 'Email')</th>
					<th scope="col">No. Telp.</th>
					<th class="text-center" scope="col">@sortablelink('status', 'Status')</th>
					{{-- <th scope="col">Action</th>  --}}
				</tr>
			</thead>
			<tbody>
				@foreach ($pengaduans as $pengaduan)
					<tr class="trc">
						<td onclick="location.href='/dashboard/pengaduan/{{ $pengaduan->id_pengaduan }}'">{{ $pengaduan->nama }}</td>
						<td onclick="location.href='/dashboard/pengaduan/{{ $pengaduan->id_pengaduan }}'">
							<span class="substring">
								{!! $pengaduan->isi !!}
							</span>
						</td>
						<td onclick="location.href='/dashboard/pengaduan/{{ $pengaduan->id_pengaduan }}'">{{ $pengaduan->created_at->format('d/m/Y') }}</td>
						<td onclick="location.href='/dashboard/pengaduan/{{ $pengaduan->id_pengaduan }}'">{{ $pengaduan->alamat }}</td>
						<td onclick="location.href='/dashboard/pengaduan/{{ $pengaduan->id_pengaduan }}'">{{ $pengaduan->email }}</td>
						<td onclick="location.href='/dashboard/pengaduan/{{ $pengaduan->id_pengaduan }}'">{{ $pengaduan->nomor_hp }}</td>
						<td onclick="location.href='/dashboard/pengaduan/{{ $pengaduan->id_pengaduan }}'" class="text-center">
							<span @class([
								'text-uppercase',
								'status-data-waiting' => $pengaduan->status == 'waiting',
								'status-data-done' => $pengaduan->status == 'done',
							])>
								{{ $pengaduan->status }}
							</span>
						</td>
						<td>
							<form action="/dashboard/pengaduan/{{ $pengaduan->id_pengaduan }}" method="post" class="d-inline">
								@method('delete')
								@csrf
								<button class="badge bg-danger border-0 fa fa-trash" onclick="return confirm('Delete this ?')">
								</button>
							</form>
						</td>
					</tr>						
				@endforeach
			</tbody>
			<caption class="p-0">					
				<div class="d-flex justify-content-end table-pagination">
					{{ $pengaduans->appends(request()->except('page'))->links() }}
				</div>
			</caption>
		</table>
	</div>	

@endsection