<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('project_name');
            $table->string('contactname');
            $table->string('company')->nullable;
            $table->integer('project_member');
            $table->string('state');
            $table->string('amount')->nullable;
            $table->date('startdate')->nullable;
            $table->date('enddate')->nullable;
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
        Schema::dropIfExists('project_infos');
    }
}
