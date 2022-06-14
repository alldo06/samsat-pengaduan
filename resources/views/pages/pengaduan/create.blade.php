@extends('layouts.main')

@section('container')

<div class="site-aduan">
	<div class="container">
		<div class="aduan">
			<div class="aduan-header">
				<h2 class="title text-center">Saran dan Pengaduan</h2>
			</div>
			<hr>
			{{-- <p>{{ $currentDate->format('d/m/Y') }}</p> --}}
			<form method="POST" action="/pengaduan" class="col-lg-12" enctype="multipart/form-data">
				@csrf
				<div class="mb-3">
					<label for="nama" class="form-label">Nama</label>
					<input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required value="{{ old('nama') }}">
					@error('nama')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
					@enderror
				</div>
				<div class="mb-3">
					<label for="alamat" class="form-label">Alamat</label>
					<input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}">
					@error('alamat')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
					@enderror
				</div>
				<div class="mb-3">
					<label for="email" class="form-label">Email (opsional)</label>
					<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
					@error('email')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
					@enderror
				</div>
				<div class="mb-3">
					<label for="nomor_hp" class="form-label">Nomor HP</label>
					<input type="text" class="form-control @error('nomor_hp') is-invalid @enderror" id="nomor_hp" name="nomor_hp" required value="{{ old('nomor_hp') }}">
					@error('nomor_hp')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
					@enderror
				</div>
				{{-- <div class="mb-3">
					<label for="tanggal" class="form-label">Tanggal</label>
					<input type="hidden" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" required value="{{ old('tanggal', $currentDate->format('d/m/Y')) }}">
					@error('tanggal')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
					@enderror
				</div> --}}
				<div class="mb-3">
					<label for="isi" class="form-label">Keluhan, Saran, Pertanyaan</label>
					<textarea class="form-control @error('isi') is-invalid @enderror" id="isi" name="isi" rows="5" value="{{ old('isi') }}"></textarea>
				</div>
				{{-- <div class="mb-3">
					<label for="image" class="form-label">Default file input example</label>
					<input class="form-control" type="file" id="image" name="image">
				</div>				 --}}
				<div class="mb-3">
					<label for="image" class="form-label ">Gambar</label>
					<img class="img-preview img-fluid mb-2 col-sm-5">
					<input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" accept="image/*" onchange="previewImage()">
					@error('image')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
					@enderror
				</div>
				<div class="form-group form-check">
					<input type="checkbox" name="sk_agreement" class="form-check-input @error('sk_agreement') is-invalid @enderror" id="sk_agreement" value="1" required>
					<label class="form-check-label" for="sk_agreement">Saya setuju dengan 
						<!-- Button trigger modal -->
						<button type="button" class="skpp" data-toggle="modal" data-target="#SKModal">
							Syarat dan Ketentuan
						</button>
					</label>
					@error('sk_agreement')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
					@enderror
				</div>
				<button type="submit" class="btn button-red mb-2 mt-3">Kirim</button>
			</form>
			</div>
		</div>
	</div>
</div>

<!-- Modal S&K -->
<div class="modal fade" id="SKModal" tabindex="-1" role="dialog" aria-labelledby="SKModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="SKModalLabel">Syarat dan Ketentuan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Jika Anda menyeteujui Syarat dan Ketentuan ini berarti Anda menyetujui sudah dijadikan bukti sebagai dasar Kami
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
      </div>
    </div>
  </div>
</div>

<script>
		function previewImage() {
			const image = document.querySelector('#image');
			const imgPreview = document.querySelector('.img-preview');

			imgPreview.style.display = 'block';

			const blob = URL.createObjectURL(image.files[0]);
			imgPreview.src = blob;

		}
</script>

@endsection

