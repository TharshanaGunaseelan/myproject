<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
           $table->enum('paymenttype',['P','EP','DP','TB','CAN','K','SC']);
           $table->foreignId('familyhead_id')->nullable();
           $table->foreignId('depend_id')->nullable();
           $table->enum('status',['active','inactive']);
           $table->date('deathdate')->nullable();

           $table->timestamps();

           $table->foreign('familyhead_id')->references('id')->on('people')->onDelete('cascade');
           $table->foreign('depend_id')->references('id')->on('people')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
