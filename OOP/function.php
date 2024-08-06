<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$var=function ($a,$b){echo $a+$b;};
echo is_callable('var');
$var(1,2);

// function sum(){}
// is_callable('sum');
// $num=20;
// function increment(&$arg1)#address
// {
//     $arg1+=1;
//     echo $arg1;
// }
// echo $num.'</br>';#20
// increment($num);#21
// echo $num.'</br>';#21
// function sum(int $arg1,int $arg2)
// {
//     return $arg1+$arg2;
// }
// function sum(int $arg1,int $arg2=0,int $arg3=0)
// {
//     return $arg1+$arg2+$arg3;
// }
// // echo sum();#arg1=0,arg2=0,arg3=0
// echo sum(10);#arg1=10,,,,0
// echo sum(1,2);#
// echo sum(1,2,5);#ok

// echo sum('mai','ali');

?>