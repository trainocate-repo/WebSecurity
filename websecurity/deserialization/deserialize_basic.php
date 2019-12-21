<?php

	class TestClass {
		// 本来処理したいクラス
	}

	class SerializeSample {
	  function __construct() {
	    echo "__construct()が実行されました";
	  }
	  function __destruct() {
	    echo "__destruct()が実行されました";
	  }
	}

	$test_seri = $_POST["testString"];
	$test_obj = unserialize($test_seri);

?>