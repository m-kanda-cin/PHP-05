<?php
// 引数として数値を渡すと3倍にして返す関数を作ってください。

/**
 * 引数を3倍にして返す関数
 * 
 * @param  int number 入力する数値
 * @return int        入力値を３倍した値 
 */

 function convertThreeTimes($number)
 {
    return $number * 3;
 }



echo convertThreeTimes(5);
// 15