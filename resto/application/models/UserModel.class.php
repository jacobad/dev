<?php


class UserModel{

   public function addUser($post){


       $hash = $this -> hashPassword($post['password']);

       $data = new Database();
       $data -> executeSql('INSERT INTO User(FirstName,LastName,Email,Password,BirthDate,Address,City,ZipCode,phone)
                           VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)',
                           [
                               $post['firstName'],
                               $post['lastName'],
                               $post['email'],
                               $hash,
                               $post['birthYear'].'-'.$post['birthMonth'].'-'.$post['birthDay'],
                               $post['address'],
                               $post['city'],
                               $post['zipCode'],
                               $post['phone']
                           ]);


       $http = new Http();
       $http->redirectTo('/');


   }

   private function hashPassword($password)
    {
        
        $salt = '$2y$11$'.substr(bin2hex(openssl_random_pseudo_bytes(32)), 0, 22);

        return crypt($password, $salt);
    }

   public function logInUser($post){


       $data = new Database();
       $infoUser = $data ->  queryOne('SELECT *
                           FROM User
                           WHERE Email = ?',
                           [
                               $post['email']
                           ]);
       var_dump($infoUser);

       if ($infoUser == false){
        var_dump('mail est incorrect Morray');
          
       }
       else{
           if ($this -> verifyPassword($post['password'],$infoUser['Password']) == true){

               $_SESSION['Id'] = $infoUser['Id'];
               $_SESSION['FirstName'] = $infoUser['FirstName'];
               $_SESSION['LastName'] = $infoUser['LastName'];
               $_SESSION['Email'] = $infoUser['Email'];
               $_SESSION['Password'] = $infoUser['Password'];
               $_SESSION['BirthDate'] = $infoUser['BirthDate'];
               $_SESSION['Address'] = $infoUser['Address'];
               $_SESSION['City'] = $infoUser['City'];
               $_SESSION['ZipCode'] = $infoUser['ZipCode'];
               $_SESSION['Country'] = $infoUser['Country'];
               $_SESSION['Phone'] = $infoUser['phone'];
               
               //var_dump($_SESSION);

               $http = new Http();
               $http->redirectTo('/');

           }
           else{
               var_dump('Le password est incorrect Gros');
           }
      }

    }
    
    private function verifyPassword($password, $hashedPassword){
        
      return crypt($password, $hashedPassword) == $hashedPassword;
    }

}