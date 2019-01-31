<?php


class MealController
{
   public function httpGetMethod(Http $http, array $queryFields)
   {
       $data = new MealModel();
       $dataMeal = $data -> showDetailsMeal();

   }

   public function httpPostMethod(Http $http, array $formFields)
   {
       
   }
}
?>