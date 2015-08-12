<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableTUserAddFieldRoleDefaultAksess extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('t_user', function(Blueprint $table)
		{
			$table->bigInteger('role_default_aksess')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('t_user', function(Blueprint $table)
		{
			//
		});
	}

}
