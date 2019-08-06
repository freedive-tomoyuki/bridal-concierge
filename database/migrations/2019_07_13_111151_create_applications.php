<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 20);
            $table->string('kana', 20);
            $table->smallInteger('age')->nullable();
            $table->smallInteger('gender');
            $table->string('tel', 20);
            $table->string('email', 255);
            $table->smallInteger('visited_code');
            $table->string('objective_of_visit', 255)->nullable();
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
        Schema::dropIfExists('applications');
    }
}
