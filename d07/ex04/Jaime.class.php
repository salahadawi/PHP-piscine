<?php

class Jaime {
	public function sleepWith($person)
	{
		if ($person instanceof Tyrion)
			print("Not even if i'm drunk !\n");
		if ($person instanceof Sansa)
			print("Let's do this.\n");
		if ($person instanceof Cersei)
			print("With pleasure, but only in a tower in Winterfell, then.\n");
	}

}

?>