<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kriterias', function (Blueprint $table) {
			$table->id();
			$table->string('kode');
			$table->string('name');
			$table->float('bobot');
			// type == true (1) => benefit
			// type == false (0) => cost
			$table->boolean('type')->default(true);
			$table->float('min')->nullable();
			$table->float('max')->nullable();
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
		Schema::dropIfExists('kriterias');
	}
};