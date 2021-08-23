<?php

/*
A PHP script to find maximum and minimum elements in an array by Waseem Issa
*/

$numbers  = [5,8,20,7,4,1,3];
sort($numbers);

//Whenever an array is sorted, the minimun is the first element and the maximum is the last element


echo "The minimum in the array is: ".$numbers[0];
echo nl2br("\nThe maximum in the array is ".$numbers[count($numbers)-1]);






?>