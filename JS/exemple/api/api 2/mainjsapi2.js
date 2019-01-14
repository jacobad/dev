'use strict';



function position(pos) {

    var date = new Date();
    console.log(pos);
    var location = pos.coords.latitude.toFixed(2)+','+pos.coords.longitude.toFixed(2);
    console.log(location);
    requestShowTimesInFrance(52340, location, date)
}





if(navigator.geolocation) {
    
    console.log('il y a la géoloc');
    
    navigator.geolocation.getCurrentPosition(position);
    
} else {

  console.log('Pas de geoloc');
}


displayMovieWithId(52340);
