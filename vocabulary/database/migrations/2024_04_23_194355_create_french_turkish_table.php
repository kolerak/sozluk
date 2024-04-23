<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrenchTurkishTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('french_turkish', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('french_id');
            $table->unsignedBigInteger('turkish_id');
            $table->timestamps();
    
            $table->foreign('french_id')->references('id')->on('french')->onDelete('cascade');
            $table->foreign('turkish_id')->references('id')->on('turkish')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('french_turkish');
    }
}
