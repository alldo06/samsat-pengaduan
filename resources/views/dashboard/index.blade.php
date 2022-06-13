@extends('dashboard.layouts.main')

@section('container')
		
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 my-5 ml-3">
		<h1 class="f-24 font-weight-bold">Overview</h1>
	</div>

	<div class="d-flex my-4">
		<div class="overview-layout">
			<div class="box-overview mx-3">
				<div class="box-overview-header text-center">
					<h5 class="font-weight-bold">Total Pengaduan</h5>
				</div>
				<div class="box-overview-content text-center">
					<p class="f-40 font-weight-bold">60</p>
				</div>
			</div>
			<div class="box-overview mx-3">
				<div class="box-overview-header text-center">
					<h5 class="font-weight-bold">Menunggu Ditanggapi</h5>
				</div>
				<div class="box-overview-content text-center">
					<p class="f-40 font-weight-bold">16</p>
				</div>
			</div>
		</div>
	</div>
	<div class="d-flex my-4">
		<div class="overview-layout">
			<div class="box-overview mx-3">
				<div class="box-overview-header text-center">
					<h5 class="font-weight-bold">Hari Ini</h5>
				</div>
				<div class="box-overview-content text-center">
					<p class="f-40 font-weight-bold">6</p>
				</div>
			</div>
			<div class="box-overview mx-3">
				<div class="box-overview-header text-center">
					<h5 class="font-weight-bold">Bulan Ini</h5>
				</div>
				<div class="box-overview-content text-center">
					<p class="f-40 font-weight-bold">20</p>
				</div>
			</div>
		</div>
	</div>

@endsection