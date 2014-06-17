<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventPrintingtypeTable extends Migration {

	public function up()
	{
		Schema::create('event_printingtype', function(Blueprint $table) {
			$table->string('source');
			$table->integer('nb_copies');
			$table->string('nb_copies_surplus')->nullable()->default(0);
			$table->integer('printingtype_id')->unsigned();
			$table->integer('event_id')->unsigned();
                        $table->primary(array('event_id', 'printingtype_id'));
		});
	}

	public function down()
	{
		Schema::drop('event_printingtype');
	}
}