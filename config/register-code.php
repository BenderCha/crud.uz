<?php
    session_start();
    include "db.php";
    if (isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];

        $check_base = mysqli_query($db,"SELECT * FROM `crud` WHERE email = '$email'"); 
        if (!mysqli_num_rows($check_base)>0)
        {
            if (!empty($name) && !empty($email) && !empty($mobile) && !empty($password)) 
            {
                $reg_insert = "INSERT INTO `crud` (name,email,mobile,password) VALUES('$name','$email','$mobile','$password')";
                $reg_insert_run = mysqli_query($db,$reg_insert);
                header("Location: ../display.php");
                $_SESSION['status'] = "<div class='green'>Siz muvofaqqiyatli ro'yhatdan o'tdingiz...!</div>";
    
            } else {
                header("Location: ../add_user.php");
            }

        } else {
            header("Location: ../add_user.php");
            $_SESSION['status'] = "<div class='error'>Ushbu pochta avval ro'yhatdan o'tgan...!</div>";
        }
        
        

        
    }
?>