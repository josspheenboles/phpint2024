<?php
$str='ali 
aya
mai
sara';
// echo $str;
echo nl2br($str);
//check pass & username 
//if true show home page 
// $username='ahmed';
// print_r($_POST);
// print_r($_FILES['userfile']);
// echo 'welcome '.$_POST['username'];
// session_start();
// //set username key in session
// $_SESSION['username']=$_POST['username'];

include_once('header.php');

?>
<tr>
            <td colspan=9>
            content <?php echo $id;?>
</td>
</tr>
<?php
include_once('footer.php');
?>