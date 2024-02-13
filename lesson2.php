<?php
// 以下をそれぞれ表示してください。（すべて改行を行って出力すること)
// 現在時刻を自動的に取得するPHPの関数があるので調べて実装してみて下さい。
// 実行するとその都度現在の日本の日時に合わせて出力されるされるようになればOKです。
// 日時がおかしい場合、PHPのタイムゾーン設定を確認して下さい。


// ・現在日時（xxxx年xx月xx日（x曜日））
// ・現在日時から３日後（yyyy年mm月dd日 H時i分s秒）
// ・現在日時から１２時間前（yyyy年mm月dd日 H時i分s秒）
// ・2020年元旦から現在までの経過日数 (ddd日)

$now = date("Y年m月d日");                                                    //今日の日時  
$threedays_after = date("Y年m月d日 H時i分s秒", strtotime("+3 day"));          //3日前の日時
$half_hour_before = date("Y年m月d日 H時i分s秒", strtotime("-12 hours"));     //12時間前の日時

$week = ['日','月','火','水','木','金','土','日'];                      //曜日は数字で取得されるため
$now_week = "(" . $week[date("w")] . "曜日)";                           //配列を使って変数に代入

$today = new DateTime('now');           //DateTimeクラスの使用 object(DateTime)#1 (3) { ["date"]=> string(26) "2024-02-09 21:19:54.149865" ["timezone_type"]=> int(3) ["timezone"]=> string(10) "Asia/Tokyo" }
$day = new DateTime('2020-01-01');      //                    object(DateTime)#2 (3) { ["date"]=> string(26) "2020-01-01 00:00:00.000000" ["timezone_type"]=> int(3) ["timezone"]=> string(10) "Asia/Tokyo" }
$diff = $day -> diff($today); //object(DateInterval)#3 (10) { ["y"]=> int(4) ["m"]=> int(1) ["d"]=> int(8) ["h"]=> int(21) ["i"]=> int(24) ["s"]=> int(13) ["f"]=> float(0.436488) ["invert"]=> int(0) ["days"]=> int(1500) ["from_string"]=> bool(false) }      

echo "・現在日時 (" . $now . $now_week . " )";
echo "<br/>";

echo "・現在日時から3日後 (" . $threedays_after . ")";
echo "<br />";

echo "・現在日時から12時間前 (" . $half_hour_before . ")";
echo "<br />";

echo "・2020年元旦から現在までの経過日数 (" . $diff->days . "日)";
