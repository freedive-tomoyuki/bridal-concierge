<?php

use Illuminate\Database\Seeder;

class Areas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('areas')->count() > 0) {
            return;
        }
        $this->insert2('北海道', [
            '道央（札幌市・札幌市近郊）',
            '道北（旭川）',
            '道南（函館）',
            '道東（帯広・北見・釧路）']);
        $this->insert(['青森', '岩手', '宮城', '秋田', '山形', '福島','茨城',  '栃木', '群馬', '埼玉', '千葉']); 

        $this->insert2('東京都', [
            '銀座・東京・上野 エリア',
            '青山・渋谷・恵比寿・六本木・表参道 エリア',
            '新宿・池袋　エリア',
            'その他23区内',
            '23区以外の東京都']);

        $this->insert2('神奈川県', ['横浜市', 'その他神奈川']);
        $this->insert(['新潟', '富山', '石川', '福井', '山梨', '長野', '岐阜']);
        $this->insert2('静岡県', ['西部（浜松市、磐田市）', '中部（静岡市）', '東部（沼津市、富士市）']);
        $this->insert2('愛知県', ['尾張地方（名古屋市・尾張市・知多市）', '三河地方']);
        $this->insert(['三重', '滋賀']);
        $this->insert2('京都府', ['京都全域']);
        $this->insert2('大阪府', ['大阪市', 'その他大阪府']);
        $this->insert2('兵庫県', ['神戸市・阪神間', '姫路市・明石市・その他兵庫県']);
        $this->insert(['奈良', '和歌山', '鳥取', '島根', '岡山', '広島', '山口', '徳島', '香川', '愛媛', '高知', '福岡', '佐賀', '長崎', '熊本', '大分', '宮崎', '鹿児島', '沖縄']);

    }

    private function insert($table)
    {
        foreach($table as $n) {
            $p = App\Prefecture::where('name' , '=', $n . '県')->first();
            DB::table('areas')->insert([
                ['prefecture_id' => $p->id, 'name' => $n . '全域'],
            ]);
        }
    }
    private function insert2($prefecture_name, $table)
    {
        $p = App\Prefecture::where('name' , '=', $prefecture_name)->first();
        foreach($table as $n) {
            DB::table('areas')->insert([
                ['prefecture_id' => $p->id, 'name' => $n],
            ]);
        }
    }

}
