<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDependsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depends', function (Blueprint $table) {
            $table->id();
            $table->enum('title',['Mr','Mrs','Miss']);
            $table->string('firstname');
            $table->string('lastname');
            $table->foreignId('familyhead_id');
            $table->string('nic')->nullable();
            $table->integer('age');
            $table->enum('gender',['Male','Female']);
            $table->softDeletes();
            
            $table->timestamps();

            $table->foreign('familyhead_id')->references('id')->on('people')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('depends');
    }
}
