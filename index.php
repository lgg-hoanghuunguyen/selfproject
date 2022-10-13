<?php
session_start();

include "Controllers/UserController.php";

$action = filter_input(INPUT_POST, 'action');
// var_dump($action);
if ($action == null) {
    $action = filter_input(INPUT_GET, 'action');
}

$userController = new UserController;

switch ($action) {
    case "login":
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // echo "ok day la post method";
            $result = $userController->handle_login();
            if ($result == true) {
                echo "dang nhap ok";
                exit;
            } else {
                echo "dang nhap that bai";
                include "Views/Users/login.php";
            }
        }else{ // method GET se vao day : cho nay khi go tren URL xong roi an enter 
            include "Views/Users/login.php";

        }
        break;

    case "banhang":
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $result = $userController->handle_banghang();
            
        }    
    default:
        include "Views/home.php";
}
