<?php

/*
A PHP a function to remove a specified entry from an array by Waseem Issa
*/

/*
 Function used to check if the element we want to delete exists in the array or not
 This is important in case the array doesn't contain the number we are trying to remove
*/
function arrayContains($arr, $item){
    for ($i = 0; $i < count($arr); $i++)
    if($arr[$i]==$item)
    return true;
return false;

}

function remove($item, $arr){
    $new_array = [];
    $in_array = arrayContains($arr, $item);

//To create an array that contains all the elements except the number we want to remove
    if($in_array){
        for ($i = 0; $i < count($arr); $i++)
        
            if($arr[$i] != $item)
                array_push($new_array,$arr[$i]);
            
                foreach($new_array as $item)
                    echo "\n".$item;
    return $new_array;            
    }
    
    else 
    echo nl2br("\n".$item." is not in the array\n");

}

//Driver Code
$ages = [20,30,40,50,70];
$number = 50;
remove($number, $ages);
$number = 60;
remove($number, $ages);

?>