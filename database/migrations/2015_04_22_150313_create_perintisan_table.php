<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerintisanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('perintisan', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('namaperintisan');
			$table->string('alamat');
			$table->string('departemen');
			$table->string('daerah');
			$table->date('mulaiberdiri')->nullable();
			$table->string('namaperintis');
			$table->string('tempatlahir');
			$table->date('tanggallahir')->nullable();
			$table->string('telepon');
			$table->string('gerejamentor');
			$table->string('jenisperintisan');
			$table->integer('jemaatsm');
			$table->integer('jemaatdewasa');
			$table->integer('jemaatrkm');
			$table->integer('jemaatkka');
			$table->string('bpd');
			$table->string('keterangan');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('perintisan');
	}

}
