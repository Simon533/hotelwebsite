<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoofchefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foofchefs', function (Blueprint $table) {
            $table->id();
            $table->string("cheffname")->nullable();
            $table->string("cheffspecks")->nullable();
            $table->string("cheffnumber")->nullable();
            $table->string("cheffdepartment")->nullable();
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
        Schema::dropIfExists('foofchefs');
    }
}
