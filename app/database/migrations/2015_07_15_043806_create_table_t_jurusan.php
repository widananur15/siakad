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
			$table->increments('jurusan_id');
		    $table->string('nama_jurusan',40)->nullable();
            $table->string('active',2)->nullable();

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
