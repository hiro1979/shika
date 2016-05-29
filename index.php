
<?php
// 都道府県コード => 都道府県名
$prefectures = array(
  1  => "北海道", 2  => "青森県", 3  => "岩手県", 4  => "宮城県", 5  => "秋田県",
  6  => "山形県", 7  => "福島県", 8  => "茨城県", 9  => "栃木県", 10 => "群馬県",
  11 => "埼玉県", 12 => "千葉県", 13 => "東京都", 14 => "神奈川県", 15 => "新潟県",
  16 => "富山県", 17 => "石川県", 18 => "福井県", 19 => "山梨県", 20 => "長野県",
  21 => "岐阜県", 22 => "静岡県", 23 => "愛知県", 24 => "三重県", 25 => "滋賀県",
  26 => "京都府", 27 => "大阪府", 28 => "兵庫県", 29 => "奈良県", 30 => "和歌山県",
  31 => "鳥取県", 32 => "島根県", 33 => "岡山県", 34 => "広島県", 35 => "山口県",
  36 => "徳島県", 37 => "香川県", 38 => "愛媛県", 39 => "高知県", 40 => "福岡県",
  41 => "佐賀県", 42 => "長崎県", 43 => "熊本県", 44 => "大分県", 45 => "宮崎県",
  46 => "鹿児島県",
  47 => "沖縄県",
);
?>


<!DOCTYPE html>
<html>
<lang type="ja">
  <head>
    <meta charset="utf-8">
    <title>歯科衛生士、歯科助手の求人なら歯科求人ナビ</title>
     <link type="text/css" rel="stylesheet" href="reset.css">
    <link type="text/css" rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php require_once("header.php");
    ?>

<div class="body-main">
    <ul class="kensuu">
    <li>掲載求人数　件</li>
    <li>歯科衛生士掲載求人数　件</li>
    <li>歯科助手掲載求人数　件</li>
  </ul>
    <br><br>
    <h2>都道府県で求人検索</h2>
   <div class="kensaku">
     <div class="chizu"  >
      <img src="chizu_2.jpg" widh="200px"  height="250px"></div>
     <div class="todouhu">
       <?php

       foreach($prefectures as $n=> $prefecture)
        {if($n % 10==0){
         echo '<a href="'.$n.'todouhu.php">'.$prefecture.'</a><br><br>';}
         else{echo '<a href="'.$n.'todouhu.php">'.$prefecture.'</a>&nbsp;';}
      }?>

     </div>
     </div>
    <h3>職場種類で探す</h3><br><br>
    <h3>雇用形態で探す</h3>
    <br><br>

   <h3>歯科求人転職お役立コラム</h3>
   <h3>歯科関連ニュース</h3>
<br><br><br><br>

   <?php require_once("footer.php");?>
 </div>
  </body>