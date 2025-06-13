<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>sample10</title>
</head>

<body>

  <?php
  if (isset($_FILES['photo']) && $_FILES['photo']['error'] === 0) {
      $file = $_FILES['photo'];

      $name = htmlspecialchars($file['name'], ENT_QUOTES, 'UTF-8');
      $type = htmlspecialchars($file['type'], ENT_QUOTES, 'UTF-8');
      $size = $file['size'];
      $tmpPath = $file['tmp_name'];

      $uploadDir = 'uploads/';
      $savePath = $uploadDir . $name;

      if (!is_dir($uploadDir)) {
          mkdir($uploadDir, 0777, true);
      }

      if (move_uploaded_file($tmpPath, $savePath)) {
          echo "<p>ファイル名: {$name}</p>";
          echo "<p>ファイルタイプ: {$type}</p>";
          echo "<p>ファイルサイズ: {$size} byte</p>";
          echo "<p>保存先: {$savePath}</p>";
          echo "<img src='{$savePath}' alt='アップロード画像' style='max-width:400px;'>";
      } else {
          echo "<p style='color:yellow;'>ファイルの保存に失敗しました。</p>";
      }
  }
  ?>

  <form action="sample10.php" method="post" enctype="multipart/form-data"
  
    style="background:white; padding:20px; color:black; margin-top:30px;">
    写真：<input type="file" name="photo" accept="image/*">
    <input type="submit" value="送信する">
  </form>

</body>

</html>
