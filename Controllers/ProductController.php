<?php


include "Model/product_model.php";


class ProductController 
{
    function __construct()
    {

        // check du lieu da login hay chua 
        if (!empty($_SESSION['login_success'])) {
            echo 'da login roi';
            exit;
        }
    }




    public function getList(){
        echo 'product list';
        exit;
    }
}