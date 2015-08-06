<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTJabatan extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_jabatan', function(Blueprint $table)
		{
			$table->increments('jabatan_id');
			$table->string('nama_jabatan',30);
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
		Schema::drop('t_jabatan');
	}

}
