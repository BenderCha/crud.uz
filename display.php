<?php
    session_start();
    include "config/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="template/fonts/stylesheet.css">
    <link rel="stylesheet" href="template/css/style.css">
    <title>Online quiz</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="content">
                <button type="submit" class="btn btn-primary my-5"><a href="add_user.php">Add User</a></button>
                <?php
                    if (isset($_SESSION['status'])) {
                        
                        echo "<div class='error'>".$_SESSION['status']."</div>";
                        unset($_SESSION['status']);
                    }
                ?>
                <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Password</th>
                        <th scope="col" colspan="2" class="text-center">Config</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $display_base = "SELECT * FROM `crud`";
                        $display_base_result = mysqli_query($db, $display_base);
                        if ($display_base_result)
                        {
                            while($row = mysqli_fetch_assoc($display_base_result))
                            {
                                $id = $row['id'];
                                $name = $row['name'];
                                $email = $row['email'];
                                $mobile = $row['mobile'];
                                $password = $row['password'];
                               
                                echo "<tr>";
                                echo "<th>$id</th>";
                                echo "<td>$name</td>";
                                echo "<td>$email</td>";
                                echo "<td>+998 $mobile</td>";
                                echo "<td>$password</td>";
                                echo "<td><button class='btn btn-warning'><a href='config/update.php?updateid=".$id."'>Update</a></button></td>";
                                echo "<td><button class='btn btn-danger'><a href='config/delete.php?deleteid=".$id."' onclick='myFunction()'>Delete</a></button></td>";
                                echo "</tr>";
                            }
                        }
                    ?>

                    
                </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- <script src="template/js/javascript.js"></script> -->
</body>
</html>