


$('#para2').css('color', 'red');
$('#para2').css('background-color', 'blue');

$('.para').on('click', togglePink);

function togglePink() {

	$(this).toggleClass('pink');
	//$(this).addClass('pink');
	//$(this).removeClass('pink');
}
	$('#send').on('click', changePara);

function changePara() {
	
    $('#container2').html('<p>remplacement par ce qui a dans html</p>');
    $('#container').append('<p class="para" id="para4">para4</p>');

 $.get('endroit où se trouve mon fichier', myFunction);


function myFunction(response) {

	
console.log(response);

}


