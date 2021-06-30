<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHumedadRiegosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('humedad_riegos', function (Blueprint $table) {
            $table->id();
            $table->string('humedad_riego');
            $table->integer('raspberry_id')->unsigned();
            $table->foreignId('raspberry_pi')->nullable()->constrained('raspberry_pi')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('humedad_riegos');
    }
}
