'use strict';


  /* en Jquery*/

/*setTimeout(function(){ 

	$.event.trigger('coucou');


}, 3000);


 $(document).on('coucou', function() {
 
 	console.log('déclenchement du trigger');
 
 });
 
 
 $.event.trigger('coucou');*/




/*  ecriture en natif*/

  var event = document.createEvent('Event');
 
 event.initEvent('coucou', true, true);
 
 
 document.addEventListener('coucou', function() {
 
 	console.log('déclenchement du trigger');
 
 });
 
 
document.dispatchEvent(event);  // cree l'evenement 
 
 
setTimeout(function(){ 

	document.dispatchEvent(event); // cree l'evenement 

}, 3000);