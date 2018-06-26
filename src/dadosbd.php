<?php 

trait dadosbd{	// Cria um pedaço de códigos que serão usadas em várias classes
	public function dadosbd(){
		$this->banco = 'banco';
		$this->host = 'localhost';
		$this->usuario = 'rootff';
		$this->senha  = 'root';
	}
}


?>