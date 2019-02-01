'use strict';
var OrderForm = function (){
    console.log('ici');
    this.getJsonSelected();
    $('#selectMeal').on('change',this.getJsonSelected.bind(this));
    $('#buttonAddOrder').on('click', this.showRecap.bind(this));
 
    this.basket = new Basket();

}

    OrderForm.prototype.showJSON = function (response){

        console.log(response);
        $('#imgMealDetails').attr('src', getWwwUrl()+'/images/meals/'+response.Photo);
        $('#nameMealDetails').text(response.Name);
        $('#descriptionMealDetails').text(response.Description);
        $('#prixMealDetails').text(response.SalePrice+' €');
    }

    OrderForm.prototype.getJsonSelected = function (){

        var Id = $('#selectMeal').val();
        console.log(getRequestUrl()+'/meal?Id='+Id);
        $.getJSON(getRequestUrl()+'/meal?Id='+Id, this.showJSON);

    }
    OrderForm.prototype.showRecap = function (event){

        event.preventDefault();
        
        this.basket.loadBasket();
        this.basket.addProducts();

    }
