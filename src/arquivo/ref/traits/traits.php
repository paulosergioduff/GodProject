<?php

trait log{	// Cria um pedaço de códigos que serão usadas em várias classes
	public function log(){
		echo "Log chamado";
	}
}




class carrinho{

	use log; // Faz o uso do traits, caso participem do mesmo include

		public function __construct(){
	$this->log(); // usa a função diretamente sem precisar de uma nova instância da classe
	}
}


$app = new carrinho;


?>