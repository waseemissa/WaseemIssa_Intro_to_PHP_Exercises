<?php
/*
A factorial function using for loop by Waseem Issa
*/
function factorial($number){

    $fact = 1;
    for ($i = 1; $i <= $number; $i++){
        $fact*=$i;
    }

    return $fact;


}
//Driver Code
$n = 5;
echo "The factorial of ".$n." is: ".factorial($n); 

?>