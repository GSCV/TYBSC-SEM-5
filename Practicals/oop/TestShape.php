<?php
	include("Shape.php");
	$s = new Square();
	$s->setLength(5);
	echo "Area of Square : " . $s->getArea() . "<br/>";

	$r = new Rectangle();
	$r->setArea(5,7);
	echo "Area of Rectangle : " . $r->getArea()."<br/>";

	$c = new Circle(5);
	echo "Area of Circle : " .$c->getArea() ."<br/>";

	$c = new Circle(3);
	$c->setColor("Red");
	echo "Color of an Object : " . $c->getColor() ."<br/>";
	echo "Area of Circle : " .$c->getArea() ."<br/>";
?>