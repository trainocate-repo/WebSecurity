<?php
  $user = @$_SERVER['PHP_AUTH_USER'];
  $pass = @$_SERVER['PHP_AUTH_PW'];
  if (! $user || ! $pass) {
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Basic Authentication"');
    echo "ユーザ名とパスワードが入力されていません";
    exit;
  }
?>
<body>
認証しました<BR>
ユーザ名:<?php echo htmlspecialchars($user, ENT_QUOTES, 'UTF-8'); ?><BR>
パスワード:<?php echo htmlspecialchars($pass, ENT_QUOTES, 'UTF-8'); ?> <BR>
</body>
