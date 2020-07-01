<?php

class NightsWatch implements IFighter {
	private $fighters;

	public function recruit($fighter) {
		if ($fighter instanceof IFighter)
			$this->fighters[] = $fighter;
	}

	function fight() {
		foreach ($this->fighters as $fighter) {
			$fighter->fight();
		}
	}
}
?>