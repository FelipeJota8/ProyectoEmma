<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHumedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('humedads', function (Blueprint $table) {
            $table->id();
            $table->string('humedad');
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
        Schema::dropIfExists('humedads');
    }
}
