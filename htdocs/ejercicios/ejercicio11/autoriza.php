<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Pagina de chequeo libro:</h1>
    <?php 
    if(isset($_GET['envio'])){
         if(isset($_GET['titulo'])&& !empty($_GET['titulo'])){
            $titulo = $_GET['titulo'];
            echo "<br> Titulo del libro introducido es : " . $_GET['titulo'];
    
        }else{
            echo "<br> No has escrito ningun titulo";
        }}
        if(isset($_GET['envio'])){
            if(isset($_GET['editorial'])&& !empty($_GET['editorial'])){
               $editorial = $_GET['editorial'];
               echo "<br> Editorial del libro introducido es : " . $_GET['editorial'];
       
           }else{
               echo "<br> No has escrito ninguna editorial";
           }}
           if(isset($_GET['envio'])){
            if(isset($_GET['autor'])&& !empty($_GET['autor'])){
               $autor = $_GET['autor'];
               echo "<br> autor del libro introducido es : " . $_GET['autor'];
       
           }else{
               echo "<br> No has escrito ningun autor";
           }}
           if(isset($_GET['envio'])){
            if(isset($_GET['pag'])&& !empty($_GET['pag'])){
               $pag = $_GET['pag'];
               echo "<br> paginas del libro introducido es : " . $_GET['pag'];
       
           }else{
               echo "<br> No has escrito paginas";
           }}
           
    ?>
</body>
</html>