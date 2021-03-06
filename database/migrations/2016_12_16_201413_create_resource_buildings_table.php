<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourceBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resource_buildings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cartel_type_id');
            $table->string('name');
            $table->integer('price');
            $table->double('initial_resource_amount');
            $table->double('income_per_hour');
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
        Schema::dropIfExists('resource_buildings');
    }
}
