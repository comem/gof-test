    <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFunctionsTable extends Migration {

	public function up()
	{
		Schema::create('functions', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name_de')->unique();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('functions');
	}
}