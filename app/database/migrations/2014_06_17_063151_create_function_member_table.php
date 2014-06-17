<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFunctionMemberTable extends Migration {

	public function up()
	{
		Schema::create('function_member', function(Blueprint $table) {
			$table->integer('member_id')->unsigned();
			$table->integer('function_id')->unsigned();
                        $table->primary(array('member_id', 'function_id'));
		});
	}

	public function down()
	{
		Schema::drop('function_member');
	}
}