<?php

class trataDados{
	
	public function printJSON($json){
		
		echo "{";
			foreach ($json as $key => $value) {
				echo '"'."$key".'":'.'"'."$value".'",';
			}
		echo '"object":,"end"'."}";

		

	}
}

?>