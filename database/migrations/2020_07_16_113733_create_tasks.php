<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->longText('description');
            $table->dateTimeTz('deadline');
            $table->dateTimeTz('created_at');
            $table->unsignedInteger('actors_id');
            $table->unsignedInteger('groups_id');
            $table->unsignedInteger('adopted_by_id');
            $table->tinyInteger('status');
            $table->unsignedInteger('loop');
            $table->rememberToken();
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
        Schema::dropIfExists('tasks');
    }
}
