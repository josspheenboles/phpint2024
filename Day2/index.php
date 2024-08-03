<?php
// <!-- #datatype varname=value;
// #datatype varname;
// $x=1
// #global ,local,super global,const,static
// #if for foreach,while,do while -->
// $name='aya';
// var_dump($name);
// $x=1;
// var_dump($x);
// $x='one';
// var_dump($x);
error_reporting(E_ALL);
ini_set('display_errors', '1');
try
{
    file_put_contents('asd2.txt','php track 2023');
    // //open file 
    // $file=fopen('asd.tx','w');
    // if(is_resource($file))
    // {
    // //    // var_dump("sjskjfkljdfkl");
    // //    $str='hi php track'; 
    // // //    fwrite($file,"php track intake 44 2024",3);
    // fwrite( $file,$str,4);
    // //     var_dump($file);
    //     //close file 
    //     fclose($file);
    // }
    
}
catch (Exception $e)
{
    echo 'error';
}
?>