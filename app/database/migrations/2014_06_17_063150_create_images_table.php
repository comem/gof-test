<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImagesTable extends Migration {

	public function up()
	{
		Schema::create('images', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('description_de')->nullable();
			$table->string('source');
			$table->timestamps();
			$table->integer('artist_id')->unsigned();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('images');
	}
}