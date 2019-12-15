<html>
	<head>
		<meta charset="utf-8"/>
		<title>安全ではないデシリアライゼーション</title></head>
	<body>
		<p>シリアライズ　テスト「SerializeSample」</p>

		<?php
			class SerializeSample {

			}

			$SerializeSample_str = "SerializeSample";
			echo serialize("SerializeSample");

			echo "<br/>";

			$SerializeSample_obj = new SerializeSample();
			echo serialize($SerializeSample_obj);
		?>
	</body>
</html>
