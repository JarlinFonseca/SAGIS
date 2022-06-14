<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->unsignedTinyInteger('document_type_id');
            $table->string('document');
            $table->string('phone')->nullable();
            $table->string('address');
            $table->string('telephone')->nullable();
            $table->string('email')->unique();
            $table->unsignedMediumInteger('birthdate_place_id');
            $table->date('birthdate');
            $table->string('');

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
        Schema::dropIfExists('people');
    }
}
