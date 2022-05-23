<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->enum('title',['Mr','Mrs','Miss']);
            $table->string('firstname');
            $table->string('lastname');
            $table->string('address');
            $table->bigInteger('age');
            $table->enum('gender',['Male','Female']);
            $table->enum('religion',['Roman Catholic','Non Roman Catholic','Hindu','Islam','Buddhist']);
            $table->enum('ethnic',['Tamil','Sinhalese','Muslims']);
            $table->string('nic')->unique();
            $table->foreignId('village_id');

            $table->timestamps();

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
        Schema::dropIfExists('people');
    }
}
