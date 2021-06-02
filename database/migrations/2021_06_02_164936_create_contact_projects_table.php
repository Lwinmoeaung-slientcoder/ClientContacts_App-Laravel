<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('project name');
            $table->integer('user_id');
            $table->string('company')->nullable;;
            $table->integer('project member');
            $table->string('state');
            $table->integer('amount')->nullable;
            $table->string('startdate')->nullable;
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
        Schema::dropIfExists('contact_projects');
    }
}
