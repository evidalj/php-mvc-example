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
    <title>Document</title>
    <?php include("../lib/material-design-css.php"); ?>
</head>

<body>
    <?php include("../common/NavBar.php");?>
    <div>
        Welcome <?php echo $user; ?>
    </div>
    <a href="../routes/Router.php?action=logout">logout</a>
</body>
<?php include("../lib/material-design-js.php"); ?>
</html>