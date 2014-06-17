<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventFunctionTable extends Migration {

	public function up()
	{
		Schema::create('event_function', function(Blueprint $table) {
			$table->integer('event_id')->unsigned();
			$table->integer('function_id')->unsigned();
			$table->integer('nb_people');
                        $table->primary(array('event_id', 'function_id'));
		});
	}

	public function down()
	{
		Schema::drop('event_function');
	}
}