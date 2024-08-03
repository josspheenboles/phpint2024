<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    if(isset($_POST['username']) && isset($_POST['password']) )
    {
        $resource=fopen('traineedata.txt','a');
        if(is_resource($resource))
        {
            fwrite($resource,
            $_POST['username'].','.$_POST['password']."\n"  );
            fclose($resource);
        }
        else
        {echo 'invalid filename';}
        


    }

?>
<form method=post>
    <label>username</label>
    <input type=text name=username required />
    </br>
    <label>password</label>
    <input type=password name=password />
    </br>
    <input type=submit value=register />
</form>