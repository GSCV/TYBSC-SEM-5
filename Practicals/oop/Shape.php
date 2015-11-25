<?php
abstract class Shape
{
	abstract protected function getArea();
}
interface ColorObject
{
	public function setColor( $color );
	public function getColor();
}
class Square extends Shape
{
	protected $length ;

	function __construct()
	{
		$this->length = 0;
	}
	function setLength( $length )
	{
		$this->length = $length;
	}
	function getLength()
	{
		return $this->length;
	}
	function getArea()
	{
		return pow($this->length, 2);
	}
}
class Rectangle extends Square
{
	private $width ;

	function __construct()
	{
		parent::__construct();
		$this->width = 0;
	}
	function setArea( $length, $width )
	{
		Square::setLength($length);
		$this->width = $width;
	}
	function setLength( $length )
	{
		Square::setLength($length);
	}
	function getLength()
	{
		return Square::getLength();
	}
	function setWidth( $width )
	{
		$this->width = $width ;
	}
	function getWidth()
	{
		return $this->width;	
	}
	function getArea()
	{
		return (Square::getLength() * $this->width);
	}
}

class Circle extends Shape implements ColorObject
{
	private $radius ;
	const pi = 3.1415 ;
	private $color ;

	function __construct( $r )
	{
		$this->radius = $r ;	
	}
	function setRadius( $r )
	{
		$this->radius = $r ;		
	}
	function getRadius()
	{
		return $this->radius;
	}
	function getArea()
	{
		return ( Circle::pi * pow($this->getRadius(), 2));
	}
	function setColor( $color )
	{
		$this->color = $color ;
	}
	function getColor()
	{
		return $this->color;
	}
}
?>