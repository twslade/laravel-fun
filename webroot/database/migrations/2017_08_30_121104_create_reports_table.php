<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('wave_size_in_body', [
                'Ankle to Knee',
                'Knee to Thigh',
                'Thigh to Waist',
                'Waist to Stomach',
                'Stomach to Chest',
                'Chest to Shoulder',
                'Shoulder to Head',
                'Head to Overhead',
                'Overhead'
            ]);
            $table->integer('wave_size');
            $table->integer('wind_speed');
            $table->integer('wind_direction');
            $table->string('picture');
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
        Schema::dropIfExists('reports');
    }
}
