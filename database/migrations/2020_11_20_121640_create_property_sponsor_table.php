<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertySponsorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_sponsor', function (Blueprint $table) {
          $table->foreignId('property_id')->constrained()->on('properties')->onDelete('cascade');
          $table->foreignId('sponsor_id')->constrained()->on('sponsors')->onDelete('cascade');
          $table->dateTime("end_sponsor");
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
        Schema::dropIfExists('property_sponsor');
    }
}
