<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('become_sellers', function (Blueprint $table) {
            $table->id();
             $table->String('Manufacturer');
            $table->String('Authorised');
            $table->String('Distributor');
            $table->String('Dealer');
            $table->json('category')->nullable();
            $table->String('Mobile');
            $table->String('Company');
            $table->String('Contact');
            $table->String('Email');
            $table->String('Additional');
            $table->timestamps();
            // $table->save();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('become_sellers');
    }
};
