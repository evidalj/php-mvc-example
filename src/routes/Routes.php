<?php
class Routes {
    var $routes = [
        "home"=>"view/HomeView.php",
        "login"=>"view/LoginView.php",
        "index"=>"../index.php"
    ];
    function __construct() {}
    public function redirect($route) {
        $redirectTo = $this->routes[$route];
        header("Location: $redirectTo");
        // return require($this->routes[$route]);
    }
}
