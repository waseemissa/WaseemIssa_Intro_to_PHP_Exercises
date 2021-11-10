<?php

/*
A PHP script to merge two commas separated lists with unique value only by Waseem Issa
*/

$list1 = "4, 5, 6, 7"; 
$list2 = "4, 5, 7, 8";

//The explode function returns elements from a list splitted by a delimeter
$array1 = explode(", ",$list1); 
$array2 = explode(", ",$list2);
//To merge both arrays together
$merged_array = array_merge($array1, $array2);
//To remove duplicates from the array
$merged_array = array_unique($merged_array);

echo "The two lists merged together give: ";
foreach ($merged_array as $item)
echo $item."\n";

?>