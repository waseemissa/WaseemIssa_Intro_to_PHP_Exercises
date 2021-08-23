<?php
/*
A script to print the following pattern by Waseem Issa
*
**
***
****
*****
******
*******
********

*/

for ($i = 0; $i<8; $i++){

    for ($j = 0; $j<=$i; $j++)
    print("*");

    echo nl2br("\n");
}



?>