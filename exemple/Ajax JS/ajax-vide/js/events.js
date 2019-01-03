'use strict';

/*************************************************************************************************/
/* ***************************************** FONCTIONS ***************************************** */
/*************************************************************************************************/


function onClickExcute()
{
	
	switch ($('input[name=what]:checked').val()) {
      case '1':
       
       $.get('php/1-get-html-article.php', ajaxGet);
    
      break;
     
     case '2':

    	$.getJSON('php/2-get-json-data.php', jsonGet);
   
     break;
  
     case '3':
   		$.get('php/3-get-html-movies.php', ajaxGet);

    break;
}
}
