<?php
session_start();
include_once('header.php');

?>

<td colapsn=7>
            content-home
            <?php
            if(isset($_SESSION['username']))
            {
                    echo 'welcome '.$_SESSION['username'];
            }
            else
            { 
                //redirect to login
            }
            ?>
            
            

        </td>
    </tr>
    <?php
include_once('footer.php')
?>