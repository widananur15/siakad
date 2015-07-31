<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAbStandartKompetensi extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ab_standart_kompetensi', function(Blueprint $table)
		{
			$table->increments('sk_id');
            $table->bigInteger('mapel_id')->nullable();
            $table->string('description')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ab_standart_kompetensi');
	}

}
