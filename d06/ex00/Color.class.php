<?php

class Color {
	static $verbose = false;
	public $red;
	public $green;
	public $blue;
   
    public function __construct(array $color) {
		if (isset($color['rgb']))
		{
			$color['rgb'] = intval($color['rgb']);
			$this->red = $color['rgb'] / 256 / 256 % 256;
			$this->green = $color['rgb'] / 256 % 256;
			$this->blue = $color['rgb'] % 256;
		}
		if (isset($color['red']) && isset($color['green']) && isset($color['blue']))
		{
			$this->red = intval($color['red']);
			$this->green = intval($color['green']);
			$this->blue = intval($color['blue']);
		}
		if (Self::$verbose)
			printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green, $this->blue);
	}

	public function __destruct()
	{
		if (Self::$verbose)
			printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n", $this->red, $this->green, $this->blue);
	}

	public function __toString()
	{
		Return sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue);
	}

	public static function doc()
	{
		$file = file_get_contents("Color.doc.txt");
		echo "\n".$file;
	}

	public function add($Color)
	{
		return (new Color(array("red" => $this->red + $Color->red,
		"green" => $this->green + $Color->green,
		"blue" => $this->blue + $Color->blue)));
	}

	public function sub($Color)
	{
		return (new Color(array("red" => $this->red - $Color->red,
		"green" => $this->green - $Color->green,
		"blue" => $this->blue - $Color->blue)));
	}

	public function mult($num)
	{
		return (new Color(array("red" => $this->red * $num,
		"green" => $this->green * $num,
		"blue" => $this->blue * $num)));
	}
}

?>