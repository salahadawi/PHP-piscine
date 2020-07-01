<?php

class UnholyFactory {
	private $fighters = array();

	public function absorb($fighter) {
		if ($fighter instanceof Fighter)
		{
			if (array_key_exists($fighter->name, $this->fighters))
				printf("(Factory already absorbed a fighter of type %s)\n", $fighter->name);
			else
			{
				printf("(Factory absorbed a fighter of type %s)\n", $fighter->name);
				$this->fighters[$fighter->name] = $fighter;
			}
		}
		else
			printf("(Factory can't absorb this, it's not a fighter)\n");
	}

	public function fabricate($name) {
		if (array_key_exists($name, $this->fighters))
		{
			printf("(Factory fabricates a fighter of type %s)\n", $name);
			return (clone $this->fighters[$name]);
		}
		else
		{
			printf("(Factory hasn't absorbed any fighter of type %s)\n", $name);
			return (NULL);
		}
	}
}

?>