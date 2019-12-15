<?php
setcookie('email', 'sample@example.com', time() + (60 * 60 * 24 * 30));
?>
<html>
<body>
<h1>COOKIEの練習</h1>
<p><a href="cookie_check.php">次のページへ</a></p>
<p><a href="cookie_delete.php">クッキーの削除</a></p>
<p><a href="index.html">戻る</a></p>
</body>
</html>