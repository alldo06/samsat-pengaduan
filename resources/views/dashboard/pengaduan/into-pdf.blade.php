<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="/css/dashboard.css" rel="stylesheet">
    <link href="/css/global-css.css" rel="stylesheet">

		
    <style>
			th {
					background: #bf0707;
					color: white;
					font-weight: bold;
			}

			td,
			th {
					padding: 10px;
					border: 1px solid #ccc;
					text-align: left;
					font-size: 18px;
			}


	</style>
  </head>
  <body>

		<div class="">
				<img src="{{ public_path('/img/logo-humas-samsat-hgl.png') }}" style="display: block; margin-left: auto; margin-right: auto;" width="159px" alt="logo">
				<p style="font-size: 32px; font-weight: bold; text-align: center;">Data Pengaduan</p>
		</div>

		<div class="table-responsive table-wrapper">
			<table class="table table-data table-striped table-bordered">
				<thead>
					<tr>
						{{-- <th scope="col">#</th> --}}
						<th scope="col">Nama</th>
						<th scope="col">Isi Pengaduan</th>
						<th scope="col">Tanggal</th>
						<th scope="col">Alamat</th>
						<th scope="col">Email</th>
						<th scope="col">No. Telp.</th>
						<th class="text-center" scope="col">Status</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($pengaduans as $pengaduan)
						<tr onclick="location.href='/dashboard/pengaduan/{{ $pengaduan->id_pengaduan }}'" class="trc">
							<td>{{ $pengaduan->nama }}</td>
							<td>
								<span class="substring">
									{!! $pengaduan->isi !!}
								</span>
							</td>
							<td>{{ $pengaduan->created_at->format('d/m/Y') }}</td>
							<td>{{ $pengaduan->alamat }}</td>
							<td>{{ $pengaduan->email }}</td>
							<td>{{ $pengaduan->nomor_hp }}</td>
							<td class="text-center">
								<span @class([
									'text-uppercase',
									'status-data-waiting' => $pengaduan->status == 'waiting',
									'status-data-done' => $pengaduan->status == 'done',
								])>
									{{ $pengaduan->status }}
								</span>
							</td>
						</tr>						
					@endforeach
				</tbody>
			</table>
		</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>