@extends('layouts.main')

@section('container')	
{{-- <div class="w100 body"></div> --}}
		<section class="form-signin">
			
				<div class="content-login">
					<img src="/img/logo-humas-samsat-hgl.png" alt="Logo Samsat" class="logo-160">

					<div class="mb-3 text-center text-gray">
						<h5 class="font-weight-bold ls-04">Samsat Pengaduan Masyarakat</h5>
					</div>
					
					<h4 class="signin-text mb-3 text-center font-weight-bold">
						Log In
					</h4>

					
					<div class="content-login-body">
						@if (session()->has('success'))
						<div class="alert green-color alert-dismissible fade show font-weight-bold" role="alert">
							{{ session('success') }}
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
						@endif
		
						@if (session()->has('loginError'))
							<div class="alert red-color fade show text-center" role="alert">
								<span class="feather-16 mr-3 my-auto feather-stroke-red" data-feather="alert-circle"></span>
								<span class="red-color font-weight-bold text-center">
									{{ session('loginError') }}
								</span>
								{{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
							</div>
						@endif

						<form action="/login" method="post">
							@csrf
							<div class="form-group my-4">
								<label class="f-12 fh-16 font-weight-bold" for="nama_pengguna">USERNAME</label>
								<input type="nama_pengguna" name="nama_pengguna" class="f-14 form-control form-login-register @error('nama_pengguna') is-invalid @enderror" id="nama_pengguna" placeholder="Username" autofocus required value="{{ old('nama_pengguna') }}">
								@error('nama_pengguna')
									<div class="invalid-feedback">
										{{ $message }}
									</div>
								@enderror
							</div>
							<div class="form-group my-4">
								<label class="f-12 fh-16 font-weight-bold" for="password">PASSWORD</label>
								<input type="password" name="password" class="f-14 form-control form-login-register" id="password" placeholder="Password" required>
							</div>
							<button type="submit" class="btn button-red col-md-12 mt-4 mb-3 button-login f-16 fw-600">Log In</button>
						</form>
					</div>
				</div>

			{{-- <form action="/login" method="post">
				@csrf
				<img class="mb-4" src="" alt="" width="72" height="57">
				<h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
		
				<div class="form-floating">
					<input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
					<label for="email">Email address</label>
					@error('email')
						<div class="invalid-feedback">
							{{ $message }}
						</div>
					@enderror
				</div>
				<div class="form-floating">
					<input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
					<label for="password">Password</label>
				</div>
		
				<button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
			</form> --}}
			{{-- <small class="d-block text-center mt-3">Not registered ? <a href="/register">Register now</a></small> --}}

		</section>
@endsection