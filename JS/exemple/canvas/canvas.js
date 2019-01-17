'use strict';

var canvas = document.getElementById("moncanevas"); 
var context = canvas.getContext('2d');

context.beginPath();
context.strokeStyle='yellow';
context.lineWidth=12; 
context.moveTo(20,100);
context.lineTo(200,10);
context.lineTo(500, 300);
context.stroke(); 

context.beginPath();
context.strokeStyle='cyan';
context.lineWidth=10; 
context.moveTo(500, 300);
context.lineTo(200, 300);
context.stroke(); 

context.beginPath();
context.strokeStyle='cyan';
context.lineWidth=3;
context.fillStyle = "pink"; 
context.arc(200,100,100,0,2*Math.PI);
context.fill();

function onClickPosition(event) {
	
	console.log(event.clientX);
    console.log(event.clientY);
    
    var offset = canvas.getBoundingClientRect();
    
}
$(document).click('click', onClickPosition);