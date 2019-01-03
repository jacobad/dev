'use strict';

/*************************************************************************************************/
/* ***************************************** FONCTIONS ***************************************** */
/*************************************************************************************************/

function ajaxGet(response)
{

	$('#target').html(response);
}

function jsonGet(response)
{

	$('#target').empty();
	$('#target').append('<ul>')
	for(var i = 0; i < response.length; i++){
		$('#target ul').append('<li> Nom : '+response[i].firstName+', tel : '+response[i].phone+'</li>');
	}


}
