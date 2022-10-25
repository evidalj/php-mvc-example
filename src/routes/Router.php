<?php
require("../controller/LoginController.php");
require("Routes.php");
$controller = new LoginController;
$routes = new Routes;
if (!isset($_GET["action"])) {
    redirect("Location: ../index.php");
    exit();
}
switch ($_GET["action"]) {
    case "login":
        if (isset($_POST["username"]) && isset($_POST["password"])) {
            $isLogged = $controller->login($_POST["username"], $_POST["password"]);
            $isLogged ? redirect('../view/HomeView.php') : redirect('../view/LoginView.php');
            // header("Location: ../index.php");
        } else {
            redirect('../index.php');
            // header("Location: ../index.php");
        }
        break;
    case "logout":
        $controller->logout();
        redirect('../index.php');
}
function redirect($redirect)
{
    header("Location: $redirect");
    exit();
}
