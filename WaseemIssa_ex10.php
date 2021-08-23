<?php

/*
A PHP function to set union of two arrays (no duplicates) by Waseem Issa
*/

function union($arr1, $arr2){

//To create an array of the elements existing in both arrays
$arrays_intersection = array_intersect($arr1,$arr2);
//To create an array of the elements existing in the first array only
$arrays_difference1 = array_diff($arr1, $arr2);
//To create an array of the elements existing in the second array only
$arrays_difference2 = array_diff($arr2, $arr1);
//To merge the three arrays together
$result = array_merge($arrays_intersection, $arrays_difference1, $arrays_difference2);
//To sort the elements of the new array because they are merged without sorting
sort($result);
return $result;

}

//Driver Code
$array1 = [1,2,3,4,5];
$array2 = [3,6,7,5,8];
$new_array = union($array1, $array2);
foreach($new_array as $item)
echo $item."\n";




?>