<!DOCTYPE html>
<html lang="ja">

 <head>
   <title>PHP課題_005</title>
   <meta charset="UTF-8">
 </head>

 <body>
   <p>
      <?php
       //変数の代入
        $score1 = 80;
        $score2 = 60;
        $score3 = 55;
        $score4 = 40;
        $score5 = 100;
        $score6 = 25;
        $score7 = 80;
        $score8 = 95;
        $score9 = 30;
        $score10 = 60;
        //変数を合計し出力する
        $totle_score = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
        echo "合計＝" . $totle_score;

        echo '<br>';

        //変数の平均値の計算出力
        $mean_totle = $totle_score / 10;
        echo "平均値＝" . $mean_totle;
      ?>
    </p>
 </body>
</html>
  