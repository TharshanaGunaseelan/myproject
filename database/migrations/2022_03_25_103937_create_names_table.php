<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('names', function (Blueprint $table) {
            $table->id();
            $table->enum('title',['Mr','Mrs','Miss']);
            $table->string('firstname');
            $table->string('lastname');
            $table->string('nic')->nullable();
            $table->integer('age');
            $table->string('address');
            $table->enum('gender',['Male','Female']);

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
        Schema::dropIfExists('names');
    }
}
