<?php
    session_start();
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
            <form action="config/register-code.php" method="POST">
                <header>Register</header>
                <div class=" m-3">
                    <?php
                        if (isset($_SESSION['status']))
                        {
                            echo $_SESSION['status'];
                            unset($_SESSION['status']);
                        }
                    ?>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control name" placeholder="Name" name="name" autocomplete="off">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control email" placeholder="Email" name="email" autocomplete="off">
                </div>
                <div class="mb-3 d-flex">
                <select class="form-select" aria-label="Disabled select example" disabled>
                    <option selected>+998</option>
                    <option value="+998">+998</option>
                </select>
                    <input type="text" class="form-control mobile" placeholder="941234567" name="mobile" autocomplete="off">
                </div>
                <div class="mb-3 d-flexs">
                    <input type="password" class="form-control pass" placeholder="Password" name="password" autocomplete="off">
                    <img src="template/img/eye-close-4-32.png" id="eyeicon">
                    <!-- <i class="fas fa-eye fa-lg" id="eyeicon"></i> -->
                </div>
                <button type="submit" name="submit" id="submit">Submit</button>
            </form>
        </div>
    </div>
    <script src="template/js/javascript.js"></script>
</body>
</html>