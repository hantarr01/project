$(Start).click(function(){
     $(block).animate({
        left: '5vw',
        top:'5vh',
        height: '500px',
        width: '300px',
        opacity: 0.9,
        fontSize: "16px",
    }); 
 $(photo).animate({
       left: '3vw',
       top:'5vh',
       height: '200px',
       width: '300px',
       opacity: 0.9,
    }); 
});
   
$(Back).click(function(){
    $(block).animate({
       left: '3vw',
       top:'5vh',
       height: '1px',
       width: '1px',
       opacity: 0.1,
       fontSize: "1px", 
    }); 
 $(photo).animate({
       left: '3vw',
       top:'5vh',
       height: '1px',
       width: '1px',
       opacity: 0.1,
    }); 
});
  