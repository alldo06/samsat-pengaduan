@extends('dashboard.layouts.main')

@section('container')
		
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 my-5 ml-3">
		<h1 class="f-24 font-weight-bold title-detail">Pengaduan</h1>
	</div>   

	@if (session()->has('deleted'))
	<div id="alert-messages" class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>{{ session('deleted') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	@endif

	@if (session()->has('failed'))
	<div id="alert-messages" class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>{{ session('failed') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	@endif
	
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
							<a class="badge bg-danger border-0 delete text-light p-2" data-toggle="modal" data-target="#modal-delete" data-id="{{ $pengaduan->id_pengaduan }}"><i style="font-size: 15px" class="fa fa-trash" aria-hidden="true"></i></a>
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

	{{-- Modal Delete --}}
	<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
		aria-hidden="true">
			<div class="modal-dialog" role="document">
					<div class="modal-content">
							<div class="modal-header">
									<h5 class="modal-title">Delete Data Pengaduan</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
									</button>
							</div>
							<div class="modal-body">
								<form action="/dashboard/pengaduan" method="post">
										@csrf
										{{-- @method('delete') --}}
										<input type="hidden" id="idp" name="idp">
										<h5>Are you sure you want to delete this data?</h5>
								</div>
								<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
											<button type="submit" class="btn btn-danger">Yes, Delete</button>
								</div>
								</form>
						</div>
					</div>
			</div>
		</div>
	
	<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
	<script>
		 $(document).on('click','.delete',function(){
         let id = $(this).attr('data-id');
         $('#idp').val(id);
				 let idp = id
				 console.log(idp);
    });
		$(document).ready(function() {
			$("#alert-messages").hide();
				$("#alert-messages").fadeTo(2000, 500).slideUp(500, function() {
					$("#alert-messages").slideUp(500);
				});
		});
	</script>

@endsection