<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShippingDescriptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shipping_description', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 100);
			$table->integer('language_id');
			$table->string('table_name', 100);
			$table->text('sub_labels', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('shipping_description');
	}

}
