<?php
// echo "Hola mundo desde docker y php >.<";
require("./model/UserModel.php");
require("./controller/LoginController.php");

$controller = new LoginController;
// $controller->login("evidalj", "123456");
$controller->index();