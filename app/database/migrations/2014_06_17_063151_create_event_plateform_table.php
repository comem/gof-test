<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventPlateformTable extends Migration {

	public function up()
	{
		Schema::create('event_plateform', function(Blueprint $table) {
			$table->integer('plateform_id')->unsigned();
			$table->integer('event_id')->unsigned();
			$table->string('external_id');
			$table->text('external_infos')->nullable();
			$table->string('url');
			$table->timestamps();
			$table->softDeletes();
                        $table->primary(array('plateform_id', 'event_id'));
		});
	}

	public function down()
	{
		Schema::drop('event_plateform');
	}
}