<?php

require 'vendor/autoload.php';

$modulo = Url::getURL(0);

if ($modulo == null)
   $modulo = "welcome";

if (file_exists("app/testAPI/" . $modulo . ".php"))
   require "app/testAPI/" . $modulo . ".php";
else
   require "app/testAPI/404.php";

/* URLs disponíveis

modulo1/
modulo2/
modulo8/parametro/sei-la/alguma_coisa/25/quase-nada/

*/
?>


