<?php


include "Model/user_model.php";


class UserController extends UserModel 
{
    public function handle_login()
    {
        // $email_db = 'hoang@gmail.com';
        // $password_db = '123456';

        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'psw');

        $is_Ok = true;

        //check empty 
        if (empty($email)) {
            $_GET['email_empty'] = 'email is cant empty';
            $is_Ok = false;
        }

        if (empty($password)) {
            $_GET['psw_empty'] = 'password is cant empty';
            $is_Ok = false;
        }

        if ($is_Ok == true) {

            $usermodel = new UserModel;


            $result = $usermodel->getLoginInfo($email_db,$password_db);


            var_dump($result);
            exit;




            if ($email == $email_db && $password == $password_db) {
                $_SESSION['login_success']='login ok';
                echo "login success fully";
                exit;
            } else {
                echo "sai roi ku em";   
            }
            
        }
        
        }
        public function handle_banhang(){

    }
}

