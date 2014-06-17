<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEquipmentEventTable extends Migration {

	public function up()
	{
		Schema::create('equipment_event', function(Blueprint $table) {
			$table->integer('event_id')->unsigned();
			$table->integer('equipment_id')->unsigned();
			$table->integer('cost')->nullable()->default(0);
			$table->integer('quantity')->nullable()->default(1);
                        $table->primary(array('event_id', 'equipment_id'));
		});
	}

	public function down()
	{
		Schema::drop('equipment_event');
	}
}