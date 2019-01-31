<?php

class MealModel {

    public function showDataMeal(){

        $data = new Database();
        $dataMeal = $data -> query('SELECT *
                        FROM Meal
        
        ', []);
        return $dataMeal;
    }
    public function showDetailsMeal(){

        $data = new Database();
        $dataMeal = $data -> queryOne('SELECT *
                        FROM Meal
                        WHERE Id = ?
        
        ', [$_GET['Id']]);
        
        return $dataMeal;
    }



}

?>