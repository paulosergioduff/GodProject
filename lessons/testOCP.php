<?php

require '../vendor/autoload.php';

use \OCP\Apelido as trocaDeNome; #colocando apelido em nome de classe
use \OCP\Exemplo as aliasClass; #explorando novo arquivo
use \newSpace\Exemplo as novidade;

$primeiraClasse = new \OCP\Apelido; #instanciada por nome de arquivo (sem a usar a extenção PHP)
$classeComApelido = new trocaDeNome();

$primeiraClasse->teste();

$classeComApelido->teste();

$segundaClasse = new aliasClass();

$segundaClasse->testeAlias();

$terceiraClasse = new novidade();
$terceiraClasse->testeAlias();

