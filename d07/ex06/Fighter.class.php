<?php

abstract class Fighter {
	public $name;
	public function __construct($new_name) {
		$this->name = $new_name;
	}
	abstract public function fight($type);
}

?>