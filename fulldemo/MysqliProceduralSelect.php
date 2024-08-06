<?php
//configuration
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "123");
define("DB_DATABASE", "phpdemo");
try {
$conn = mysqli_connect(DB_HOST, 'root', DB_PASSWORD, DB_DATABASE, 3308);

// checking errors
if (mysqli_connect_errno()) {
    trigger_error(mysqli_connect_error());
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{
    $trainees = mysqli_query($conn,"select * from trainee");
    var_dump($trainees);
    $rowCount= mysqli_num_rows($trainees);
    if($rowCount>0)
    {
        echo '<table width=100%  border=1px solid>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Actions</th>
        </tr>';

        while ($row = mysqli_fetch_assoc($trainees)) {
            var_dump($row);
           echo '<tr>
    <td>'.$row['id'].'</td>
    <td>'.$row['username'].'</td>
    <td>'.$row['password'].'</td>
    <td>
    <a href="update.php?id='.$row['id'].'">update</a></br>
    <a href="delete.php">Delete</a></br>
    </td>
</tr>';
}
            echo '</table>';

    }
    else
    {
        echo '<div style="color:blue"><h1>no trainee data to list</h1></div>';
    }

}
} catch (Exception $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>

