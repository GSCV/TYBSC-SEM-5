<?php
include("MyNumber.php");

$no = new MyNumber();
$no->setNumber(153);
echo "Original Number : " . $no->getNumber() . "<br/>" ;
echo "Reverse Number : " . $no->ReverseNo($no->getNumber()) . "<br/>";
echo "Sum of Digit : " . $no->SumOfDigits($no->getNumber()) . "<br/>";
echo "Palindrom Number : " . $no->IsPalindrom($no->getNumber()) . "<br/>" ;
echo "Armstrong Number : " .$no->IsArmstrong($no->getNumber()) . "<br/>";
?>