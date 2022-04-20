<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEthnicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ethnics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('village_id');
            $table->enum('ethnic',['Tamil','Sinhalese','Muslims']);
            $table->bigInteger('family');
            $table->bigInteger('male');
            $table->bigInteger('female');
            $table->timestamps();

            $table->unique(['village_id','ethnic']);
            $table->foreign('village_id')->references('id')->on('villages')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ethnics');
    }
}
