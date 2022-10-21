<?php
session_start();

include "Controllers/UserController.php";
include "Controllers/ProductController.php";

$action = filter_input(INPUT_POST, 'action');
// var_dump($action);
if ($action == null) {
    $action = filter_input(INPUT_GET, 'action');
}


$userController = new UserController;
$productController = new ProductController;


switch ($action) {
    case "login":
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // echo "ok day la post method";
            $userController->handle_login();
        } else {
            include "Views/Users/login.php";
        }
        break;

    case "product_list":
        $productController->getList();
        break;
        
    default:
        include "Views/home.php";
}
