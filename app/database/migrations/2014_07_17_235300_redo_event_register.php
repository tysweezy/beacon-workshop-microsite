<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RedoEventRegister extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	   Schema::create('EventRegister', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('company');
			$table->integer('phone');
			$table->string('address');
			$table->boolean('decipher_client');
			$table->text('diet_requests');
			$table->boolean('agree_terms');
			//$table->integer('user_id')->unsigned();
			$table->string('notes');
			$table->string("city");
			$table->date('event_date');
			$table->string('title');
			$table->timestamps();

		}); 


	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('EventRegister');
	}

}
