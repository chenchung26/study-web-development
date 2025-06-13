<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>1日が何秒か計算</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #eef;
      text-align: center;
      padding: 50px;
    }
    h1 {
      color: #333;
    }
    .result {
      font-size: 1.5em;
      margin-top: 20px;
    }
  </style>
</head>
<body>

  <h1>1日って何秒？</h1>

  <?php
    $hours = 24;
    $minutes = 60;
    $seconds = 60;
    $result = $hours * $minutes * $seconds;
    $expression = "$hours 時間 × $minutes 分 × $seconds 秒";

    echo "<div class='result'>";
    echo "計算式は：$expression<br>";
    echo "= $result 秒";
    echo "</div>";
  ?>

</body>
</html>
