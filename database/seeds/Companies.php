<?php

use Illuminate\Database\Seeder;

class Companies extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->truncate();
    	if (DB::table('companies')->count() > 0){
    		return;
    	}
        DB::table('companies')->insert([
            ['name' => 'ニューアート', 'kana' => 'ニューアート'],
            ['name' => 'ブリリアンス+', 'kana' => 'ブリリアンス+'],
            ['name' => 'トレセンテ', 'kana' => 'トレセンテ'],
            ['name' => 'エクセルコダイヤモンド', 'kana' => 'エクセルコダイヤモンド'],
            ['name' => 'アイプリモ', 'kana' => 'アイプリモ'],
            ['name' => 'ラザール', 'kana' => 'ラザール'],
            ['name' => 'ケイウノ', 'kana' => 'ケイウノ'],
            ['name' => 'ジュエリーカマタ', 'kana' => 'ジュエリーカマタ'],
        ]);
    }
}
