<?php
if($_SERVER['REQUEST_METHOD']=='GET')
{
    echo '<form method=post enctype="multipart/form-data">
<h1>Registration form</h1></br>
<h3>Please choose your file </h3>
<label>File </label>
<input type="file" name="file" />
</br><label>Username</label><input type="text" name="username"/>
</br><label>Password</label><input type="password" name="password"/>
<input type="submit"/>
</form>';
}
else
{
    
    if(!isset($_POST['username']) && !isset($_POST['password']))     
    {

    }
    else
    {
        echo '<div style="color:red"><h1>Kindly write username & Password</h1></div>';
    }
}
?>