<?php

/*
A PHP function to reverse elements in an array by Waseem Issa
*/

function reverse($arr){
    $length = count($arr);
    $rev = [];

    for ($i = 0; $i< $length; $i++){
        array_push($rev, array_pop($arr)); //adds to the array $rev the element it pops from $arr
    }

    return $rev;


}

//Driver Code
$old  = array(5,8,20,7,4,1,3);
$new = reverse($old);

foreach ($new as $item)
echo $item."\n";

?>