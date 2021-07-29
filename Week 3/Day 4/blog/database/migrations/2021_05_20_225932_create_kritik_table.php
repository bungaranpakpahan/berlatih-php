<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKritikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kritik', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')
                  ->foreign('user_id')
                  ->references('id')
                  ->on('user')
                  ->onDelete('cascade');
            $table->integer('film_id')
                  ->foreign('film_id')
                  ->references('id')
                  ->on('film')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('kritik');
    }
}
