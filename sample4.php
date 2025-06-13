<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>1to365</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 16px;
            white-space: pre-wrap;
        }
    </style>
</head>
<body>

<?php
for ($i = 1; $i <= 365; $i++) {
    echo $i . " ";
    if ($i % 20 == 0) {
        echo "<br>";
    }
}
?>

</body>
</html>
