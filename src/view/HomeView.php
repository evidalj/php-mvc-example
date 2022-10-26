<?php
require("../model/UserModel.php");
require('../controller/LoginController.php');
$controller = new LoginController;
$isLogged = $controller->validateSession();
if (!$isLogged) {
    header("Location: LoginView.php");
    exit();
}
$user = $_SESSION["user"]->getFullName();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php include("../lib/material-design-css.php"); ?>
</head>

<body>
    <?php include("../common/NavBar.php"); ?>
    <div class="container">
        <div class="d-flex flex-column ">
            <div class="d-flex flex-row justify-content-center">
                <img style="max-width:40rem" src="https://static.vecteezy.com/system/resources/previews/002/556/961/original/young-man-gesture-and-say-hi-free-vector.jpg" alt="">
            </div>

        </div>
    </div>
</body>
<?php include("../lib/material-design-js.php"); ?>

</html>