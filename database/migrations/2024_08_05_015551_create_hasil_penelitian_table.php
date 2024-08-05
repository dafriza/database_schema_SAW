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
        Schema::create('hasil_penelitian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('data_penelitian_id');
            $table->foreign('data_penelitian_id')->references('id')->on('data_penelitian');
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
        Schema::dropIfExists('hasil_penelitian');
    }
};
