<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventGiftTable extends Migration {

	public function up()
	{
		Schema::create('event_gift', function(Blueprint $table) {
			$table->integer('event_id')->unsigned();
			$table->integer('gift_id')->unsigned();
			$table->integer('quantity');
			$table->integer('cost')->nullable()->default(0);
			$table->text('comment_de')->nullable();
                        $table->primary(array('event_id', 'gift_id'));
		});
	}

	public function down()
	{
		Schema::drop('event_gift');
	}
}