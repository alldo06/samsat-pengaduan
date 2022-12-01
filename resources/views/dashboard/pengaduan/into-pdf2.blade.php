<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/dashboard.css" rel="stylesheet">
    <link href="/css/global-css.css" rel="stylesheet">
    <title>Pengaduan</title>

    <style>
        table {
            width: 95%;
            border-collapse: collapse;
            margin: 50px auto;
        }

        /* Zebra striping */
        tr:nth-of-type(odd) {
            background: #eee;
        }

        th {
            background: #3498db;
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

    <div style="width: 95%; margin: 0 auto;">
        <div style="width: 12%; float:left; margin-right: 20px;">
            <img src="{{ public_path('/img/logo-humas-samsat-hgl.png') }}" width="100%"  alt="">
        </div>
        <div style="width: 50%; float: left;">
            <h1>Data Pengaduan</h1>
        </div>
    </div>

    <table style="position: relative; top: 50px;">
        <thead>
            <tr>
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
							{{-- <td>
								<a href="/dashboard/pengaduan/{{ $pengaduan->id }}" class="badge bg-info">
									<span data-feather="eye">
								</a>
								<form action="/dashboard/pengaduan/{{ $pengaduan->idg }}" method="post" class="d-inline">
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
    </table>

</body>

</html>