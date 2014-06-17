<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventTicketcategorieTable extends Migration {

	public function up()
	{
		Schema::create('event_ticketcategorie', function(Blueprint $table) {
			$table->integer('ticketcategorie_id')->unsigned();
			$table->integer('event_id')->unsigned();
			$table->integer('amount');
			$table->integer('quantity_sold')->nullable();
			$table->text('comment_de')->nullable();
                        $table->primary(array('ticketcategorie_id', 'event_id'));
		});
	}

	public function down()
	{
		Schema::drop('event_ticketcategorie');
	}
}