<?php

include 'shape.class.php';
include 'rectangle.class.php';
include 'carre.class.php';
include 'circle.class.php';
include 'elispe.class.php';
include 'triangle.class.php';

include 'progobj.class.php';


$rectangle = new Rectangle('50', '20', '200', '100', 'firebrick', '1');
$carre = new Carre('400', '200', '100', 'yellow', '0.5');
$circle = new Circle('300', '250', '180', 'cyan', '0.33');
$elispe = new Elispe('600', '250', '40', '80', 'blue', '0.75');
$triangle = new Triangle('60 60', '200 250', '60 250', 'purple', '0.75');
$prog = new Program($rectangle, $carre, $circle, $elispe,$triangle);


$rec = $prog->drawRectangle();
$carre = $prog->drawCarre();
$circle = $prog->drawCircle();
$elispe = $elispe->drawElispe();
$triangle = $triangle->drawtriangle();

include 'objet.phtml';

?>