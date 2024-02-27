<?php
$str= "This";
echo $str. "<br>";
$lenn=strlen($str);
echo "The Lenght of this String is: " . $lenn . ". Thank you <br>";   
echo "The Number of Word in this String is: " . str_word_count($str) . ". Thank you <br>"; 
echo "The Reverse of this Number is: " . strrev($str) . ". Thank you <br>";
echo "The Search for is in this String is : " . strpos($str, "is") . ". Thank you <br>";  
echo "The Replaced String is : " . str_replace("is" , "at" , $str) . ". Thank you";  



?>