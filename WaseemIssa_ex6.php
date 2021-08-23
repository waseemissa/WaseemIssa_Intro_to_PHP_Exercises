<?php

/*
A function that converts binary number to decimal by Waseem Issa
*/

function binaryToDecimal($num){
$dec = 0;
$num_to_array = array();

/*Extract each digit and add it to the array 
  This gives an array that is already reversed 
  and so, we can apply the formula of binary to decimal conversion
*/
while ($num>0){
    array_push($num_to_array, $num%10);
    $num = $num/10;
}



for($i = 0; $i <count($num_to_array) ; $i++){
    $dec+= pow(2,$i)*$num_to_array[$i]; 

}


return $dec;


}
//Driver Code
$binary_number = 101101;
echo $binary_number." converted to decimal is : ".binaryToDecimal($binary_number);






?>