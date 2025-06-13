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
      font-family: "Courier New", Courier, monospace; /* 等寬字體 */
      display: inline-block;
      text-align: left;
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

    // 計算式與結果
    $line1 = "24 時間 × 60 分 × 60 秒";
    $line2 = "   = $result 秒"; // 對齊到 24 下方

    echo "<div class='result'>";
    echo "計算式は：<br>";
    echo "<pre>$line1\n$line2</pre>";
    echo "</div>";
  ?>

</body>
</html>
