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
        Schema::create('requirements', function (Blueprint $table) {
            $table->id();
            $table->json('product')->nullable();
            $table->json('quantity')->nullable();
            $table->json('category')->nullable();
              $table->String('select');
            $table->String('phone');
            $table->String('location');
            $table->String('name');
            
            $table->String('email');
          
            $table->text('Additional');
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
        Schema::dropIfExists('requirements');
    }
};
