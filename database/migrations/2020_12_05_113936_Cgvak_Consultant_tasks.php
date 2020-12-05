<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CgvakConsultantTasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cgvak_Consultant_tasks', function (Blueprint $table) {
            $table->integer('task_id')->unsigned()->index()->autoIncrement();
            $table->integer('projecticode')->nullable(false);
            $table->integer('consultanticode')->nullable(false);
            $table->string('tasksdescription')->nullable(false);
            $table->decimal('tasksestimatedhours')->nullable(false);
            $table->dateTime('taskstartdate')->nullable(false);
            $table->dateTime('tasksenddate')->nullable(false);
            $table->dateTime('taskscreatedon')->nullable(false);
            $table->integer('taskscreatedby')->nullable(false);
            $table->integer('projectphaseicode')->nullable(false);
            $table->integer('tasktypeicode')->nullable(false);
            $table->integer('modifiedby')->nullable();
            $table->dateTime('modifiedon')->nullable();
            $table->integer('isActive')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Cgvak_Consultant_tasks');
    }
}
