<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peran', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('film_id')
                  ->foreign('film_id')
                  ->references('id')
                  ->on('film')
                  ->onDelete('cascade');
            $table->integer('cast_id')
                  ->foreign('cast_id')
                  ->references('id')
                  ->on('cast')
                  ->onDelete('cascade');
            $table->string('nama', 45);
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
        Schema::dropIfExists('peran');
    }
}
