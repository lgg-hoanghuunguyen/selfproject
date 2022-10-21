<?php

include 'connect_db.php';

class UserModel extends ConnectDB
{
    public function getLoginInfo($email,$password)
    {
        $md5Password = md5($password);

        $stmt = $this->conn->prepare("SELECT * FROM users where email = '$email' AND password = '$md5Password'");
    

        $stmt->execute();

        // set the resulting array to associative
        //lay data theo che do gi 

        $stmt->setFetchMode(PDO::FETCH_ASSOC);


        //lay du lieu tu $stmt
        $result = $stmt->fetch();

        //  var_dump($result);
        //  echo '123';
        //  exit;
         

        return $result;

       
    }
}
