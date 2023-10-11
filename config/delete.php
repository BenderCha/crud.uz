<?php
    session_start();
    include "db.php";
    if (isset($_GET['deleteid']))
    {
        $id = $_GET['deleteid'];
        
        $delete_id = "DELETE FROM `crud` WHERE id = '$id'";
        $delete_id_run = mysqli_query($db,$delete_id);

        if ($delete_id_run)
        {
            $_SESSION['status'] = "Foydalanuvchi bazadan muvaffaqiyatli o'chirildi";
            header("Location: ../display.php");
        } else {
            $_SESSION['status'] = "Foydalanuvchi bazadan o'chirilmadi.".mysqli_error($db);
            header("Location: ../display.php");
        }
    }

?>