<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->text('polygon_id_agroapi')->nullable();
            //main point
            $table->decimal('lat', 10, 8)->nullable();
            $table->decimal('lng', 11, 8)->nullable();
            // point1
            $table->decimal('latp1', 10, 8)->nullable();
            $table->decimal('lngp1', 11, 8)->nullable();
            // point2
            $table->decimal('latp2', 10, 8)->nullable();
            $table->decimal('lngp2', 11, 8)->nullable();
            // point3
            $table->decimal('latp3', 10, 8)->nullable();
            $table->decimal('lngp3', 11, 8)->nullable();
            // point4
            $table->decimal('latp4', 10, 8)->nullable();
            $table->decimal('lngp5', 11, 8)->nullable();
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
        Schema::dropIfExists('locations');
    }
}
