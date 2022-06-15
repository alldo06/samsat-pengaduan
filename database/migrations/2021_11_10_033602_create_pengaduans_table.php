<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduansTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pengaduans', function (Blueprint $table) {
			$table->id();
			$table->char('id_pengaduan')->unique();
			$table->string('nama');
			$table->string('alamat');
			$table->string('email')->unique()->nullable();
			$table->char('nomor_hp');
			$table->text('isi');
			$table->time('tanggal')->nullable();
			$table->string('image')->nullable();
			$table->string('status')->default('waiting');
			$table->boolean('sk_agreement')->default(0);
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
		Schema::dropIfExists('pengaduans');
	}
}
