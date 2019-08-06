<?php

use Illuminate\Database\Seeder;

class Prefecture extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        if (DB::table('prefectures')->count() > 0) {
            return;
        }
        DB::table('prefectures')->insert([
            ['name' => '北海道', 'prefecture_group_id' => 1],
            ['name' => '青森県', 'prefecture_group_id' => 2],
            ['name' => '岩手県', 'prefecture_group_id' => 2],
            ['name' => '宮城県', 'prefecture_group_id' => 2],
            ['name' => '秋田県', 'prefecture_group_id' => 2],
            ['name' => '山形県', 'prefecture_group_id' => 2],
            ['name' => '福島県', 'prefecture_group_id' => 2],
            ['name' => '茨城県', 'prefecture_group_id' => 3],
            ['name' => '栃木県', 'prefecture_group_id' => 3],
            ['name' => '群馬県', 'prefecture_group_id' => 3],
            ['name' => '埼玉県', 'prefecture_group_id' => 4],
            ['name' => '千葉県', 'prefecture_group_id' => 4],
            ['name' => '東京都', 'prefecture_group_id' => 4],
            ['name' => '神奈川県', 'prefecture_group_id' => 4],
            ['name' => '新潟県', 'prefecture_group_id' => 5],
            ['name' => '富山県', 'prefecture_group_id' => 5],
            ['name' => '石川県', 'prefecture_group_id' => 5],
            ['name' => '福井県', 'prefecture_group_id' => 5],
            ['name' => '山梨県', 'prefecture_group_id' => 5],
            ['name' => '長野県', 'prefecture_group_id' => 5],
            ['name' => '岐阜県', 'prefecture_group_id' => 6],
            ['name' => '静岡県', 'prefecture_group_id' => 5],
            ['name' => '愛知県', 'prefecture_group_id' => 6],
            ['name' => '三重県', 'prefecture_group_id' => 6],
            ['name' => '滋賀県', 'prefecture_group_id' => 7],
            ['name' => '京都府', 'prefecture_group_id' => 7],
            ['name' => '大阪府', 'prefecture_group_id' => 7],
            ['name' => '兵庫県', 'prefecture_group_id' => 7],
            ['name' => '奈良県', 'prefecture_group_id' => 7],
            ['name' => '和歌山県', 'prefecture_group_id' => 7],
            ['name' => '鳥取県', 'prefecture_group_id' => 8],
            ['name' => '島根県', 'prefecture_group_id' => 8],
            ['name' => '岡山県', 'prefecture_group_id' => 8],
            ['name' => '広島県', 'prefecture_group_id' => 8],
            ['name' => '山口県', 'prefecture_group_id' => 8],
            ['name' => '徳島県', 'prefecture_group_id' => 9],
            ['name' => '香川県', 'prefecture_group_id' => 9],
            ['name' => '愛媛県', 'prefecture_group_id' => 9],
            ['name' => '高知県', 'prefecture_group_id' => 9],
            ['name' => '福岡県', 'prefecture_group_id' => 10],
            ['name' => '佐賀県', 'prefecture_group_id' => 10],
            ['name' => '長崎県', 'prefecture_group_id' => 10],
            ['name' => '熊本県', 'prefecture_group_id' => 10],
            ['name' => '大分県', 'prefecture_group_id' => 10],
            ['name' => '宮崎県', 'prefecture_group_id' => 10],
            ['name' => '鹿児島県', 'prefecture_group_id' => 10],
            ['name' => '沖縄県', 'prefecture_group_id' => 10]]
        );
    }
}
