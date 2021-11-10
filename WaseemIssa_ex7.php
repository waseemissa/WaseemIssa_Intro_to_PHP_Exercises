<?php

/*
A PHP script to get the index of the highest value in an associative array by Waseem Issa
*/

$index = "";
$highest = 0;

$grades = ["CSCI250" => 60, "CSIT320" => 81, "ENGL201" => 100, "CSCI440" => 70, "ENGL251" => 91, "CSCI382" => 93];

foreach ($grades as $i => $item)
// To find the highest index and change the values of $index and $highest
    if ($item > $highest){
        $index = $i;
        $highest = $item;
    }

echo "The index of the highest value is: ".$index;

?>