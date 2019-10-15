<?php

require "dadosConn.php";
require "fakeBD.php";




class ConexaBD{

	use dadosbd; // Faz o uso do traits, caso participem do mesmo include


		public function __construct(){
	$this->dadosbd(); // usa a função diretamente sem precisar de uma nova instância da classe
		$app = new fakeBD($this->banco, $this->host, $this->usuario, $this->senha);

	}
}


$app = new ConexaBD;


?>