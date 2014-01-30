<?php

use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Update the users table
		Schema::table('users', function($table)
		{
			$table->softDeletes();
			$table->string('avatar')->default('../assets/img/no-avatar.jpg');
			$table->string('birthday')->default('01-01-2014');
			$table->string('country')->nullable();
			$table->string('facebook')->default('100006660883971');
			$table->string('gravatar')->nullable();
			$table->string('uni')->default('26894034');
			$table->text('status')->default('Welcome To TheGhost');
			$table->string('website')->nullable();
			$table->string('skill_race')->default('lv1');
			$table->string('skill_dance')->default('lv1');
			$table->string('youtube')->default('lGMG8OnPlDE');
			$table->bigInteger('p_conghien')->nullable();
			$table->bigInteger('p_phonvinh')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Delete the `users` table
		Schema::drop('users');
	}

}
