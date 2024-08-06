<?php

try {
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "123");
    define("DB_DATABASE", "phpdemo");
    $conn2 = new mysqli (DB_HOST, DB_USER,
    DB_PASSWORD, DB_DATABASE,3308);
//     // #escaped seq used to make data comptable
//     // with mySQL but not securing it
    $welcometext='welcome to oop';
    $escaped =$conn2->real_escape_string ($welcometext);
    if ($conn2->connect_errno) {
    trigger_error($conn2->connect_error);
    printf("Connect failed: %s\n", $conn2->connect_error);
    exit();
    }
    else
    {
        
        $trainees = $conn2->query("select * from trainee");
        var_dump($trainees);
        $rowCount= $trainees->num_rows;
        if($rowCount>0)
        {
            
                echo '<table width=100%  border=1px solid>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>';
            while ($row = $trainees->fetch_assoc()) {
            
                // var_dump($row);
               echo '<tr>
        <td>'.$row['id'].'</td>
        <td>'.$row['username'].'</td>
        <td>'.$row['password'].'</td>
        <td>'.$row['actions'].'</td>
    </tr>';
    }

                echo '</table>';
        }
    }
    }
     catch (Exception $e) 
     {
    echo 'Connection failed: ' . $e->getMessage();
    }
?>