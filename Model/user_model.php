<?php

include 'connect_db.php';

class UserModel extends ConnectDB
{
    public function getLoginInfo($email_db,$password_db)
    {
        $stmt = $this->conn->prepare('SELECT * FROM users where email = $email_db AND password = $password_db');
    

        $stmt->execute();

        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $result = $stmt->fetch();

        // dump_data_exit($result);

        return $result;
       
    }
}
