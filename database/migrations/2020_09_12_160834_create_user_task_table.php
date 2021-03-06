<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_task', function (Blueprint $table) {
            $table->bigInteger('task_model_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->tinyInteger('day_off')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->bigInteger('user_complete')->default(0);

            $table->foreign('task_model_id')
                    ->references('id')
                    ->on('tasks')
                    ->onDelete('cascade');

            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_task');
    }
}
