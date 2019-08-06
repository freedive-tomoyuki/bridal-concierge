<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shops', function (Blueprint $table) {
            $table->dropColumn('map');
            $table->dropColumn('badget');
            $table->dropColumn('prefecture_id');
            $table->integer('company_id')->after('id');
            $table->integer('area_id')->after('company_id');
            $table->string('zip', 8)->after('name')->nullable();
            $table->string('address')->after('zip')->nullable();
            $table->string('email')->after('description')->nullable();
            $table->time('business_hours_weekdays')->after('email')->nullable();
            $table->time('business_hours_weekend_and_holiday')->after('business_hours_weekdays')->nullable();
            $table->string('about_business_hours')->after('business_hours_weekend_and_holiday')->nullable();
            $table->string('about_regular_holiday')->after('about_business_hours')->nullable();
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
            $table->integer('prefecture_id');
            $table->text('map');
            $table->integer('badget');
            $table->dropColumn('company_id');
            $table->dropColumn('area_id');
            $table->dropColumn('zip');
            $table->dropColumn('address');
            $table->dropColumn('email');
            $table->dropColumn('business_hours_weekdays');
            $table->dropColumn('business_hours_weekend_and_holiday');
            $table->dropColumn('about_business_hours');
            $table->dropColumn('about_regular_holiday');
        });
    }
}
