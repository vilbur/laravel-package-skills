<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('skill_details', function(Blueprint $table) {
			$table->increments('id');

			$table->integer('skill_id')->nullable()->unsigned()->index();
			$table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade');

			$table->string('title')->nullable();
			$table->string('summary')->nullable();
			$table->text('description')->nullable();
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
        Schema::drop('skill_details');
    }
}
