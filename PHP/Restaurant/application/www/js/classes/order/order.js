'use strict';

var OrderForm = function (){

    this.getJsonSelected();
    $('#selectMeal').on('change',this.getJsonSelected.bind(this));
    $('#buttonAddOrder').on('click', this.showRecap.bind(this));

    this.basket = new Basket();

}

    OrderForm.prototype.showJSON = function (response){

        console.log(response);
        $('#imgMealDetails').attr('src', getWwwUrl()+'/images/meals/'+response['Photo']);
        $('#nameMealDetails').html(response['Name']);
        $('#descriptionMealDetails').html(response['Description']);
        $('#prixMealDetails').html(response['SalePrice']+' €');
    }

    OrderForm.prototype.getJsonSelected = function (){

        this.Id = selectMeal.value;

        $.getJSON(getRequestUrl()+'/meal?Id='+this.Id, this.showJSON);

    }
    OrderForm.prototype.showRecap = function (event){

        event.preventDefault();
        
        this.basket.loadBasket();
        this.basket.addProducts();

    }
    

