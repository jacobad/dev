function onClickfilm(event){
  event.preventDefault();
      var films = $('input[name= film]').val();

$.getJSON('https://api.themoviedb.org/3/search/movie?api_key=2ee2c5b569240ea2a2a879dd9c8a822c&query='+films, search);
  }

function Clickid(event){

   event.preventDefault();
var id = $(this).data('id')
$.getJSON('https://api.themoviedb.org/3/movie/'+id+'?api_key=2ee2c5b569240ea2a2a879dd9c8a822c', MyList);

}