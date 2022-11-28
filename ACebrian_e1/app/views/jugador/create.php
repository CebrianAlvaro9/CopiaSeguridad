<!doctype html>
<html lang="es">

<head>
  <?php require "../app/views/parts/head.php" ?>
</head>

<body>

  <!-- !! COMPLETAR !! -->
  
  <?php require "../app/views/parts/header.php" ?>

  <main role="main" class="container">    
    <h1>Alta de jugador</h1>

    <form class="form" action="../jugador/store" method="POST">

    <div class="form-group">
        <label for="name">Nombre:</label>
        <input class="form-control" type="text" name="nombre"> 
    </div>
    <div class="form-group">
        <label for="birthdate">Fecha Nacimiento:</label>
        <input class="form-control" type="date" name="nacimiento"> 
    </div>

    <div class="form-group">
        <label for="Puesto"></label>
        <select name="puesto">
        <option value="Delantero">Delantero</option>
        <option value="Defensa" >Defensa</option>
        <option value="Defensa" >Centrocampista</option>
        <option value="Defensa" >Portero</option>
        </select>
    </div>
    <div>
    
        <p>
        <label for="mifich" >foto </label>
        <input type="file" name="myfile" id="mifich">
       
        </p>
       
     

    </div>

    <div class="form-group">
        <input class="form-control" type="submit" value="Enviar"> 
    </div>

    </form>
</main>

<main role="main" class="container"> 

    <h1>EDITAR JUGADOR</h1>

    <form class="form" action="../jugador/update/<?= $jugador->id ?>" method="POST">

    <div class="form-group">
        <label for="name">Nombre:</label>
        <input class="form-control" type="text" name="nombre"> 
    </div>
    <div class="form-group">
        <label for="birthdate">Fecha Nacimiento:</label>
        <input class="form-control" type="date" name="nacimiento"> 
    </div>

    <div class="form-group">
        <label for="Puesto"></label>
        <select name="puesto">
        <option value="Delantero">Delantero</option>
        <option value="Defensa" >Defensa</option>
        <option value="Defensa" >Centrocampista</option>
        <option value="Defensa" >Portero</option>
        </select>
    </div>
 

    <div class="form-group">
        <input class="form-control" type="submit" value="Enviar"> 
    </div>

    </form>
</main>

  </main><!-- /.container -->
  <?php require "../app/views/parts/footer.php" ?>

</body>
<?php require "../app/views/parts/scripts.php" ?>

</html>