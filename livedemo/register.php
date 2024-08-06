
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

print_r($_POST);
print_r($_GET);
// if(isset($_POST['username']))
if($_SERVER['REQUEST_METHOD']=='POST')
{
    //upload image 
    $imageuploadpath='uploads/'.$_FILES['userfile']['name'];
    if(move_uploaded_file($_FILES['userfile']['tmp_name'],$imageuploadpath))
    {
//insert data in database
include_once('conn.php');
$sqlquery='insert into trainee (username,password,pic) values(?,?,?)';
$stmt =$conn->prepare($sqlquery);
$stmt->execute([$_POST['username'],$_POST['pass'],$imageuploadpath]);
$result=$stmt->rowCount();
if($result>0)
    header('http://localhost/php2024livedemo/livedemo/index.php');
else
    echo '<div style=color:red;><h1>invalid insert</h1></div>';

    }
else
{ echo '<div style=color:red;><h1>invalid to register becouse upload image</h1></div>';}    
    
}

?>
<form method=post  enctype="multipart/form-data">
<label for="userfile">Upload a file:</label>
<input type="file" name="userfile"
id="userfile"/>
    <label >Username</label>
    <input type=text name=username required>
    </br>
    <label >Password</label>
    <input type=password name=pass required>
    </br>
    <input type=submit value=Regsiter>
</form>
