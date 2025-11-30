<?php // php02/index.php
echo "php02 / index.php OK";
?>
<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8" />
  <title>世界時計</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/sanitize.css">
</head>
<body>
  <h1>世界時計</h1>
  <form action="result.php" method="post">
    <label>
      都市を選択：
      <select name="city">
        <option value="">選択してください</option>
        <option value="Tokyo">Tokyo</option>
        <option value="New_York">New York</option>
        <option value="London">London</option>
      </select>
    </label>
    <button type="submit">時刻を表示</button>
  </form>
</body>
</html>