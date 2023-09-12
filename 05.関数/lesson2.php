<?php
// 以下をそれぞれ表示してください。（すべて改行を行って出力すること)
// 現在時刻を自動的に取得するPHPの関数があるので調べて実装してみて下さい。
// 実行するとその都度現在の日本の日時に合わせて出力されるされるようになればOKです。
// 日時がおかしい場合、PHPのタイムゾーン設定を確認して下さい。


// ・現在日時（xxxx年xx月xx日（x曜日））
// ・現在日時から３日後（yyyy年mm月dd日 H時i分s秒）
// ・現在日時から１２時間前（yyyy年mm月dd日 H時i分s秒）
// ・2020年元旦から現在までの経過日数 (ddd日)
$week = array( "日", "月", "火", "水", "木", "金", "土" );
// echo $week[date("w")];

echo date("Y年m月d日({$week[date("w")]}曜日)").'<br/>';

echo date("Y年m月d日 H時i分s秒",strtotime("+3 day")).'<br/>';

echo date("Y年m月d日 H時i分s秒",strtotime("-12 hour")).'<br/>';

// [PHP]日付の差を計算する
function day_diff($day11, $day2) {
    $timestamp1 = strtotime($day11);
    $timestamp2 = strtotime($day2);
 
    $seconddiff = abs($timestamp2 - $timestamp1); 
    $daydiff = $seconddiff / (60 * 60 * 24);
 
    return $daydiff;
 
}
 
// 何日経過したか
$day = day_diff('2020-01-01', date('Y-m-d'));
echo $day."日".'<br>';


?>