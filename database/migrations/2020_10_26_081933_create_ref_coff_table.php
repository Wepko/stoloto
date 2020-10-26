<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefCoffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_coff', function (Blueprint $table) {
            $table->id();
            $table->integer('coff');
            $table->timestamps();
        });

        DB::table('ref_coff')->insert(
            array(
                'coff' => '15'
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
        Schema::dropIfExists('ref_coff');
    }
}
