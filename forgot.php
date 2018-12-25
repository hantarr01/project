<?php  

if(isset($_GET['forgotclick'])) {
 								echo  
 								"<div class = forgotBlock>

 								<p style=position:absolute;right:30px;>Restore password:</p>

 								<form>
 								<input style=position:absolute;top:20px;left:5px;>Email:</input> 
 								<input class=fmEnphp  type=login maxlength=25 size=18 name=password placeholder=Recovery></p>

 								<input type=button class=button onclick='forgot()' style=position:absolute;top:70px;left:5px;>Restore</input>
 								</form>

 								<a href='index1.php' class=aBack>Back</a>

 								</div>";
 							}

?>
