<?php
// $path='asd2.txt';
// if(filetype($path)=='file')
// {

// }
chmod('asd2.txt',777);

$resource=fopen('asd2.txt','r');
// $data=fread($resource,filesize('asd2.txt'));
// while(!feof($resource))
// {
//     $data=fgets($resource);
//     echo $data.'</br>   ';
    
//     // var_dump($data);
// }
$data=fgetcsv($resource,100,',');
var_dump($data);
// $data=fgets($resource);
// var_dump($data);
// $data=fgets($resource);
// var_dump($data);
// $data=fgets($resource);
// var_dump($data);
// $data=fgets($resource);
// var_dump($data);
// $data=fgets($resource);
// var_dump($data);
// $data=fgets($resource);
// var_dump($data);    

fclose($resource);