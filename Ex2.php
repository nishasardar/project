<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	
	public function down()
	{
		Schema::drop('Users');
	}

}
