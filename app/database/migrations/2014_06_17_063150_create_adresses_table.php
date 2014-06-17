<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdressesTable extends Migration {

	public function up()
	{
		Schema::create('adresses', function(Blueprint $table) {
			$table->increments('id');
			$table->string('street2');
			$table->string('npa2');
			$table->string('city2');
			$table->string('country2')->nullable();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('adresses');
	}
}