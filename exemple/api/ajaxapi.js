function search(response){

  $('#affi').empty();
  $('#affi').append('<ul>');
  for(var i = 0; i < response.results.length; i++){
  	
  $('#affi ul').append('<li id="jacob" data-id='+response.results[i].id+'>'+response.results[i].title+'</li>');
  } 
}
/*function MyList(response){
     $('#target').empty();
     $('#target').append('<ul>');
     '<li> </li>'
     }
}*/