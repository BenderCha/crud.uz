<?php
    session_start();
    include "db.php";
    $id = $_GET['updateid'];
    $update_check = "SELECT * FROM `crud` WHERE id = '$id'";
    $update_check_run = mysqli_query($db, $update_check);
    $row = mysqli_fetch_assoc($update_check_run);
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $password = $row['password'];
    if (isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];

        $update_base = "UPDATE `crud` SET id = '$id', name = '$name', email = '$email', mobile = '$mobile', password = '$password' WHERE id = '$id'";
        $update_base_run = mysqli_query($db,$update_base);
        header("Location: ../display.php");
        $_SESSION['status'] = "<div class='green'>Siz foydalanuvchini muvofaqqiyatli o'zgartirdingiz...!</div>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="../template/fonts/stylesheet.css">
    <link rel="stylesheet" href="../template/css/style.css">
    <title>Online quiz</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <form action="#" method="POST">
                <header>Update</header>
                <div class="message m-3">
                    <?php
                        if (isset($_SESSION['status']))
                        {
                            echo $_SESSION['status'];
                            unset($_SESSION['status']);
                        }
                    ?>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control name" placeholder="Name" name="name" autocomplete="off" value="<?php echo $name;?>">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control email" placeholder="Email" name="email" autocomplete="off" value="<?php echo $email;?>">
                </div>
                <div class="mb-3 d-flex">
                <select class="form-select" aria-label="Disabled select example" disabled>
                    <option selected>+998</option>
                    <option value="+998">+998</option>
                </select>
                    <input type="text" class="form-control mobile" placeholder="941234567" name="mobile" autocomplete="off"  value="<?php echo $mobile;?>">
                </div>
                <div class="mb-3 d-flexs">
                    <input type="password" class="form-control pass" placeholder="Password" name="password" autocomplete="off"  value="<?php echo $password;?>">
                    <img src="../template/img/eye-close-4-32.png" id="eyeicon">
                    <!-- <i class="fas fa-eye fa-lg" id="eyeicon"></i> -->
                </div>
                <button type="submit" name="submit" id="submit">Submit</button>
            </form>
        </div>
    </div>
    <script src="template/js/javascript.js"></script>
</body>
</html>