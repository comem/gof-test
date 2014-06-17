<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventMemberTable extends Migration {

	public function up()
	{
		Schema::create('event_member', function(Blueprint $table) {
			$table->integer('event_id')->unsigned();
			$table->integer('member_id')->unsigned();
			$table->integer('function_id')->unsigned();
                        $table->primary(array('event_id', 'member_id'));
		});
	}

	public function down()
	{
		Schema::drop('event_member');
	}
}