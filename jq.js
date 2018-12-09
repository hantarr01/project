function block(name){
   this.height = 250;
   this.width = 150;
};

function small(name){ 
   this.height = 50;
   this.width = 30;
};

$(Start).click(function(){
	$(block).animate({
		left: '5vw',
		top:'6vh',
		height: '50vh',
		width: '30vw',
		opacity: 0.9,
		fontSize: "16px",
	}); 
	$(photo).animate({
		left: '3vw',
		top:'6vh',
		height: '30vh',
		width: '30vw',
		opacity: 0.9,
	}); 
});

$(Small).click(function(){
	$(block).animate({
		height: '-=5vw',
		width: '-=47vh', 
	}); 
});


$(Big).click(function(){
	$(block).animate({
		height: '+=5vw',
		width: '+=48vh', 
	}); 
});




var i = 5;
while (i) {
  i--;

var exit = block-small;

if (block<small){
		$(block).animate({
			left: '3vw',
			top:'6vh',
			height: '1px',
			width: '1px',
			opacity: 0.1,
			fontSize: "1px",   
		});         
}
};

$(Back).click(function(){
	$(block).animate({
		left: '3vw',
		top:'6vh',
		height: '1px',
		width: '1px',
		opacity: 0.1,
		fontSize: "1px",   
	}); 

	$(photo).animate({
		left: '3vw',
		top:'6vh',
		height: '1px',
		width: '1px',
		opacity: 0.1,
		height: '1px',
		width: '1px',
	}); 
});
