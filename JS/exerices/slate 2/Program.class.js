var Program = function(canvas)
{
	this.colorPalette = new ColorPalette();
    this.pen          = new Pen();
    this.canvas       = new Slate(this.pen, canvas);

    this.start();
    
    
}


Program.prototype.start = function() {

    var penColor = document.querySelectorAll('.pen-color');
    
    for (var i = 0; i < penColor.length; i++) {
    
        penColor[i].addEventListener('click', this.onClickPenColor.bind(this));
    
    }
     var penSize = document.querySelectorAll('.pen-size');

	for (var j = 0; j < penSize.length; j++) {
    
        penSize[j].addEventListener('click', this.onClickPenSize.bind(this));
    
    }
    
    var clearSlate = document.getElementById('tool-clear-canvas');
    clearSlate.addEventListener('click', this.slate.clear.bind(this.slate));  

}

Program.prototype.onClickPenColor = function(event)
{

    var penColor = event.currentTarget.dataset.color;   // Avec jQuery cela donnerait $(div).data('color')

    this.pen.color = penColor;
};
Program.prototype.onClickPenSize = function(event)
{
	var penSize = event.currentTarget.dataset.size;
    
    this.pen.size = penSize;
};
Program.prototype.onClickColorPicker = function()
{
	var palette = document.getElementById('color-palette');
    
    palette.classList.toggle('hide');


}
    var clearSlate = document.getElementById('tool-clear-canvas');
    clearSlate.addEventListener('click', this.slate.clear.bind(this.slate));
    
   // clearSlate.addEventListener('click', this.clear.bind(this));
    
    var paletteButton = document.getElementById('tool-clear-picker');
    paletteButton.addEventListener('click', this.onClickColorPicker.bind(this));
   
   
    $(document).on('magical-slate:pick-color', this.onPickColor.bind(this));

