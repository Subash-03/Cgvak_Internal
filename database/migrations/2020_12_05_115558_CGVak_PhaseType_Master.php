<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CGVakPhaseTypeMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CGVak_PhaseType_Master', function (Blueprint $table) {
            $table->integer('PhaseTypeICode')->nullable(false);
            $table->string('PhaseName')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CGVak_PhaseType_Master');
    }
}
