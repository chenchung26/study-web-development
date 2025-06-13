<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>sample9</title>
</head>


<body>

  <?php
    if (isset($_POST['name']) && $_POST['name'] !== '') {
        $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
        echo "<h2 style='color:blake;'>送信された値：{$name}</h2>";
    }
  ?>

  <form action="sample9.php" method="post" style="background:white; padding:20px; display:inline-block;">
    名前：<input type="text" name="name">
    <input type="submit" value="送信">
  </form>

</body>
</html>
