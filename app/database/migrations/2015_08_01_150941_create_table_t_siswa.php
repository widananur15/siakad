<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTSiswa extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_siswa', function(Blueprint $table)
		{
			$table->bigIncrements('siswa_id');
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('nis')->nullable();
            $table->bigInteger('nisn')->nullable();
            $table->string('nama_siswa')->nullable();
            $table->bigInteger('jurusan_id')->nullable();
            $table->string('tmp_lahir')->nullable();
            $table->bigInteger('tgl_lhr')->nullable();
            $table->string('email')->nullable();
            $table->string('almt_asal')->nullable();
            $table->string('almt_skrng')->nullable();
            $table->string('agama')->nullable();
            $table->string('jns_klmn')->nullable();
            $table->string('active',2)->nullable();;
            $table->bigInteger('version')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_siswa');
	}

}
