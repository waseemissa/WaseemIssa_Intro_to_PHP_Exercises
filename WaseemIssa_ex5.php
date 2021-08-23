<?php

/*
A PHP script to put even and odd elements of array in two separate arrays by Waseem Issa
*/

$arr  = array(5,8,20,7,4,1,3);
$even = array();
$odd = array();

for ($i = 0; $i< count($arr); $i++){
    if ($arr[$i]%2==0)
    array_push($even,$arr[$i]);
    else
    array_push($odd, $arr[$i]);

}
echo nl2br("The even numbers are: \n");
foreach ($even as $e)
echo $e."\n";


echo nl2br("\nThe odd numbers are: \n");
foreach($odd as $o)
echo $o."\n";



?>