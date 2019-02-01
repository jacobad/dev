<?php


class OrderController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        if ($_SESSION == null){

            $http = new Http();
            $http->redirectTo('/order');
        }
            $data = new MealModel();
            $dataMeal = $data -> showDataMeal();
            
            return [
                'names' => $dataMeal
            ];
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
    	
    }
}