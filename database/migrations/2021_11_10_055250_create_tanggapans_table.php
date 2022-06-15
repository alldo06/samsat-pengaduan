<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanggapansTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tanggapans', function (Blueprint $table) {
			$table->id();
			$table->foreignId('pengaduan_id');
			$table->char('id_pengaduan');
			$table->timestamp('tanggal')->nullable();
			$table->string('isi_tanggapan');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('tanggapans');
	}
}
