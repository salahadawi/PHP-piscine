<?php

class Vertex {
	static $verbose = false;
	private $_x;
	private $_y;
	private $_z;
	private $_w;
	private $_color;

    public function __construct(array $vectors) {
		$this->_x = $vectors['x'];
		$this->_y = $vectors['y'];
		$this->_z = $vectors['z'];
		if (isset($vectors['w']))
			$this->_w = $vectors['w'];
		if (isset($vectors['color']) && $vectors['color'] instanceof Color)
			$this->_color = $vectors['color'];
		else
			$this->_color = new Color(array('red' => 255, 'green' => 255, 'blue' => 255));
		if (Self::$verbose)
			printf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) ) constructed\n",
			$this->_x, $this->_y, $this->_z, $this->_w,
			$this->_color->red, $this->_color->green, $this->_color->blue);
	}

	public function __destruct()
	{
		if (Self::$verbose)
		printf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) ) destructed\n",
		$this->_x, $this->_y, $this->_z, $this->_w,
		$this->_color->red, $this->_color->green, $this->_color->blue);
	}

	public function __toString()
	{
		if (Self::$verbose)
			Return sprintf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) )",
			$this->_x, $this->_y, $this->_z, $this->_w,
			$this->_color->red, $this->_color->green, $this->_color->blue);
		Return sprintf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f )",
			$this->_x, $this->_y, $this->_z, $this->_w);
	}

	public static function doc()
	{
		$file = file_get_contents("Vertex.doc.txt");
		echo "\n".$file;
	}

	public function getX()
	{
		return $this->_x;
	}

	public function setX($new_x)
	{
		$this->_x = $new_x;
	}

	public function getY()
	{
		return $this->_y;
	}

	public function setY($new_y)
	{
		$this->_y = $new_y;
	}

	public function getZ()
	{
		return $this->_z;
	}

	public function setZ($new_z)
	{
		$this->_z = $new_z;
	}

	public function getW()
	{
		return $this->_w;
	}

	public function setW($new_w)
	{
		$this->_w = $new_w;
	}

	public function getColor()
	{
		return $this->_color;
	}

	public function setColor($new_color)
	{
		$this->_color = $new_color;
	}
}

?>