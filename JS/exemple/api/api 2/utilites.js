'use strict';

function dateUsToFrench(date) {

	var month = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
	var tabdate = date.split('-');
    
    var newDate = tabdate[2]+' '+month[tabdate[1]-1]+' '+tabdate[0];
    
    return newDate;
}




function splitSeance(string) {
	var tabDate = string.split('T');
    var day = tabDate[0];
	var resultHours = tabDate[1].split(':');
    
    var result = { day: day, hour: resultHours[0]+':'+resultHours[1] };
    
    return result;
}
