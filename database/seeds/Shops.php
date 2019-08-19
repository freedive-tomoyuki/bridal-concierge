<?php

use Illuminate\Database\Seeder;

class Shops extends Seeder
{
    /**
     * Run the database seeds.
     *
     * 
return void
     */
    public function run()
    {
        if (DB::table('shops')->count() > 0) {
            return;
        }
        $shops = [
            ['company_id' => 1, 'name' => '銀座本店', 'area_id' => 16,'zip' => '1040061', 'address' => '東京都中央区銀座2-6-3', 'business_hours_weekdays' => '11:30-20:00', 'business_hours_weekend_and_holiday' => '11:00-19:30', 'regular_holidays' => '', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '新宿本店', 'area_id' => 18,'zip' => '1600022', 'address' => '東京都新宿区新宿3-29-13', 'business_hours_weekdays' => '11:30-20:00', 'business_hours_weekend_and_holiday' => '11:30-20:00', 'regular_holidays' => '', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '立川店', 'area_id' => 20,'zip' => '1908554', 'address' => '東京都立川市柴崎町3-2-1 グランデュオ立川 8F', 'business_hours_weekdays' => '10:00-21:00', 'business_hours_weekend_and_holiday' => '10:00-21:00', 'regular_holidays' => '', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '町田マルイ店', 'area_id' => 20,'zip' => '1940013', 'address' => '東京都町田市原町田6-1-6　町田マルイ3F', 'business_hours_weekdays' => '10:30-20:30', 'business_hours_weekend_and_holiday' => '10:30-20:30', 'regular_holidays' => '', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '横浜元町店', 'area_id' => 21,'zip' => '2310861', 'address' => '神奈川県横浜市中区元町5-190-4', 'business_hours_weekdays' => '11:00-19:30', 'business_hours_weekend_and_holiday' => '11:00-19:30', 'regular_holidays' => '3', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '横浜モアーズ店', 'area_id' => 21,'zip' => '2200005', 'address' => '神奈川県横浜市西区南幸1-3-1 横浜モアーズ4F', 'business_hours_weekdays' => '10:00-21:00', 'business_hours_weekend_and_holiday' => '10:00-21:00', 'regular_holidays' => '', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => 'ららぽーと湘南平塚店', 'area_id' => 22,'zip' => '2548510', 'address' => '神奈川県平塚市天沼10-1　ららぽーと湘南平塚2F', 'business_hours_weekdays' => '10:00-21:00', 'business_hours_weekend_and_holiday' => '10:00-21:00', 'regular_holidays' => '', 'about_business_hours' => '※ららぽーと湘南平塚に準ずる'],
            ['company_id' => 1, 'name' => '大宮店', 'area_id' => 14,'zip' => '3300846', 'address' => '埼玉県さいたま市大宮区大門町1-24-2', 'business_hours_weekdays' => '11:30-20:00', 'business_hours_weekend_and_holiday' => '11:30-20:00', 'regular_holidays' => '2', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '千葉店', 'area_id' => 15,'zip' => '2600015', 'address' => '千葉県千葉市中央区富士見2-7-11', 'business_hours_weekdays' => '11:30-20:00', 'business_hours_weekend_and_holiday' => '11:30-20:00', 'regular_holidays' => '2', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '柏店', 'area_id' => 15,'zip' => '2770005', 'address' => '千葉県柏市柏1-5-20', 'business_hours_weekdays' => '11:30-20:00', 'business_hours_weekend_and_holiday' => '11:30-20:00', 'regular_holidays' => '2,3', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '宇都宮店', 'area_id' => 12,'zip' => '3200802', 'address' => '栃木県宇都宮市江野町3-8', 'business_hours_weekdays' => '10:30-19:00', 'business_hours_weekend_and_holiday' => '10:30-19:00', 'regular_holidays' => '2', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '高崎店', 'area_id' => 13,'zip' => '3700053', 'address' => '群馬県高崎市通町33-2', 'business_hours_weekdays' => '10:30-19:00', 'business_hours_weekend_and_holiday' => '10:30-19:00', 'regular_holidays' => '2,3', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => 'ホテルテラスザガーデン水戸店', 'area_id' => 11,'zip' => '3100015', 'address' => '茨城県水戸市宮町1-7 （ホテル テラス ザ ガーデン水戸3F）', 'business_hours_weekdays' => '11:00-19:30', 'business_hours_weekend_and_holiday' => '11:00-19:30', 'regular_holidays' => '2,3', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '札幌時計台店', 'area_id' => 1,'zip' => '0600001', 'address' => '北海道札幌市中央区北1条西2丁目 札幌時計台ビル1F', 'business_hours_weekdays' => '11:00-19:30', 'business_hours_weekend_and_holiday' => '11:00-19:30', 'regular_holidays' => '2', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '盛岡店', 'area_id' => 6,'zip' => '0200024', 'address' => '岩手県盛岡市菜園2-2-23', 'business_hours_weekdays' => '11:00-19:30', 'business_hours_weekend_and_holiday' => '11:00-19:30', 'regular_holidays' => '2,3', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '仙台本店', 'area_id' => 7,'zip' => '9800811', 'address' => '宮城県仙台市青葉区一番町4-5-15', 'business_hours_weekdays' => '11:00-19:30', 'business_hours_weekend_and_holiday' => '11:00-19:30', 'regular_holidays' => '', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '長野本店', 'area_id' => 28,'zip' => '3800826', 'address' => '長野県長野市南長野北石堂町1413番地', 'business_hours_weekdays' => '11:00-19:30', 'business_hours_weekend_and_holiday' => '11:00-19:30', 'regular_holidays' => '2,3', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '松本本店', 'area_id' => 28,'zip' => '3900811', 'address' => '長野県松本市中央1-4-10', 'business_hours_weekdays' => '11:00-19:30', 'business_hours_weekend_and_holiday' => '11:00-19:30', 'regular_holidays' => '2,3', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '軽井沢店', 'area_id' => 28,'zip' => '3890102', 'address' => '長野県北佐久郡軽井沢町軽井沢1151-5', 'business_hours_weekdays' => '12:00-17:00', 'business_hours_weekend_and_holiday' => '12:00-17:00', 'regular_holidays' => '2,3', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '新潟本店', 'area_id' => 23,'zip' => '9500088', 'address' => '新潟県新潟市中央区万代1-2-3', 'business_hours_weekdays' => '11:00-19:30', 'business_hours_weekend_and_holiday' => '11:00-19:30', 'regular_holidays' => '3', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '富山本店', 'area_id' => 24,'zip' => '9300083', 'address' => '富山県富山市総曲輪3-3-18', 'business_hours_weekdays' => '11:00-19:30', 'business_hours_weekend_and_holiday' => '11:00-19:30', 'regular_holidays' => '2,3', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '金沢本店', 'area_id' => 25,'zip' => '9200981', 'address' => '石川県金沢市片町1-3-8', 'business_hours_weekdays' => '11:00-19:30', 'business_hours_weekend_and_holiday' => '11:00-19:30', 'regular_holidays' => '2,3', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '福井店', 'area_id' => 26,'zip' => '9100006', 'address' => '福井県福井市中央1-5-1', 'business_hours_weekdays' => '11:00-19:30', 'business_hours_weekend_and_holiday' => '11:00-19:30', 'regular_holidays' => '2,3', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '静岡本店', 'area_id' => 31,'zip' => '4200852', 'address' => '静岡県静岡市葵区紺屋町3-1CROSS NINE　1階', 'business_hours_weekdays' => '10:30-19:00', 'business_hours_weekend_and_holiday' => '10:30-19:00', 'regular_holidays' => '2,3', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '浜松店', 'area_id' => 30,'zip' => '4300933', 'address' => '静岡県浜松市中区鍛冶町320-16', 'business_hours_weekdays' => '11:00-19:30', 'business_hours_weekend_and_holiday' => '11:00-19:30', 'regular_holidays' => '3', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '沼津店', 'area_id' => 32,'zip' => '4100801', 'address' => '静岡県沼津市大手町1-1-5 BiVi沼津1F', 'business_hours_weekdays' => '10:30-19:00', 'business_hours_weekend_and_holiday' => '10:30-19:00', 'regular_holidays' => '2,3', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '名古屋本店', 'area_id' => 33,'zip' => '4600008', 'address' => '愛知県名古屋市中区栄3-4-22', 'business_hours_weekdays' => '11:30-20:00', 'business_hours_weekend_and_holiday' => '11:00-20:00', 'regular_holidays' => '', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '名古屋ユニモール店', 'area_id' => 33,'zip' => '4500002', 'address' => '愛知県名古屋市中村区名駅4-5-26 ユニモール地下街（5番出入口）', 'business_hours_weekdays' => '10:00-20:30', 'business_hours_weekend_and_holiday' => '10:00-20:30', 'regular_holidays' => '', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '京都本店', 'area_id' => 37,'zip' => '6008007', 'address' => '京都府京都市下京区四条通高倉西入立売西町76', 'business_hours_weekdays' => '11:30-20:00', 'business_hours_weekend_and_holiday' => '11:00-19:30', 'regular_holidays' => '', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '心斎橋本店', 'area_id' => 38,'zip' => '5420085', 'address' => '大阪府大阪市中央区心斎橋筋1-4-14', 'business_hours_weekdays' => '11:30-20:00', 'business_hours_weekend_and_holiday' => '11:30-20:00', 'regular_holidays' => '', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '大阪店', 'area_id' => 38,'zip' => '5300012', 'address' => '大阪府大阪市北区芝田1-1-26', 'business_hours_weekdays' => '11:30-20:00', 'business_hours_weekend_and_holiday' => '11:30-20:00', 'regular_holidays' => '', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '梅田店', 'area_id' => 38,'zip' => '5300001', 'address' => '大阪府大阪市北区梅田2-2-22 ハービスPLAZA ENT 2F', 'business_hours_weekdays' => '11:00-20:00', 'business_hours_weekend_and_holiday' => '11:00-20:00', 'regular_holidays' => '', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '神戸本店', 'area_id' => 40,'zip' => '6500021', 'address' => '神戸市中央区三宮町3-1-8', 'business_hours_weekdays' => '11:30-20:00', 'business_hours_weekend_and_holiday' => '11:30-20:00', 'regular_holidays' => '', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '神戸三宮店', 'area_id' => 40,'zip' => '6500021', 'address' => '兵庫県神戸市中央区三宮町2-10-24', 'business_hours_weekdays' => '11:30-20:00', 'business_hours_weekend_and_holiday' => '11:30-20:00', 'regular_holidays' => '', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '姫路店', 'area_id' => 41,'zip' => '6700927', 'address' => '兵庫県姫路市駅前町274番地', 'business_hours_weekdays' => '11:00-19:30', 'business_hours_weekend_and_holiday' => '11:00-19:30', 'regular_holidays' => '2,3', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '岡山本店', 'area_id' => 46,'zip' => '7000822', 'address' => '岡山県岡山市北区表町2-2-63', 'business_hours_weekdays' => '11:00-19:30', 'business_hours_weekend_and_holiday' => '11:00-19:30', 'regular_holidays' => '2,3', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '広島本店', 'area_id' => 47,'zip' => '7300035', 'address' => '広島県広島市中区本通2-5', 'business_hours_weekdays' => '11:00-19:30', 'business_hours_weekend_and_holiday' => '11:00-19:30', 'regular_holidays' => '2', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '高松本店', 'area_id' => 50,'zip' => '7600029', 'address' => '香川県高松市丸亀町9-6', 'business_hours_weekdays' => '11:00-19:30', 'business_hours_weekend_and_holiday' => '11:00-19:30', 'regular_holidays' => '2,3', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '松山本店', 'area_id' => 51,'zip' => '7900004', 'address' => '愛媛県松山市大街道2-3-7', 'business_hours_weekdays' => '11:00-19:30', 'business_hours_weekend_and_holiday' => '11:00-19:30', 'regular_holidays' => '2,3', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '小倉店', 'area_id' => 53,'zip' => '8020007', 'address' => '福岡県北九州市小倉北区船場町2-6', 'business_hours_weekdays' => '10:30-19:00', 'business_hours_weekend_and_holiday' => '10:30-19:00', 'regular_holidays' => '2', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '福岡本店', 'area_id' => 53,'zip' => '8100001', 'address' => '福岡県福岡市中央区天神2-3-19', 'business_hours_weekdays' => '11:30-20:00', 'business_hours_weekend_and_holiday' => '11:30-20:00', 'regular_holidays' => '2', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => 'ヒルトン福岡シーホーク店', 'area_id' => 53,'zip' => '10-065 ', 'address' => '福岡県福岡市中央区地行浜2-2-3　ヒルトン福岡シーホーク4Ｆ', 'business_hours_weekdays' => '11:00-19:30', 'business_hours_weekend_and_holiday' => '11:00-19:30', 'regular_holidays' => '2', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '博多マルイ店', 'area_id' => 53,'zip' => '8120012', 'address' => '福岡市博多区博多駅中央街9-1　博多マルイ4F', 'business_hours_weekdays' => '10:00-21:00', 'business_hours_weekend_and_holiday' => '10:00-21:00', 'regular_holidays' => '', 'about_business_hours' => '※博多マルイに準ずる'],
            ['company_id' => 1, 'name' => '長崎ハマクロス411店', 'area_id' => 55,'zip' => '8500853', 'address' => '長崎県長崎市浜町4-11　ハマクロス411　2F', 'business_hours_weekdays' => '10:00-20:00', 'business_hours_weekend_and_holiday' => '10:00-20:00', 'regular_holidays' => '', 'about_business_hours' => ''],
            ['company_id' => 1, 'name' => '熊本本店', 'area_id' => 56,'zip' => '8600845', 'address' => '熊本県熊本市中央区上通町4-18', 'business_hours_weekdays' => '11:00-19:30', 'business_hours_weekend_and_holiday' => '11:00-19:30', 'regular_holidays' => '2', 'about_business_hours' => ''],
            ['company_id' => 2, 'name' => '銀座本社ショールーム', 'area_id' => 16,'zip' => '1040061', 'address' => '東京都中央区銀座2-5-8 GM-Gビル7F', 'business_hours_weekdays' => '11:00-19:00', 'business_hours_weekend_and_holiday' => '11:00-19:00', 'regular_holidays' => '', 'about_business_hours' => ''],
            ['company_id' => 2, 'name' => '横浜ショールーム（火・水・木曜日定休）', 'area_id' => 21,'zip' => '2310021', 'address' => '神奈川県横浜市中区日本大通14 KN日本大通りビル1F', 'business_hours_weekdays' => '11:00-19:00', 'business_hours_weekend_and_holiday' => '11:00-19:30', 'regular_holidays' => '2,3,4', 'about_business_hours' => ' (月・金は完全予約制)'],
            ['company_id' => 2, 'name' => '名古屋ショールーム（火・水曜日定休）', 'area_id' => 33,'zip' => '4510042', 'address' => '愛知県名古屋市西区那古野1-36-47', 'business_hours_weekdays' => '11:00-19:00', 'business_hours_weekend_and_holiday' => '11:30-20:00', 'regular_holidays' => '2,3', 'about_business_hours' => ''],
            ['company_id' => 2, 'name' => '大阪ショールーム（木曜日）', 'area_id' => 38,'zip' => '5300005', 'address' => '大阪府大阪市北区中之島3丁目6−32 ダイビル本館2F', 'business_hours_weekdays' => '11:00-19:00', 'business_hours_weekend_and_holiday' => '10:00-21:00', 'regular_holidays' => '4', 'about_business_hours' => ''],
            ['company_id' => 2, 'name' => '福岡ショールーム（火・水曜日）', 'area_id' => 53,'zip' => '8100001', 'address' => '福岡県福岡市中央区天神2丁目7-21 天神プライムビル9F', 'business_hours_weekdays' => '11:00-19:00', 'business_hours_weekend_and_holiday' => '10:30-20:30', 'regular_holidays' => '2,3', 'about_business_hours' => ''],
            ['company_id' => 3, 'name' => '札幌ステラプレイス店', 'area_id' => 1,'zip' => '0600005', 'address' => '北海道札幌市中央区北5条西2-5 札幌ステラプレイス3Ｆ', 'business_hours_weekdays' => '10:00-21:00', 'business_hours_weekend_and_holiday' => '11:00-19:30', 'regular_holidays' => '', 'about_business_hours' => ''],
            ['company_id' => 3, 'name' => '銀座本店', 'area_id' => 16,'zip' => '1040061', 'address' => '東京都中央区銀座1-8-19 KIRARITO GINZA 2F ', 'business_hours_weekdays' => '11:00-20:00', 'business_hours_weekend_and_holiday' => '10:00-21:00', 'regular_holidays' => '', 'about_business_hours' => ''],
            ['company_id' => 3, 'name' => '横浜元町店', 'area_id' => 21,'zip' => '2310861', 'address' => '神奈川県横浜市中区元町1-18-5 レフィナード元町1', 'business_hours_weekdays' => '11:00-19:30', 'business_hours_weekend_and_holiday' => '10:00-21:00', 'regular_holidays' => '3', 'about_business_hours' => ''],
            ['company_id' => 3, 'name' => 'ららぽーとTOKYO-BAY店', 'area_id' => 15,'zip' => '2738530', 'address' => '千葉県船橋市浜町2-1-1 ららぽーとTOKYO-BAY北館・1F', 'business_hours_weekdays' => '10:00-20:00', 'business_hours_weekend_and_holiday' => '11:30-20:00', 'regular_holidays' => '', 'about_business_hours' => ''],
            ['company_id' => 3, 'name' => '新潟店', 'area_id' => 23,'zip' => '9500909', 'address' => '新潟県新潟市中央区八千代2-1-2 万代シティビルボードプレイス　1F', 'business_hours_weekdays' => '11:00-20:00', 'business_hours_weekend_and_holiday' => '11:30-20:00', 'regular_holidays' => '', 'about_business_hours' => ''],
            ['company_id' => 3, 'name' => '名古屋マリオット店', 'area_id' => 33,'zip' => '4500002', 'address' => '愛知県名古屋市中村区名駅1-1-4 名古屋マリオットアソシアホテル15階', 'business_hours_weekdays' => '10:30-19:00', 'business_hours_weekend_and_holiday' => '11:30-20:00', 'regular_holidays' => '', 'about_business_hours' => ''],
            ['company_id' => 3, 'name' => '京都店', 'area_id' => 37,'zip' => '6008008', 'address' => '京都府京都市下京区四条通烏丸東入ル長刀鉾町22 1Ｆ', 'business_hours_weekdays' => '11:00-19:30', 'business_hours_weekend_and_holiday' => '10:30-19:00', 'regular_holidays' => '2,3', 'about_business_hours' => ''],
            ['company_id' => 3, 'name' => 'なんばパークス店', 'area_id' => 38,'zip' => '5560011', 'address' => '大阪府大阪市浪速区難波中2-10-70 なんばパークスT-terrace 3F', 'business_hours_weekdays' => '11:00-21:00', 'business_hours_weekend_and_holiday' => '10:30-19:00', 'regular_holidays' => '', 'about_business_hours' => ''],
            ['company_id' => 3, 'name' => '梅田NU茶屋町店', 'area_id' => 38,'zip' => '5300013', 'address' => '大阪府大阪市北区茶屋町10-12 NU茶屋町3F', 'business_hours_weekdays' => '11:00-21:00', 'business_hours_weekend_and_holiday' => '11:00-19:30', 'regular_holidays' => '', 'about_business_hours' => ''],
            ['company_id' => 3, 'name' => '神戸三宮店', 'area_id' => 40,'zip' => '6500021', 'address' => '兵庫県神戸市中央区三宮町3丁目9番2号 ', 'business_hours_weekdays' => '11:00-19:30', 'business_hours_weekend_and_holiday' => '11:00-19:30', 'regular_holidays' => '2,3', 'about_business_hours' => ''],
            ['company_id' => 3, 'name' => '福岡店', 'area_id' => 53,'zip' => '8100041', 'address' => '福岡県福岡市中央区大名1-15-14', 'business_hours_weekdays' => '11:00-19:30', 'business_hours_weekend_and_holiday' => '11:00-19:30', 'regular_holidays' => '3', 'about_business_hours' => ''],
        ];
        for($i=0; $i<count($shops); $i++) {
            $shops[$i]['brand'] = rand(1,5);
            $shops[$i]['price'] = rand(1,5);
            $shops[$i]['design'] = rand(1,5);
            $shops[$i]['diamond'] = rand(1,5);
            $shops[$i]['age_of_customer'] = rand(1,3);
        }

        DB::table('shops')->insert($shops);
    }
}
