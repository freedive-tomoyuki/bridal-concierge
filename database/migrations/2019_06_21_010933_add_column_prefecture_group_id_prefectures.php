<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnPrefectureGroupIdPrefectures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prefectures', function (Blueprint $table) {
            $table->integer('prefecture_group_id')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prefectures', function (Blueprint $table) {
            $table->dropColumn('prefecture_group_id');
        });
    }
}
