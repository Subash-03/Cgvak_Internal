<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CGVakConsultantMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CGVak_Consultant_Master', function (Blueprint $table) {
            $table->integer('ConsultantICode')->nullable(false);
            $table->string('ConsultantFirstName')->nullable(false);
            $table->string('ConsultantLastName')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CGVak_Consultant_Master');
    }
}
