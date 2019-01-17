'use strict';

var canvas = document.querySelector('#masterpiece');
   
var context = canvas.getContext('2d');




function onClickCanvas(event)
{
	var offset = canvas.getBoundingClientRect();
    var style = window.getComputedStyle(canvas);
    var border = parseInt(style.borderWidth);
    
	var location = {  x: event.clientX - offset.left - border , y: event.clientY - offset.top - border }

	var disk = new Disk();
    
    disk.setRadius(getRandomInteger(10,100));
    disk.setPosition(location);
	disk.setColor(getRandomColor());
    
    disk.draw(context);
}


canvas.addEventListener('click', onClickCanvas);