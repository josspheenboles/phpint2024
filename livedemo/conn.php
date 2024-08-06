<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

include_once('Config.php');
$dsn = 'mysql:dbname='.DB_DATABASE.';host='.DB_HOST.';';
try
{

    $conn=new PDO($dsn,DB_USER,DB_PASSWORD);
   

}
catch(Exception $e)
{
    echo 'invalid connections'. $e->getMessage();}

?>