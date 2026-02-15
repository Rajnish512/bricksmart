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
        Schema::create('billings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
          $table->integer('user_id')->unsigned();
           
            $table->string('fname',60);
            $table->string('lname',60);
            $table->string('companydetails');
             $table->text('address');
              $table->text('appartment');
             $table->string('city');
              $table->string('state');
                $table->string('zip');
                  
            
            $table->string('email');
            $table->string('phone');
             $table->text('shipping');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billings');
    }
};
