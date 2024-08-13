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
        Schema::table('saw_bobot_kriteria', function ($table) {
            $table->dropForeign('saw_bobot_kriteria_kriteria_id_foreign');
            $table->dropForeign('saw_bobot_kriteria_bobot_kriteria_id_foreign');
            $table->dropColumn('kriteria_id');
            $table->dropColumn('bobot_kriteria_id');
        });
        Schema::drop("saw_bobot_kriteria");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
