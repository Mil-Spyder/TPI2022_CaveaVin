<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBottlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bottles', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('unit');
            $table->longText('description');
            $table->year('vintage');
            $table->string('cuvee_name',55);
            $table->string('appelation',250);
            $table->string('capacity',50);
            $table->string('color',50);
            $table->time('consumable_date');
            $table->time('peak_date');
            $table->time('danger_date');
            $table->unsignedBigInteger('culture_id');
            $table->foreign('culture_id')->references('id')->on('cultures');
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
        Schema::dropIfExists('bottles');
    }
}
