<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>ouyou1</title>
</head>

<body>
  
<?php

  $today = strtotime("today");

  for ($i = 0; $i <= 365; $i++) {
    $date = strtotime("+$i day", $today);
    echo date("n/j(D)", $date) . " ";
  }

?>
</body>

</html>
