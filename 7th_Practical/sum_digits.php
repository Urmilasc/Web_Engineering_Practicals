<?php 
$n = 323; 
$sum = 0; 

while ($n > 0) { 
    $r = $n % 10;  // Extract the last digit
    $sum += $r;    // Add it to sum
    $n = intval($n / 10); // Explicitly convert to integer to avoid float issues
} 

echo "Sum of individual digits is: $sum"; 
?>
