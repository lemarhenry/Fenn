<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDigifiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('digifies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('basic')->nullable();
            $table->integer('bprice')->nullable();
            $table->string('premium')->nullable();
            $table->integer('pprice')->nullable();
            $table->string('elite')->nullable();
            $table->integer('eprice')->nullable();
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
        Schema::dropIfExists('digifies');
    }
}
