<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->unsignedMediumInteger('country_id')->nullable();
            $table->string('name', 80);
            $table->string('slug');

            $table->timestamps();

            $table->foreign('country_id')->references('id')->on('countries')->cascadeOnUpdate()->nullOnDelete();
            $table->unique(['country_id', 'name'], 'unique_countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('states');
    }
}
