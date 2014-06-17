<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArtistEventTable extends Migration {

	public function up()
	{
		Schema::create('artist_event', function(Blueprint $table) {
			$table->integer('artist_id')->unsigned();
			$table->integer('event_id')->unsigned();
			$table->integer('order');
			$table->boolean('is_support');
			$table->timestamp('artist_hour_arrival');
                        $table->primary(array('artist_id', 'event_id', 'order'));
		});
	}

	public function down()
	{
		Schema::drop('artist_event');
	}
}