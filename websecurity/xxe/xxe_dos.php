<?php
$doc = new DOMDocument();

libxml_disable_entity_loader(false);

$doc->load($_FILES['dos']['tmp_name']);
$item = $doc->getElementsByTagName('items')->item(0)->textContent;                          
?>
<body>
以下の内容を受信しました<br>
item: <?php echo htmlspecialchars($item); ?><br>

<pre>注意：
どのような処理系でも無理のないループ回数に止めています。
ソースのコメントアウトを順に外していくと、膨大な回数の
ループが回り、お使いのコンピュータの動作が不安定になります。

改変、実行はご自身の責任において実施してください。</pre>

</body>