<?php

require 'vendor/autoload.php';
require 'config.php';

$modulo = Url::getURL(0);
$page404 = APPATH."404.php";

if ($modulo == null)
   $modulo = "welcome";

if (file_exists( APPATH . $modulo . ".php"))
   require APPATH . $modulo . ".php";
else
   require $page404;

/* URLs disponíveis

modulo1/
modulo2/
passagemDeParametros/parametro/sei-la/alguma_coisa/25/quase-nada/

*/

?>


