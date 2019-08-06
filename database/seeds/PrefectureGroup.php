<?php

use Illuminate\Database\Seeder;

class PrefectureGroup extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        if (DB::table('prefecture_groups')->count() > 0) {
            return;
        }
        DB::table('prefecture_groups')->insert([
            ['name' => '北海道地方'],
            ['name' => '東北'],
            ['name' => '栃木・茨城・群馬'],
            ['name' => '首都圏'],
            ['name' => '北陸・甲信越・静岡'],
            ['name' => '東海'],
            ['name' => '関西'],
            ['name' => '中国'],
            ['name' => '四国'],
            ['name' => '九州・沖縄']]
        );
    }
}
