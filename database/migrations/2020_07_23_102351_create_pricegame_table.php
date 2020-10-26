<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricegameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricegame', function (Blueprint $table) {
            $table->id();
            $table->string('price');

            $table->timestamps();
        });

        DB::table('pricegame')->insert(
            array(
                'price' => '200'
            )
        );
        DB::table('pricegame')->insert(
            array(
                'price' => '40'
            )
        );
        DB::table('pricegame')->insert(
            array(
                'price' => '25'
            )
        );
        DB::table('pricegame')->insert(
            array(
                'price' => '100'
            )
        );
        DB::table('pricegame')->insert(
            array(
                'price' => '60'
            )
        );
        DB::table('pricegame')->insert(
            array(
                'price' => '60'
            )
        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pricegame');
    }
}
