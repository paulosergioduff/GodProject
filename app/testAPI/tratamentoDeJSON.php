<?php

$json = '{"nome":"Paulo","idade":35,"peso":95,"tamanho":1.75,"cor":"negro"}';
$json = json_decode($json);

foreach ($json as $key => $value) {
	echo "<p>$key : $value";
}

?>