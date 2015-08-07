<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTGuru extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_guru', function(Blueprint $table)
		{
			$table->bigIncrements('guru_id');
			$table->bigInteger('user_id');
            $table->string('nip',15);
            $table->string('nama_guru',45);
            $table->string('no_telp',15);
            $table->string('email',40);
            $table->bigInteger('jabatan_id_default');
            $table->string('active',2);
            $table->string('version',15);
            $table->bigInteger('mapel_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_guru');
	}

}
