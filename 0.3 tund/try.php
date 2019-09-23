<?php
$userName = "Glen Gehrke";
$fullTimeNow = date("d.m.Y H:i:s");
$hourNow = date("H");
$partOfDay = "hägune aeg";
if($hourNow < 8) {
$partOfDay = "varane hommik";	
}
?>

<!DOCTYPE html>
<html lang="et">
<head>
<meta charset="utf-8">
  <title>Glen progeb</title>
  <?php
  echo $userName;
  ?>
<head/>
<body>
<?php
echo "<h1>" .$username ."koolitöö leht </h1>";
?>
  <h1>Gleni koolitöö leht</h1>
  <p>See leht on loodud koolis õppetöö raames ja ei sisalda tõsiseltvõetavat sisu!</p>
  <hr>
  <p> lehe avamise hetkel oli aeg:
  <?php
  echo $fullTimeNow;
  ?>
  .<p>
  <?php
  echo "<p>Lehe avamise hetkel oli " .$partOfDay .
  ".</p>";
  ?>
  <hr>
</body)

</html>