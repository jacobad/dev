var Program = function(){

	this.Heros = new Perso('Heros', 300, 50, 7, 120);
	this.Mechant = new Perso('Mechant', 280, 45, 18, 160);
	
	$('#attaquer').on('click', this.onClickAttaque.bind('this'));

}


Program.prototype.onClickAttaque = function(event) {
	event.preventDefault();

	console.log(this);

}