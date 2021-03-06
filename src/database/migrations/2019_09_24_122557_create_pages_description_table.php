<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagesDescriptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pages_description', function(Blueprint $table)
		{
			$table->integer('page_description_id', true);
			$table->string('name', 100);
			$table->text('description', 65535);
			$table->integer('language_id');
			$table->integer('page_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pages_description');
	}

}
