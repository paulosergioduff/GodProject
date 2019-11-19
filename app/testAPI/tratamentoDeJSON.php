<?php

$json = '{"nome":"Paulo","idade":35,"peso":95,"tamanho":1.75,"cor":"negro"}';
$compara = '{"nome":"Paulo","idade":"35","peso":"95","tamanho":"1.75","cor":"negro"}';
$json = json_decode($json);

/*
echo "{";
foreach ($json as $key => $value) {
	echo '"'."$key".'":'.'"'."$value".'",';
}
echo '"object":,"end"'."}";*/


//echo "<br>$compara";



$tratamento = new trataDados;
$tratamento->printJSON($json);


?>