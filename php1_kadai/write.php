<?php

$blog = $_POST;


// $title = $blog['title'];
// $postAt = $blog['postAt'];
// $category = $blog['category'];
// $content = $blog['content'];

file_put_contents('data/blog.txt', $blog, FILE_APPEND);

if ($blog['publishStatus'] === 'unpublish') {
  echo '記事がありません';
  return;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2><?php echo htmlspecialchars($blog['title'], ENT_QUOTES, 'UTF-8'); ?></h2>
  <p>投稿日:<?php echo htmlspecialchars($blog['postAt'], ENT_QUOTES, 'UTF-8'); ?></p>
  <p>カテゴリ:<?php echo htmlspecialchars($blog['category'], ENT_QUOTES, 'UTF-8'); ?></p>
  <hr>
  <p><?php echo nl2br(htmlspecialchars($blog['content'], ENT_QUOTES, 'UTF-8')); ?></p>

  <ul>
    <li><a href="read.php">確認する</a></li>
    <li><a href="form.html">戻る</a></li>
  </ul>
</body>
</html>