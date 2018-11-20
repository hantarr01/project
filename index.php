 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta http-equiv="X-UA-Compatible" content="ie=edge">

 	<link href="css/style.css" rel="stylesheet" type="text/css">

 	<title>TestPHP</title>

 </head>

 <body>


<?php

$a = 1;

$b = 2;

if ($a < $b){

echo "<div class=b1>Условие ВЕРНО и я вывелся</div>";

}

else{

 echo "<div class=b2>Условие НЕВЕРНО и я вывелся</div>";

}

?>


<?php
 function getz(){

   echo "<div class=b3> Отправляю Гет запрос, только это тайна ;). Серьезно не пытайся меня взломать! </div>";

 }
  
  if (isset($_GET['Zapros_sobstvenno'])) {

     getz();

  }

?>

<div class="b4">
<a href='index.php?Zapros_sobstvenno=true'>Тыкай ;)</a>
</div>

</body>