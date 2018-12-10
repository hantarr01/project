$(Start).click(function(){
	$(block).animate({
		left: '5vw',
		top:'6vh',
		height: '50vh',
		width: '30vw',
		opacity: 0.9,
		fontSize: "16px",
	});  
});

$(Small).click(function(){
	$(block).animate({
		height: '-=5vw',
		width: '-=40vh', 
	});
});

$(Big).click(function(){
	$(block).animate({
		height: '+=5vw',
		width: '+=40vh', 
	}); 
});

function Res(){
if ($(Small).click(function(){
	$(block).animate({
	}); 	
	}))
		$(block).animate({
			left: '3vw',
			top:'6vh',
			height: '1px',
			width: '1px',
			opacity: 0.1,
			fontSize: "1px",   
		});         

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
});
