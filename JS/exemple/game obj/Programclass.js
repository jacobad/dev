var Program = function(){

	this.Heros = new Perso('Heros', 300, 50, 7, 120);
	this.Mechant = new Perso('Mechant', 280, 45, 18, 160);
	
	$('#attaquer').on('click',this.onClickattaque.bind(this));
	$('#defendre').on('click',this.onClickDefense.bind(this));
	$('#sort').on('click', this.onClickSort.bind(this));
	//this.affichage();
}



Program.prototype.affichage = function() {

	
	console.log('la');
		$('#gentil').html(this.Heros.name+ ' : '+this.Heros.hp+' HP, attaque : ' + this.Heros.attack + ', defense : '+ this.Heros.defense +', magie : '+ this.Heros.magie);
		$('#vilain').html(this.Mechant.name+ ' : '+this.Mechant.hp+' HP, attaque : ' + this.Mechant.attack + ', defense : '+ this.Mechant.defense +', magie : '+ this.Mechant.magie);
		
		if(this.Heros.hp <=0 || this.Mechant.hp <= 0) {
			if(this.Heros.hp > 0 ) {
				$('#affichage').html('<p>Victoire du joker il  a encu... Superman </p>');
			} else {
				$('#affichage').html('<p>Victoire de Superman il  a sodomi... le joker </p>');
			}
		}
		
	}


Program.prototype.onClickattaque = function(event) {
	event.preventDefault();
	console.log('la');
	this.Heros.attaquer(this.Mechant);
	this.PC();
	this.affichage();
}

Program.prototype.onClickSort = function(event) {
	event.preventDefault();
	
	this.Heros.sort(this.Mechant);
	this.PC();
	this.affichage();
}

Program.prototype.onClickDefense = function(event) {
	event.preventDefault();
	
	this.Mechant.defendre();
	this.PC();
	this.affichage();
}
Program.prototype.PC= function(){
	var rand = getRandomInteger(0,3)
	if (rand = 1){
		this.Mechant.attaquer(this.Heros);
	}else if (rand =2){
		this.Mechant.defendre();
	}else {
		this.Mechant.sort(this.Heros);
	}
}

