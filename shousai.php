<?php

require_once('config.php');
require_once('functions.php');

$no=$_GET['no'];


$dbh =connectDatabase();


$sql ="select *from shikanavi where no=:no";


$stmt=$dbh->prepare($sql);

$stmt->bindParam(":no" ,$no);

$stmt->execute();


$row=$stmt->fetchAll();

?>

<!DOCTYPE html>
<html>
<lang type="ja">
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>歯科求人詳細</title>
  </head>
  <body>
  <?php require_once('header.php');?>

    <?php foreach($row as $shika):?>
      <img src="<?php echo $shika['no'];?>.jpeg"><br><be>
      <?php echo $shika['name'].'<br>';?>
      <?php echo $shika['title'].'<br>';?>
      <?php echo $shika['apeal'].'<br>';?>
      <?php echo $shika['adress'].'<br>';?>
      <?php echo $shika['access'].'<br>';?>
      <?php echo $shika['time'].'<br>';?>
     <?php echo $shika['motometeru'].'<br>';?>
     <?php echo $shika['kyuuyo'].'<br>';?>
     <?php echo $shika['taiguu'].'<br>';?>
     <?php echo $shika['kyuuzitsu'].'<br>';?>
     <?php echo $shika['kyuuka'].'<br>';?>
     <?php echo $shika['ouboyouken'].'<br>';?>

<?php endforeach ?>
 <form action="oubo.php" method="post">
     <input type="hidden" name="name" value="<?php echo $shika['name'];?>">
     <input class="button" type="submit" value="応募する">
   </form>
<?php require_once('footer.php');?>

  </body>
  </html>