<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintances', function (Blueprint $table) {
            $table->id();
            $table->dateTime('maintance_started_at');
            $table->dateTime('maintance_finished_at');
            $table->string('maintance_type');
            $table->enum('status', array('pending', 'done'));
            $table->foreignId('cylinder_id')->references('id')->on('cylinders');
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
        Schema::dropIfExists('maintances');
    }
};
