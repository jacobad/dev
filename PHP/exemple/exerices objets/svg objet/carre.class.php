
<?php /*

class Carre extends Shape{

    private $width;
    private $height;	


    public function __construct($x, $y, $width, $height, $fill, $opacity)
	{
    	parent::__construct($x, $y, $fill, $opacity);
   	    $this->width = $width;
		$this->height = $height ;
  
	}
	    public function getPosition() {
		return [
			'x'=> $this->x,
			'y' => $this->y
		];
	}

	public function getSize() {

		return [
			'width' => $this->width,
			'height' => $this->height
		];
	}
}
*/

class Carre extends Rectangle {
	
    public function __construct($x, $y, $width, $fill, $opacity)
	{	
        parent::__construct($x, $y, $width, $width, $fill, $opacity);	
		
	}
    
    
}

?>