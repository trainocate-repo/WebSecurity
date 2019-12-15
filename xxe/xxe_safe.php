<?php

# true :外部実体参照 読込不可(外部参照は一切不可) 
# false:外部実体参照 読込可
libxml_disable_entity_loader(true);

$doc = new DOMDocument();

$xmlstr = file_get_contents($_FILES['user']['tmp_name']);
$result = $doc->loadXML($xmlstr);

$name = $doc->getElementsByTagName('name')->item(0)->textContent;
$addr = $doc->getElementsByTagName('address')->item(0)->textContent;

?>
<body>
以下の内容で登録しました<br>
氏名: <?php echo htmlspecialchars($name); ?><br>
住所: <?php echo htmlspecialchars($addr); ?><br>
</body>