<?php

function searchCityTime($city_name){

    // ファイルの読み込み
    require('config/cities.php');

    foreach ($cities as $city) {
        if ($city['name'] === $city_name) {

            // 現在時刻は引数なし
            // $date_time = new DateTime();

            // 指定した国の現在時刻
            $date_time = new DateTime('', new DateTimeZone($city["time_zone"]));

            // 時と分に変換
            $time = $date_time->format('H:i');

            $city['time'] = $time;

            return $city;
        }
    }

}

// format文字
// Y：year、4桁の数字
// m：month、1桁だったら先頭0
// n：month、0埋めなし
// d：day、1桁だったら先頭0
// j：day、0埋めなし
// w：曜日、0（日曜日）〜6（木曜日）
// H：時間、00〜23
// i：分、00〜59
// s：秒、00〜59

?>