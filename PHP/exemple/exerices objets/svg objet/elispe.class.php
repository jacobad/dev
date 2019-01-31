<?php
class Elipse extends Circle {

	private $ry;
    
	public function __construct($x, $y, $rx, $ry, $fill, $opacity)
	{
		parent::__construct($x, $y, $rx, $fill, $opacity);
		$this->ry = $ry;
	}


	public function getElipseSize() {
		return  $this->ry;
	}


}

?>