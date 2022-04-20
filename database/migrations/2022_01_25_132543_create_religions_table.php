<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReligionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('religions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('village_id');
            $table->enum('religion',['Roman Catholic','Non Roman Catholic','Hindu','Islam','Buddhist']);
            $table->bigInteger('family');
            $table->bigInteger('male');
            $table->bigInteger('female');
            $table->timestamps();

            $table->unique(['village_id','religion']);
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
        Schema::dropIfExists('religions');
    }
}
