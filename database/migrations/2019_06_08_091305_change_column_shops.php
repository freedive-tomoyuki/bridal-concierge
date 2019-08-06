<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnShops extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shops', function (Blueprint $table) {
            $table->string('business_hours_weekdays', 11)->change();
            $table->string('business_hours_weekend_and_holiday', 11)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shops', function (Blueprint $table) {
            $table->time('business_hours_weekdays', 11)->change();
            $table->time('business_hours_weekend_and_holiday', 11)->change();
        });
    }
}
