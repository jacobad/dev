'use strict';

var Basket = function (){

    this.basket = [];


}
    Basket.prototype.loadBasket = function(){

        this.basket = loadDataFromDomStorage('panier');

    }

    Basket.prototype.addProducts = function(){

        //if (in_array( $('#nameMealDetails').html() , this.basket) == false){

            this.basket.push({

            'name' : $('#nameMealDetails').text(),
            'priceU' : $('#priceMealDetails').text()
    
            });

            saveDataToDomStorage('panier', this.basket);
        //}


    }