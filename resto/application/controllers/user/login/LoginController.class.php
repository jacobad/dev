<?php
//session_start();
class LoginController{

   public function httpGetMethod(Http $http, array $queryFields)
   {

   }

   public function httpPostMethod(Http $http, array $formFields)
   {
       $data = new UserModel();
       $data -> logInUser($_POST);

           
   }
}