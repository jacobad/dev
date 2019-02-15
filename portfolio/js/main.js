'use strict';

/*Header clcik fonction*/

function qsj(){
		if(document.getElementById('invisible').style.display == 'none'){
    	document.getElementById('invisible').style.display = 'block';
  		}
  		else {
    	document.getElementById('invisible').style.display = 'none';
		}
}
function network(){
	if(document.getElementById('invisibles').style.display == 'none'){
    	document.getElementById('invisibles').style.display = 'block';
  		}
  		else {
    	document.getElementById('invisibles').style.display = 'none';
		}
}




/*footer click formulaire*/


jQuery(document).ready(function()
{
   // On cache la zone de texte
   jQuery('#toggle').hide();
   // toggle() lorsque le lien avec l'ID #toggler est cliqué
   jQuery('a#toggler').click(function()
  {
      jQuery('#toggle').toggle(400);
      return false;
   });
});