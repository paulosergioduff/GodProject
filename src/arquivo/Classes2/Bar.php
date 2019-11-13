<?php 

namespace Classes2\Foo;

class Bar2 {
	public function __toString() {
		return get_class($this);
	}
}