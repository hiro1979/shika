<?php

require_once('config.php');
require_once('functions.php');

$dbh =connectDatabase();

$sql="select * from shikanavi where basho =13";

$stmt = $dbh->prepare($sql);
$stmt ->execute();


$row =$stmt->fetchall();

?>


<!DOCTYPE html>
<lang type="ja">
  <head>
<meta charset="utf-8">
  <title>東京都の歯科衛生士・歯科助手の求人</title>
  <link type="text/css" rel="stylesheet" href="style.css">
  </head>
  <body>
  <?php require_once('header.php'); ?>

    <h2>東京都の歯科衛生士・歯科助手の求人</h2>

<?php
foreach($row as $shika):?>
<img src="<?php echo $shika['no'];?>.jpeg"  widht="200px" height="200px"><br><br>

<?php echo $shika['name'].'<br>';?>
<?php echo $shika['title'].'<br>';?>
<?php echo $shika['adress'].'<br>';?>
<a href="shousai.php?no=<?php  echo$shika['no']; ?>"> <?php echo '詳しく見る<br>';?></a><br><br>
<?php endforeach?>
<?php require_once('footer.php');?>

  </body>
  </html>