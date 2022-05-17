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
            $table->longText('description');
            $table->string('vintage');
            $table->string('cuvee_name',55);
            $table->string('appelation',250);
            $table->string('capacity',50);
            $table->string('color',50);
            $table->date('consumable_date');
            $table->date('peak_date');
            $table->date('danger_date');
            $table->string('unit');
            $table->unsignedBigInteger('culture_id');
            $table->foreign('culture_id')->references('id')->on('cultures')->onDelete('cascade');
            $table->foreignId('winemaker_id')->constrained();
            $table->unsignedBigInteger('grape_variety_id');
            $table->foreign('grape_variety_id')->references('id')->on('grape_varieties')->onDelete('cascade');
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
