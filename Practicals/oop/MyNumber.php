<?php
/**
* 
*/
class MyNumber
{
	private $no ;

	function __construct()
	{
		$this->no = 12345;
	}
	public function setNumber( $pn )
	{
		$this->no = $pn ;
	}
	public function getNumber()
	{
		return $this->no ;
	}
	public function ReverseNo( $pn )
	{
		$n = $pn ;
		$rev = 0;
		$rem = 0;
		while ( $n > 0) 
		{
			$rem = $n % 10 ;
			$rev = ( $rev * 10 ) + $rem ;
			$n = ($n - $rem) / 10;
		}
		return $rev ;
	}
	public function SumOfDigits( $pn )
	{
		$n = $pn ;
		$rem = 0;
		$sod = 0;
		while ( $n > 0) 
		{
			$rem = $n % 10 ;
			$sod = $sod + $rem ;
			$n = ($n - $rem) / 10;
		}
		return $sod ;
	}
	public function IsPalindrom( $pn )
	{
		$n = $pn ;
		$rn = $this->ReverseNo( $n );
		if( $rn == $n )
			return "Yes";
		else
			return "No";
	}
	public function IsArmstrong( $pn )
	{
		$n = $pn ;
		$rem = 0;
		$soc = 0;
		while ( $n > 0) 
		{
			$rem = $n % 10 ;
			$soc = $soc + pow( $rem, 3 ) ;
			$n = ($n - $rem) / 10;
		}
		if ( $soc == $pn )
			return "Yes";
		else
			return "No";
	}
}
?>