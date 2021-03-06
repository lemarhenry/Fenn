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
            $table->string('basic')->nullable()->default("basic");
            $table->integer('bprice')->nullable()->default(0);
            $table->string('bduration')->nullable();
            $table->integer('bscreens')->nullable();
            $table->string('bpviewers')->nullable();

            $table->string('premium')->nullable()->default("premium");
            $table->integer('pprice')->nullable()->default(0);
            $table->string('pduration')->nullable();
            $table->integer('pscreens')->nullable();
            $table->string('ppviewers')->nullable();

            $table->string('elite')->nullable()->default("elite");
            $table->integer('eprice')->nullable()->default(0);
            $table->string('eduration')->nullable();
            $table->integer('escreens')->nullable();
            $table->string('epviewers')->nullable();
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
