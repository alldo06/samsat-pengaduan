@extends('dashboard.layouts.main')

@section('container')
		
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 my-5 ml-3">
		<h1 class="h5 font-weight-bold">Tanggapan</h1>
	</div>   

	@if (session()->has('success'))
		<div class="alert alert-success col-lg-12" role="alert">
			{{ session('success') }}
		</div>
	@endif
	
	
	<div class="table-responsive table-wrapper">
		<table class="table table-hover table-data">
			<caption class="table-caption">List</caption>
			<thead>
				<tr>
					<th scope="col">Isi Tanggapan</th>
					<th scope="col">Tanggal</th>
					{{-- <th scope="col">Action</th> --}}
				</tr>
			</thead>
			<tbody>
				@foreach ($tanggapans as $tanggapan)
					<tr onclick="location.href='/dashboard/pengaduan/{{ $tanggapan->pengaduan_id }}'" class="trc">
						<td>{{ $tanggapan->isi_tanggapan }}</td>
						<td>{{ $tanggapan->created_at->format('d/m/Y') }}</td>
						{{-- <td>
							<a href="/dashboard/pengaduan/{{ $tanggapan->pengaduan_id }}" class="badge bg-info">
								<span data-feather="eye">
							</a>
							<form action="/dashboard/tanggapan/{{ $tanggapan->idg }}" method="post" class="d-inline">
								@method('delete')
								@csrf
								<button class="badge bg-danger border-0" onclick="return confirm('Delete this ?')">									
									<span data-feather="x-circle"></span>
								</button>
							</form>
						</td> --}}
					</tr>						
				@endforeach
			</tbody>
			<caption class="p-0">					
				<div class="d-flex justify-content-end table-pagination">
					{{ $tanggapans->links() }}
				</div>
			</caption>
		</table>
	</div>	

@endsection