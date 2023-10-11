<?php
    $db = new mysqli('localhost','root','','crud.uz');
    if (!$db)
    {
        echo "Database connection error".mysqli_error($db);
    }
?>
