<?php
class Program {
    private $rectangle;
    private $carre;
    private $circle;
    private $elispe;
    private $triangle;
    
    public function __construct(Rectangle $rectangle,Carre $carre, Circle $circle, Elispe $elispe,Triangle $Triangle) {
    
        $this->rectangle = $rectangle;
        $this ->carre = $carre;
        $this ->circle = $circle;
        $this ->elispe = $elispe;
        $this->triangle= $riangle;
    
    }

    public function drawRectangle() {
        $size = $this->rectangle->getSize(); 
        $position = $this->rectangle->getPosition();
        $style = $this->rectangle->getStyle();
    
        return '<rect x="'.$position['x'].'" y="'.$position['y'].'" width="'.$size['width'].'" height="'.$size['height'].'" fill="'.$style['fill'].'" opacity="'.$style['opacity'].'"></rect>';
    }
        public function drawCarre() {
        $size = $this->carre->getSize();
        $position = $this->carre->getPosition();
        $style = $this->carre->getStyle();
        
        
        return '<rect x="'.$position['x'].'" y="'.$position['y'].'" width="'.$size['width'].'" height="'.$size['height'].'" fill="'.$style['fill'].'" opacity="'.$style['opacity'].'"></rect>';
    }
    
    public function drawCircle() {

        $size = $this->circle->getSize();
        $position = $this->circle->getPosition();
        $style = $this->circle->getStyle();

        return '<circle cx="'.$position['x'].'" cy="'.$position['y'].'" r="'.$size.'" fill="'.$style['fill'].'" opacity="'.$style['opacity'].'"></circle>';
    }

    public function drawElipse() {
        $rx = $this->elipse->getSize();
        $ry = $this->elipse->getEllipseSize();
        $position = $this->elipse->getPosition();
        $style = $this->elipse->getStyle();

        return '<elipse cx="'.$position['x'].'" cy="'.$position['y'].'" rx="'.$rx.'" ry="'.$ry.'" fill="'.$style['fill'].'" opacity="'.$style['opacity'].'"></elipse>';
    
   }
   public function drawTriangle() {
        $points = $this->triangle->getPosition();
        $style = $this->triangle->getStyle();
            
        return '<polygon points="'.$points[0].', '.$points[1].', '.$points[2].'" fill="'.$style['fill'].'" opacity="'.$style['opacity'].'"></polygon>';
   
   }
   public function drawAll() {
      $result = [];
      array_push( $result, $this->drawRectangle() );
      array_push( $result, $this->drawCarre() );
      array_push( $result, $this->drawCircle() );
      array_push( $result, $this->drawTriangle() );
      array_push( $result, $this->drawEllipse() );
      
      return $result;
   }
   
}


?>