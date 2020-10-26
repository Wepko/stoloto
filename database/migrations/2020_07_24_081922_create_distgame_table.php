<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistgameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distgame', function (Blueprint $table) {
            $table->id();
            $table->string('numberGame');
            $table->boolean('distGame');
            $table->boolean('stopGame')->default(true);

            $table->timestamps();
        });

        DB::table('distgame')->insert(
            array(
                'numberGame' => 1,
                'distGame' => 0
            )
        );
        DB::table('distgame')->insert(
            array(
                'numberGame' => 2,
                'distGame' => 0
            )
        );
        DB::table('distgame')->insert(
            array(
                'numberGame' => 3,
                'distGame' => 0
            )
        );
        DB::table('distgame')->insert(
            array(
                'numberGame' => 4,
                'distGame' => 0
            )
        );
        DB::table('distgame')->insert(
            array(
                'numberGame' => 5,
                'distGame' => 0
            )
        );
        DB::table('distgame')->insert(
            array(
                'numberGame' => 6,
                'distGame' => 0
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
        Schema::dropIfExists('distgame');
    }
}
