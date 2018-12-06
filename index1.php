 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta http-equiv="X-UA-Compatible" content="ie=edge">

 	<link href="css/style1.css" rel="stylesheet" type="text/css"> 
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
 	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet"> 
 	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet"> 
 	<link rel="shortcut icon" href="/img/project.ico" type="image/x-icon">

 	<title>Project</title>

 </head>

 <body>



 	<header>
 		<div class="row">
 			<div class=" col-xs-3 col-md-6 col-lg-12">
 				<div  class="lText">
 					<h2>&#9884 Project</h2> 
 				</div>

 				<div class="ppoisk">
 					<form>
 						<p><input class="poisk"  type="search" placeholder="Search in site..."> 
 							<input class="poisk" type="submit"  value="Search &#128270" onclick='poisk()'></p>
 						</form>
 					</div>
 				</div>
 			</div>
 		</header>


 		
 		<div class="slBlock">
 			<div class="slider">
 				<img src="img/1.jpg" width="400px" height="220px;">
 				<img src="img/2.jpg" width="400px" height="220px;">
 				<img src="img/3.jpg" width="400px" height="220px;">
 				<img src="img/4.jpg" width="400px" height="220px;">
 				<img src="img/5.jpg" width="400px" height="220px;">
 			</div>
 		</div>


 		<div class="oBlock">

 			<div class="txEn"><h1>To enter the Project:</h1></div>

 			<div class="ent">

 				<form  action="funcphp.php" method="post">
 					<p><strong>Email:</strong> 
 						<input class="fmEn" type="email" maxlength="25" size="25"  placeholder="Your email" name="Email" 
 						style="margin-left: 28px; color: black;" ></p>

 						<p><strong>Password:</strong> 
 							<input class="fmEn" type="password" maxlength="25" size="25"  placeholder="Your password"  name="Password" style="color: black;"></p>

 							<p><input type="checkbox" value="a1">Shared computer</p>

 							<input type="submit" value="Enter" class="fmEn" style="width: 90px; height: 30px; color: black;">
 							
 							<div class="reg">
 								
 								<input value="Registration" type="button" onclick="location.href='index2.html'" class="button"/>
 							</div>	
 						</form>


 						<div class="reg">


 							<?php  

 							if(isset($_GET['forgotclick'])) {
 								echo  
 								"<div class = forgotBlock>

 								<p style=position:absolute;right:30px;>Restore password:</p>


 								<strong style=position:absolute;top:20px;left:5px;>Email:</strong> 
 								<input class=fmEnphp  type=login maxlength=25 size=18 name=password placeholder=Recovery></p>

 								<button class=button onclick='forgot()' style=position:absolute;top:70px;left:5px;>Restore</button>

 								<a href='index1.php' class=aBack>Back</a>

 								</div>";
 							}

 							?>

 							<a href='index1.php?forgotclick=true' class="forgot"> Forgot the password?</a>


 						</div>


 					</div>

 				</div>


 				<?php

 				$p = "no";

 				if(isset($_POST['poisk'])) $p = $_POST['poisk'];

 				echo "Rez=".$p;

 				?>


 				<footer>

 					<p>Feedback:<a href="https://github.com/hantarr01">My github</a></p>

 					<p class="com">To leave a comment:</p>

 					<div class="f1">		
 						<button "onclick='leave()'>Leave</button>
 					</div>


 					<div class="f2">
 						<textarea class="form-control" rows="3" maxlength="250" style="width: 100px; height: 50px;">
 						</textarea>
 					</div>



 				</footer>

 				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 				<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
 				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integritsha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 				<script src="script.js"></script>
 			</body>