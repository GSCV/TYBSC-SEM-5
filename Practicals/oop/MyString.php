<?php
	/**
	* 
	*/
	class MyString 
	{
		private $str ;
		function __construct()
		{
			$this->str = "Hello" ;
		}
		public function setString( $s )
		{
			$this->str = $s;
		}
		public function getString()
		{
			return $this->str;
		}
		public function stringLength( $ps )
		{
			$i = 0; ;
			while( ! empty($ps[$i]) )
			{
				$i++ ;
			}
			return $i+1;
		}
		public function subString( $ps, $start, $end )
		{
			$substr = "";
			if( $start > $end )
			{
				echo "<i style=color:red> Invalid Arguments.</i> <br/>";
				return $this->str;
			}
			if( $start >= 0 && $end <= $this->stringLength($ps))
			{
				for( $i = $start-1; $i < $end; $i++ )
				{
					$substr = $substr . $this->str[$i];
				}
			}
			else
			{
				echo "<i style=color:red>Please check index Parameters.</i><br/>";
				$substr = $this->str;
			}
			return $substr;
		}
		public function WordsCount( $ps )
		{
			$i = 0;
			$words = 0;
			$len = $this->stringLength( $ps );
			for( $i = 0; $i < $len; $i++ )
				{
					if( $this->str[$i] == " ")
						$words++;
				}
			return $words+1;
		}
		public function rSpace( $ps )
		{
			$s = $ps ;
			$ns = "";
			$i = 0;
			if( $s[$i] == " ")
			{
				while($s[$i] == " ")
					$i++;
			}
			$j = 0;
			while ( ! empty( $s[$i] )) {
				$ns[$j] = $s[$i];
				$j++;
				$i++;
			}
			$h = $this->stringLength($s)-1;
			echo "H Index : " . $h;
			if( $ns[$h] == " ")
			{
				while($ns[$h] == " ")
					$h--;
			}
			$ns = $this->subString($ns, 1, $h+1);
			return $ns ;
		}
		public function VowelCount( $ps )
		{
			$s = $ps ;
			$i  = 0;
			$vowels = 0;
			while ( ! empty($s[$i]) ) {
				if( $s[$i] == "a" || $s[$i] == "e" || $s[$i] == "i" || $s[$i] == "o" || $s[$i] == "u")
					$vowels++ ;
				$i++;
			}
			return $vowels ;
		}
		public function GetWords( $ps )
		{
			$s = $this->rSpace( $ps );
			$words = array();
			$i = 0;
			$j = 0;
			$w = 0;
			while ( ! empty($s[$i]) ) 
			{
				if ($s[$i] == " ") 
				{
					$words[$w] = $this->subString( $s, $j, $i+1 );
					//echo "Words : " . $words[$w];
					$w++ ;
					$j = $i; 
				}
				$i++ ;
				if( empty($s[$i]) )
				{
					$words[$w] = $this->subString( $s, $j, $i+1 );
				}
			}
			return $words ;
		}
		public function ReverseString( $ps )
		{
			$s = $ps ;
			$rs = "";
			$len = $this->stringLength( $ps );

			for ($i=$len-1; $i >= 0 ; $i--) { 
				$rs = $rs . $s[$i]; 
			}
			return $rs ;
		}
		public function IsPalindromWords( $ps )
		{
			$words = $this->GetWords( $ps );
			$rs = "";
			foreach ($words as $w) 
			{
				echo "String Length of " . $w . " is " . $this->stringLength($w) . "<br/>";
				$rs = $this->rSpace($this->ReverseString($w));
				if( $w == $rs )
					echo "Palindrome Words : " .$w ;
			}
		}
		public function GetDigits( $ps )
		{
			$s = $ps ;
			$len = $this->stringLength( $s );
			$digits = 0;
			for( $i = 0; $i < $len; $i++ )
			{
				if( is_numeric( $s[$i]) )
				{
					$digits++ ;
				}
			}
			return $digits;
		}
	}
?>