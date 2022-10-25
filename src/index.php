<?php
// echo "Hola mundo desde docker y php >.<";
require("./routes/Routes.php");
require("./controller/LoginController.php");

$routes = new Routes;
$controller = new LoginController;
$isLogged = $controller->validateSession();

$location = $isLogged ? "Location: view/HomeView.php" : "Location: view/LoginView.php";
header($location);
exit();
