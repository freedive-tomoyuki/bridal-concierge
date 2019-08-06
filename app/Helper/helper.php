<?php

use App\Prefecture;
use App\PrefectureGroup;
use App\Area;
use App\Company;
use App\Shop;

if (!function_exists('prefecture_options')) {
    function prefecture_options($id = 0) {
        $options = "";
        $prefectures = Prefecture::all();
        foreach($prefectures as $p) {
            if($id === $p->id) {
                $options .= "<option value=\"$p->id\" selected>$p->name</option>";
            } else {
                $options .= "<option value=\"$p->id\">$p->name</option>";
            }
        }
        return $options;
    }
}

if (!function_exists('areas_array')) {
    function areas_array() {

        $areas = Area::all();
        $ret = [];
        foreach($areas as $a) {
            $ret[$a->prefecture_id][] = [$a->id, $a->name];
        }
        return $ret;
    }
}

if (!function_exists('prefecture_groups')) {
    function prefecture_groups($id = 0) {
        $prefecture_groups = PrefectureGroup::all();
        $result = [];
        foreach($prefecture_groups as $g) {
            $prefectures = [];
            foreach($g->prefectures as $p) {
                $areas = [];
                foreach($p->areas as $a) {
                    $areas[$a->id] = array("id" => $a->id, "name" => $a->name);
                }
                $prefectures[$p->id] = array("id" => $p->id, "name" => $p->name, "areas" => $areas);
            }
            $result[$g->id] = array("id" => $g->id, "name" => $g->name, "prefectures" => $prefectures);
        }
        return json_encode($result);
    }
}

if (!function_exists('company_options')) {
    function company_options($id = 0) {
        $options = "";
        $companies = Company::all();
        foreach($companies as $p) {
            if($id === $p->id) {
                $options .= "<option value=\"$p->id\" selected>$p->name</option>";
            } else {
                $options .= "<option value=\"$p->id\">$p->name</option>";
            }
        }
        return $options;
    }
}

if (!function_exists('star_options')) {
    function star_options($id = 0) {
        $options = "";
        for($i=1; $i<=5; $i++) {
            $star = stars($i);
            if($id === $i) {
                $options .= "<option value=\"$i\" selected>$star</option>";
            } else {
                $options .= "<option value=\"$i\">$star</option>";
            }
        }
        return $options;
    }
}

if (!function_exists('age_of_customer_options')) {
    function age_of_customer_options($id = 0) {
        $options = "";
        for($i=1; $i<=3; $i++) {
            $text = age_of_customer_text($i);
            if($id === $i) {
                $options .= "<option value=\"$i\" selected>$text</option>";
            } else {
                $options .= "<option value=\"$i\">$text</option>";
            }
        }
        return $options;
    }
}

if (!function_exists('visit_date_options')) {
    function visit_date_options($shopId, $date) {
        $options = "";
        $shop = Shop::find($shopId);
        foreach($shop->available_dates() as $d) {
            if($date === $d) {
                $options .= "<option value=\"$shopId|$d\" selected>$d</option>";
            } else {
                $options .= "<option value=\"$shopId|$d\">$d</option>";
            }
        }
        return $options;
    }
}

if (!function_exists('visit_time')) {
    function visit_time($shopId) {
        $shop = Shop::find($shopId);
        $weekday_times = [];
        foreach($shop->available_times(false) as $t) {
            $weekday_times[] = $t;
        }
        $weekend_times = [];
        foreach($shop->available_times(true) as $t) {
            $weekend_times[] = $t;
        }
        return json_encode([$shopId, $weekend_times, $weekday_times]);
    }
}

// ---

if (!function_exists('is_checked')) {
    function is_checked($name, $value, $default=null) {
        if (in_array($value, old($name, $default ? $default : []))) {
            return "checked";
        } 
        return "";
    }
}

if (!function_exists('is_selected')) {
    function is_selected($name, $value, $default = false) {
        if($default) {
            return old($name, $value) === $value ? "checked" : "";
        } 
        return old($name) === $value ? "checked" : "";
    }
}

if (!function_exists('stars')) {
    function stars($value) {
        return mb_substr("★★★★★", 0, $value). mb_substr("☆☆☆☆☆", 0, 5-$value);
    }
}
if (!function_exists('hodliday_text')) {
    function holiday_text($value) {
        if($value === "") {
            return "年中無休(年末年始を除く)";
        }
        $tbl = ['日', '月', '火', '水', '木', '金', '土'];
        $wk = explode(',', $value);
        $holiday = "";
        for($i=0; $i<count($wk); $i++) {
            $holiday .= $tbl[intval($wk[$i])];
            if($i !== count($wk)-1) {
                $holiday .= "・";
            }
        }

        return $holiday . "曜日";
    }
}

if (!function_exists('age_of_customer_text')) {
    function age_of_customer_text($value) {
        $tbl = [
            1 => '20〜30代',
            2 => '30〜40代',
            3 => '50〜60代'
        ];
        if ($value >= 1 && $value <= 3) {
            return $tbl[$value];
        }
        return "";
    }
}

if (!function_exists('gender_text')) {
    function gender_text($value) {
        $tbl = [
            1 => '男性',
            2 => '女性',
        ];
        if ($value >= 1 && $value <= 2) {
            return $tbl[$value];
        }
        return "";
    }
}

if (!function_exists('people_text')) {
    function people_text($value) {
        $tbl = [
            1 => 'パートナーと２人',
            2 => '男性１人',
            3 => '女性１人',
            4 => 'ご友人と',
            5 => 'その他（３名以上など）',
        ];
        if ($value >= 1 && $value <= 5) {
            return $tbl[$value];
        }
        return "";
    }
}

if (!function_exists('visited_text')) {
    function visited_text($value) {
        $tbl = [
            1 => '初めての来店',
            2 => '2回目以降の来店',
        ];
        if ($value >= 1 && $value <= 2) {
            return $tbl[$value];
        }
        return "";
    }
}

if (!function_exists('objective_of_visit')) {
    function objective_of_visit_text($value) {
        $tbl = [
            1 => 'エンゲージリング（ご婚約指輪）を検討',
            2 => 'マリッジリング（ご結婚指輪）をご検討',
            3 => 'ファインジュエリーをご検討',
            4 => '商品のお受け取りや修理などをご検討',
        ];
        if ($value >= 1 && $value <= 4) {
            return $tbl[$value];
        }
        return "";
    }
}
?>
