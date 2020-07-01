<?php

class Tyrion {
	public function sleepWith($person)
	{
		if ($person instanceof Jaime)
			print("Not even if i'm drunk !\n");
		if ($person instanceof Sansa)
			print("Let's do this.\n");
			if ($person instanceof Cersei)
			print("Not even if i'm drunk !\n");
	}
}

?>