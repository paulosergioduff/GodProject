<?php 

namespace newSpace;

class Exemplo {
	public function __toString() {
		return get_class($this);
	}

	public function testeAlias(){
		echo "<p>.....testando classe de mesmo nome exemplo, só que em outro namespace";
	}
}