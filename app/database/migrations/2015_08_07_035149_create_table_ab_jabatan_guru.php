<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAbJabatanGuru extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ab_jabatan_guru', function(Blueprint $table)
		{
			$table->bigIncrements('ab_jabatan_id');
			$table->bigInteger('guru_id');
            $table->bigInteger('jabatan_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ab_jabatan_guru');
	}

}
