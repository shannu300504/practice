<?php
$num1=5;
$num2=10;
//Arithematic Operators
$sum = $num1+$num2;
$difference = $num1-$num2;
$product = $num1*$num2;
$quotient = $num1/$num2;
$remainder = $num1%$num2;
echo "Sum: " . $sum . "<br>";
echo "Difference: " . $difference . "<br>";
echo "Product: " . $product . "<br>";
echo "Quotient: " . $quotient . "<br>";
echo "Remainder: " . $remainder . "<br>";
// Comparison Operators
$result = ($num1 > $num2); 
var_dump($result);
echo "<br>";
// Assignment operator: =
$a = 10;
echo "Initial value of a: $a\n"; 

// Addition assignment operator: +=
$a += 5; // Equivalent to $a = $a + 5;
echo "After += 5, value of a: $a\n"; 

// Subtraction assignment operator: -=
$a -= 3; // Equivalent to $a = $a - 3;
echo "After -= 3, value of a: $a\n";

// Multiplication assignment operator: *=
$a *= 2; // Equivalent to $a = $a * 2;
echo "After *= 2, value of a: $a\n"; 

// Division assignment operator: /=
$a /= 4; // Equivalent to $a = $a / 4;
echo "After /= 4, value of a: $a\n";
$is_true = true;
$is_false = false;
$logical_and = $is_true && $is_false; // false
$logical_or = $is_true || $is_false; // true
$logical_not = !$is_true; // false

var_dump($logical_and);
echo "<br>";
var_dump($logical_or);
echo "<br>";
var_dump($logical_not);
?>



