<?php
// ＜アルゴリズムの注意点＞
// アルゴリズムではこれまでのように調べる力ではなく物事を論理的に考える力が必要です。
// 検索して答えを探して解いても考える力には繋がりません。
// まずは検索に頼らずに自分で処理手順を考えてみましょう。


// 以下は自動販売機のお釣りを計算するプログラムです。
// 150円のお茶を購入した際のお釣りを計算して表示してください。
// 計算内容は関数に記述し、関数を呼び出して結果表示すること
// $yen と $product の金額を変更して計算が合っているか検証を行うこと

// 表示例1）
// 10000円札で購入した場合、
// 10000円札x0枚、5000円札x1枚、1000円札x4枚、500円玉x1枚、100円玉x3枚、50円玉x1枚、10円玉x0枚、5円玉x0枚、1円玉x0枚

// 表示例2）
// 100円玉で購入した場合、
// 50円足りません。

$yen = 10000;   // 購入金額
$product = 248; // 商品金額

function calc($yen, $product) {
    // この関数内に処理を記述
    if($yen > 1000)
    {
        echo $yen . "円札で購入した場合、<br />";
    } else {
        echo $yen . "円玉で購入した場合、<br />";
    }


    if($yen < $product)
    {
        $diff = $product - $yen;
        echo $diff . "円足りません。";
    }
    else if($yen == $product)
    {
        echo "丁度お預かりします。";
    }
    else
    {
        $change = $yen - $product;//9752

        if($change % 10 > 5)
        {
            $five = "5円玉x1枚、";

            $one = "1円玉x" . ($change % 10 - 5) . "枚";

        } else if($change % 10 == 5){
            $five = "5円玉x1枚、"; 

            $one = "1円玉x0枚、"; 

       } else  {
            $five = "5円玉x0枚、"; 

            $one = "1円玉x" . $change % 10 . "枚";
        }
       
        $change -= $change % 10;

        $change = $change /= 10;
              
        if($change % 10 > 5)
        {
             $fifty = "50円玉x1枚、";

             $ten = "10円玉x" .($change % 10 - 5). "枚、"; 
        
        } else if($change % 10 == 5){
             $fifty = "50円玉x1枚、"; 

             $ten = "10円玉x0枚、"; 

        } else {
            $fifty = "50円玉x0枚、"; 

            $ten = "10円玉x" . $change % 10 . "枚、"; 
        }

        $change -= $change % 10;

        $change = $change /= 10;

        if($change % 10 > 5)
        {
            $five_hundred = "500円玉x1枚、";

            $hundred = "100円玉x".($change % 10 - 5). "枚、"; 
  
        } else if($change % 10 == 5){
            $five_hundred = "500円玉x1枚、"; 

            $hundred = "100円玉x0枚、"; 

        } else {
             $five_hundred = "500円玉x0枚、"; 

             $hundred = "100円玉x" . $change % 10 . "枚、"; 
        }

        $change -= $change % 10;

        $change /= 10;

        if($change % 10 > 5)
        {
            $five_thousand = "5000円札x1枚、";

            $thousand = "1000円札x".($change % 10 - 5). "枚、"; 
  
        } else if($change % 10 == 5){
            $five_thousand = "5000円札x1枚、"; 

            $thousand = "1000円札x0枚、"; 

        } else {
             $five_thousand = "5000円札x0枚、"; 

             $thousand = "1000円札x" . $change % 10 . "枚、"; 
        }

        $change -= $change % 10;

        $change /= 10;

        $max = "10000円札x" . $change % 10 . "枚、"; 


        $output = $max . $five_thousand . $thousand . $five_hundred . $hundred . $fifty . $ten . $five . $one;

       echo $output;
                
    }

}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>お釣り</title>
</head>
<body>
    <section>
        <!-- ここに結果表示 -->
        <?php
            calc(10000,1);
        ?>
    </section>
</body>
</html>