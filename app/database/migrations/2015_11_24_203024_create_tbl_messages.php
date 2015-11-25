<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblMessages extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_messages',function(Blueprint $table){

			$table->increments('m_id');
			$table->integer('m_user_id');
			$table->text('m_text');
			$table->datetime('m_last_sync');
			$table->string('m_sync_status');
			$table->timestamps();

		});
    }

    public function down()
    {
        Schema::drop('tbl_messages');
    }


}
