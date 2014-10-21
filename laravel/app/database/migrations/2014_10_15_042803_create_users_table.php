<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username')->unique();
			$table->string('password');
			$table->string('email');
			$table->text('name');
			$table->string('last_ip',40)->default(0);
			$table->integer('last_activity')->default(0);
			$table->integer('last_login')->default(0);
			$table->integer('last_logout')->default(0);
			$table->timestamps();
			$table->enum('active',array('true','false'))->default('false');
		});

		Schema::table('users', function(Blueprint $table)
		{
			//
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
			//
		});
	}

}
