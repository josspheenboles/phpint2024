<?php

if($_SERVER['REQUEST_METHOD']=='GET')
{
?>
<form method=post action='home.php' enctype="multipart/form-data">
<label for="userfile">Upload a file:</label>
<input type="file" name="userfile"
id="userfile"/>
    <label >Username</label>
    <input type=text name=username required>
    </br>
    <label >Password</label>
    <input type=password name=pass required>
    </br>
    <input type=submit value=Login>
</form>
<?php
}
else
{
    print_r($_POST);
}
?>