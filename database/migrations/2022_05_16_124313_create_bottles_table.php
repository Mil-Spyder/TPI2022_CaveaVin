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
            $table->string('appelation', 250);
            $table->string('cuvee_name', 55);
            $table->string('region');
            $table->string('vintage');
            $table->string('capacity', 50);
            $table->string('color', 50);
            $table->string('unit');
            $table->string('consumable_date');
            $table->string('peak_date');
            $table->string('danger_date');
            $table->longText('description');
            $table->unsignedBigInteger('culture_id')->nullable();
            $table->foreign('culture_id')->references('id')->on('cultures')->onDelete('cascade');
            $table->unsignedBigInteger('winemaker_id')->nullable();
            $table->foreign('winemaker_id')->references('id')->on('winemakers')->onDelete('cascade');            
            $table->unsignedBigInteger('grape_variety_id')->nullable();
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
