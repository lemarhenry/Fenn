<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('basic')->nullable()->default("Basic");
            $table->integer('bprice')->nullable()->default(0);
            $table->string('premium')->nullable()->default("Premium");
            $table->integer('pprice')->nullable()->default(0);
            $table->string('elite')->nullable()->default("Elite");
            $table->integer('eprice')->nullable()->default(0);
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
        Schema::dropIfExists('dans');
    }
}
