<?php
class Circle extends Shape {
	private $r;

	public function __construct($x, $y, $r, $fill, $opacity)
	{
        parent::__construct($x, $y, $fill, $opacity);
		
		$this->r = $r;
		
	}

	public function getSize() {
    
		return $this->r;
        
	}

}

?>
