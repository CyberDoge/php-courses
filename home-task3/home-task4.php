<?php
function decimalToBinaryInteger(int $decimalInt)
{
    $binaryInt = '';
    do
     {
      $binaryInt = strval($decimalInt % 2) . $binaryInt;
      $decimalInt = (int)($decimalInt / 2);
     } while ($decimalInt != 0);
   
    return($binaryInt);
}

function binaryToDecimalInteger($binInt) 
{ 
    $num = $binInt; 
    $dec_value = 0; 
    
    $base = 1; 
      
    $len = strlen($num); 
    for ($i = $len - 1; $i >= 0; $i--) 
    { 
        if ($num[$i] == '1')      
            $dec_value += $base; 
        $base = $base * 2; 
    } 
      
    return $dec_value; 
} 

$randomInt = rand();
echo decbin($randomInt);
echo "\n";
$bin = decimalToBinaryInteger($randomInt);
echo $bin;
echo "\n------\n";
echo $randomInt;
echo "\n";
echo binaryToDecimalInteger($bin);