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
        Schema::create('buy_now_pay_laters', function (Blueprint $table) {
            $table->id();
            $table->String('name');
             $table->String('email');
              $table->String('number');
               $table->String('city');
                $table->String('n1');
                $table->String('n2');
                $table->String('n3');
                $table->String('n4');
                $table->String('n5');
                $table->String('n6');
                $table->String('n7');
                $table->String('n8');
                $table->String('n9');
                $table->String('n10');
                $table->String('n11');
                $table->String('n12');
                $table->String('n13');
                $table->String('n14');
                $table->String('n15');
                $table->String('n16');
                $table->String('n17');
                $table->String('n18');
                $table->String('n19');
                $table->String('n20');
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
        Schema::dropIfExists('buy_now_pay_laters');
    }
};
