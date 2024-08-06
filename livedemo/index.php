<form method=post >
    <label >Username</label>
    <input type=text name=username required>
    </br>
    <label >Password</label>
    <input type=password name=pass required>
    </br>
    <input type=submit value=Login>
</form>
<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include_once('conn.php');
    $sql='select * from trainee where username=? and password=?';
    $stmt =$conn->prepare($sql);
    $stmt->execute([$_POST['username'],$_POST['pass']]);
    $result=$stmt->rowCount();
if($result>0)
{
    $result=$stmt->fetchAll();
   foreach($result as $row)
    {
        $_SESSION['username']=$row['username'];
        $_SESSION['id']=$row['id'];
        
    }
    header('http://localhost/php2024livedemo/livedemo/Home.php');
}
    
else
    echo '<div style=color:red;><h1>invalid insert</h1></div>';

}

?>