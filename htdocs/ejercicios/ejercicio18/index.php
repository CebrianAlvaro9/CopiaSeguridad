<?php

require_once "app.php";
$app = new App;

if($_SERVER["REQUEST_METHOD"]==="POST"){

   
    $app->auth();
    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="get">
  <p>Elige la funcion que quieres realizar</p>
  <p>
    <input type="submit" name="respuesta" value="Index">
    <input type="submit" name="respuesta1" value="Login">
  
  </p>
 
 
</form>
<p>------------------------------------------------------</p>
<br>

<?php





if (isset($_GET['respuesta'])) {

    $app->index();
    }
    if (isset($_GET['respuesta1'])) {
            
        $app->login();
         
}
        
 


?>
    
</body>
</html>