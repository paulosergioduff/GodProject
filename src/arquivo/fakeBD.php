<?php 


class fakeBD{
	private $banco;
	private $host;
	private $user;
	private $senha;

	private function validaDados($original, $entrada){
		if($original != $entrada){
			echo 'falha na conexão com banco de dados<br>';
		}
	}

	public function __construct($banco, $host, $user, $senha){
		//$this->banco = 'banco' ; $this->host = 'localhost' ;$this->user = 'root'; $this->senha = 'senha';
		$numValores = [$banco, $host, $user, $senha];
		$numCampos  = ["banco", "localhost", "root", "root"]; // informações do banco simulado

		$controle = count($numValores);
		$controleCampos = count($numCampos);

			for ($i=0; $i < $controle; $i++) { 
				echo $numCampos[$i].": ".$numValores[$i]."<br>";
				$this->validaDados($numCampos[$i], $numValores[$i]);

			}
			
		
	}
}




?>