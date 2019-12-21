<?php

class Origin {  // 本来処理するはずの何らかのクラス
}

class Attack {
  private $func;
  private $args;
  public function __construct($func, $args) {
    $this->func = $func;
    $this->args = $args;
  }
  public function __destruct() {
    call_user_func_array($this->func, $this->args);
  }
}

header('Content-Type: text/plain; charset=Shift-JIS');
$deserialized_atk = unserialize($_COOKIE['serialized_atk']);
print_r($deserialized_atk);