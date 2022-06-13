@extends('layouts.main')

@section('container')	
<div class="row justify-content-center">
	<div class="">				
		<main class="form-registeration">

			<div class="container">
				<div class="row content-register justify-content-center col-md-7">
					<div class="col-md-7">
						<h3 class="signin-text mb-3">
							Registeration
						</h3>
						<form action="/register" method="post">
							@csrf
							<div class="form-group my-4">
								<label for="name">Name</label>
								<input type="text" name="nama" class="form-control form-login-register @error('nama') is-invalid @enderror" id="nama" required value="{{ old('nama') }}">
								@error('nama')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
							<div class="form-group my-4">
								<label for="nama_pengguna">nama_pengguna</label>
								<input type="text" name="nama_pengguna" class="form-control form-login-register @error('nama_pengguna') is-invalid @enderror" id="nama_pengguna" required value="{{ old('nama_pengguna') }}">
								@error('nama_pengguna')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
							<div class="form-group my-4">
								<label for="tanggal_lahir">tanggal_lahir</label>
								<input type="date" name="tanggal_lahir" class="form-control form-login-register @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" required value="{{ old('tanggal_lahir') }}">
								@error('tanggal_lahir')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
							<div class="form-group my-4">
								<label for="nomor_hp">Phone Number</label>
								<input type="number" name="nomor_hp" class="form-control form-login-register @error('nomor_hp') is-invalid @enderror" id="nomor_hp" required value="{{ old('nomor_hp') }}">
								@error('nomor_hp')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
							<div class="form-group my-4">
								<label for="email">Email</label>
								<input type="email" name="email" class="form-control form-login-register @error('email') is-invalid @enderror" id="email" required value="{{ old('email') }}">
								@error('email')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
							<div class="form-group my-4">
								<label for="password">Password</label>
								<input type="password" name="password" class="form-control form-login-register @error('password') is-invalid @enderror" id="password" required>
								@error('password')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
							<button type="submit" class="btn btn-class">Register</button>
						</form>
					</div>
				</div>
			</div>
			{{-- <form action="/register" method="post">
				@csrf
				<img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
				<h1 class="h3 mb-3 fw-normal text-center">Registeration Form</h1>
		
				<div class="form-floating">
					<input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" required value="{{ old('name') }}">
					<label for="name">Name</label>
					@error('name')
					<div class="invalid-feedback">
						{{ $message }}
					</div>							
					@enderror
				</div>
				<div class="form-floating">
					<input type="date" name="birthdate" class="form-control rounded-top @error('birthdate') is-invalid @enderror" id="birthdate" required value="{{ old('birthdate') }}">
					<label for="birthdate">Birthdate</label>
					@error('birthdate')
					<div class="invalid-feedback">
						{{ $message }}
					</div>							
					@enderror
				</div>
				<div class="form-floating">
					<input type="text" name="username" class="form-control rounded-top @error('username') is-invalid @enderror" id="username" required value="{{ old('username') }}">
					<label for="username">Username</label>
					@error('username')
					<div class="invalid-feedback">
						{{ $message }}
					</div>							
					@enderror
				</div>
				<div class="form-floating">
					<input type="number" name="phone_number" class="form-control rounded-top @error('phone_number') is-invalid @enderror" id="phone_number" required value="{{ old('phone_number') }}">
					<label for="phone_number">Phone Number</label>
					@error('phone_number')
					<div class="invalid-feedback">
						{{ $message }}
					</div>							
					@enderror
				</div>
				<div class="form-floating">
					<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
					<label for="email">Email address</label>
					@error('email')
					<div class="invalid-feedback">
						{{ $message }}
					</div>							
					@enderror
				</div>
				<div class="form-floating">
					<input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
					<label for="password">Password</label>
					@error('password')
					<div class="invalid-feedback">
						{{ $message }}
					</div>							
					@enderror
				</div>
		
				<button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
			</form> --}}
			{{-- <small class="d-block text-center mt-3">Already registered ? <a href="/login">Login</a></small> --}}
		</main>
	</div>
</div>
@endsection