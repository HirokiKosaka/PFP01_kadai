<?php
// ファイルを読み込む
$blog = file_get_contents('data/blog.txt');

// 読み込んだものをブラウザに表示する
echo nl2br($blog);

?>