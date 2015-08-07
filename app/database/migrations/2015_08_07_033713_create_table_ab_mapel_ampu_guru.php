<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAbMapelAmpuGuru extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ab_mapel_ampu_guru', function(Blueprint $table)
		{
			$table->bigIncrements('ab_ampu_id');
			$table->bigInteger('guru_id');
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
		Schema::drop('ab_mapel_ampu_guru');
	}

}
