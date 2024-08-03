<table width=100% border=1px solid>
        <tr>
            <td>
            username
            </td>
            <td>
            password
            </td>
        </tr>
        <?php
try
{
    $resource=fopen('traineedata.txt','r');
    while(!feof($resource))
    {
        $data=fgets($resource);
        $data=preg_split('/\,/',$data); 
        var_dump($data);
        ?>
        <tr>
            <td>
                <?php echo $data[0]; ?>
            </td>
            <td><?php echo $data[1]; ?></td>
    </tr>
        
        <?php
    }
    fclose($resource);
}
catch(Exception $ex)
{
    echo 'error';
}
?>
</table>