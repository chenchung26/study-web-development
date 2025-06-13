<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>sample8</title>
</head>


<body>

  <?php
    if (isset(($_POST['name']))) {
        echo '送信された値：' . $_POST['name'];
    }
  ?>

  <form action="sample8.php" method="post" style="background:white; padding:20px; display:inline-block;">
    名前：<input type="text" name="name">
    <input type="submit" value="送信">
  </form>

</body>

</html>
