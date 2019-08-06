<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnShops2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shops', function (Blueprint $table) {
            $table->text('regular_holidays', 255)->after('business_hours_weekend_and_holiday')->nullable();
            $table->text('images', 255)->after('about_regular_holiday')->nullable();;
            $table->smallInteger('age_of_customer')->after('about_regular_holiday');
            $table->smallInteger('diamond')->after('about_regular_holiday');
            $table->smallInteger('design')->after('about_regular_holiday');
            $table->smallInteger('price')->after('about_regular_holiday');
            $table->smallInteger('brand')->after('about_regular_holiday');

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
            $table->dropColumn('regular_holidays');
            $table->dropColumn('images');
            $table->dropColumn('age_of_customer');
            $table->dropColumn('diamond');
            $table->dropColumn('design');
            $table->dropColumn('price');
            $table->dropColumn('brand');
        });
    }
}
