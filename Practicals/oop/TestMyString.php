<?php
	include("MyString.php");

	$str1 = new MyString();
	$str1->setString("Mayur110");
	echo "Original String is : " .$str1->getString() . "<br/>";
	echo "String Length : " . $str1->stringLength($str1->getString()) . "<br/>";
	echo "Sub String : " . $str1->subString($str1->getString(), 2,5) . "<br/>";
	echo "Removing Left and Right Space..... " .$str1->rSpace($str1->getString()) . "<br/>";
	echo "Total Words : " . $str1->WordsCount($str1->getString()) . "<br/>";
	echo "Total Vowels : " . $str1->VowelCount($str1->getString()) . "<br/>";
	$words = $str1->GetWords($str1->getString());
	echo "Words in String : ";
	// print_r( $words );
	echo "<ul>";
	foreach ($words as $w) {
		echo "<li>".$w ."</li>";
	}
	echo "</ul>";
	echo "Reverse String : " . $str1->ReverseString($str1->getString()) ."<br/>";
	//echo "Palindrom Words : " . $str1->IsPalindromWords($str1->getString());
	echo "No. of Digits : " . $str1->GetDigits($str1->getString());
?>