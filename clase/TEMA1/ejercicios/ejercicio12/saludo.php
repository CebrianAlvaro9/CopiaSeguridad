<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

    if(isset($_GET['envio'])){
         if(isset($_GET['nombre'])&& !empty($_GET['nombre'])){
            $nombre = $_GET['nombre'];
            echo "<br> Safari te saluda Don " . $_GET['nombre'];
    
        }else{
            
            echo" <a href='nombre.html'>Volver atrás</a> ";

        } 
    }
        ?>
</body>
</html>