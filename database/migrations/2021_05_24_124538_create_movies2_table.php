<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovies2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies2', function (Blueprint $table) {
            $table -> id();
            
            $table -> string('title');
            $table -> string('original_title');
            $table -> string('nationality');
            $table -> date('date');
            $table -> integer('vote');

            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies2');
    }
}
