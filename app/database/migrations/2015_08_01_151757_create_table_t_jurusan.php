<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTJurusan extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_jurusan', function(Blueprint $table)
		{
			$table->bigIncrements('jurusan_id');
            $table->string('nama_jurusan');
            $table->string('sub_jurusan');
            $table->string('active',2);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_jurusan');
	}

}
