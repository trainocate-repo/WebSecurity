<?php
session_start();

//セッションの中身を画面表示
var_dump($_SESSION);

$profile = $_SESSION['profile'];

?>

<html>
<body>
<h1>セッションの確認</h1>
<p>こんにちは、<?php echo $profile['user_name']; ?>さん　
地域：<?php echo $profile['location']; ?></p>
<p><a href="session_delete.php">セッションを削除する</a></p>
<p><a href="session_set.php">戻る</a></p>
</body>
</html>