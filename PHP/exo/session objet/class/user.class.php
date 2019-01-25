<?php

class User {


  public function addUser($post) {
    
      $hashPwd = $this->hashPassword($post['psw']);
    
      $data = new Database();
        
        $data->executeSql('INSERT INTO 
                users(email, psw, FirstName, LastName, age) 
                 VALUES 
                 (?, ?, ?, ?, ?)',
                 [
                 $post['email'],
                 $hashPwd,
                 $post['FirstName'],
                 $post['LastName'],
                 $post['age'],

                 ]
              );   
                                                              
    
    }
    
    private function hashPassword($password)
    {

        $salt = '$2y$11$'.substr(bin2hex(openssl_random_pseudo_bytes(32)), 0, 22);

        return crypt($password, $salt);
    }

    private function verifyPassword($password, $hashedPassword)
  {
    return crypt($password, $hashedPassword) == $hashedPassword;
  }

}

?>