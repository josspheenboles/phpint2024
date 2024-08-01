<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$name='aya ali';//global var 

function fun2()
{
    echo 'name';
    $name2='fun'; //local var
    echo $name2.'----';
    // echo $name;//print global name
    // $name='sdskdkl';//access var cann't modified
}
$name='sara';
echo $name.'</br';
//calling
fun2();

// // $name='aya ali';
// $x='name';
// echo $$x;#$name
// echo 'php track 2024 palpapl 

// </br>

// assuit';echo ' ==>palapl';
// echo "<p>Now, It’s ";
// echo date('H:i, jS F Y');
// echo "</p>";
// //php lossly typed data type (dynmicaly data typed)
// // int x=1;//datatype varname=value;
// //store in memory -->stack or heap
// $name='sara ali';//string
// var_dump($name);
// $name=100;
// var_dump($name);
// // $id=1;//int
// // // echo $name;
// // // echo $id;

// var_dump($id);


?>