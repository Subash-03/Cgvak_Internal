<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CGVakProjectPhase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CGVak_Project_Phase', function (Blueprint $table) {
            $table->integer('ProjectPhaseICode')->unsigned()->index()->autoIncrement();
            $table->integer('ProjectICode')->nullable(false);
            $table->integer('PhaseTypeICode')->nullable(false);
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
        Schema::dropIfExists('CGVak_Project_Phase');
    }
}
