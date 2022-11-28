<!doctype html>
<html lang="es">

<head>
  <?php require "../app/views/parts/head.php" ?>
</head>

<body>

   <!-- !! COMPLETAR !! -->
   
  <?php require "../app/views/parts/header.php" ?>

  <main role="main" class="container">
    <div class="starter-template">
      <h1>Titulares</h1>

      <table class="table table-striped">
        <thead>
            <tr>
            <th>Nombre</th>
          <th>Puesto</th>
          <th>F. nacimiento</th>
            <th></th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            
        <?php 
             $titulares=$_SESSION['titulares'];

            foreach($titulares as $id =>$titular) {?>
                <tr>
                <td><?= $titular->nombre ?></td>
                <td><?= $titular->nacimiento->format('Y-m-d H:i:s')?></td>
                <td><?= $titular->puesto ?></td>
         
         
                <td><a class="btn btn-primary btn-sm" href="../jugador/quitar/<?= $titular->id ?>">  quitar </a></td>
               
                </tr>
            <?php } ?>           
        </tbody>
    </table>

    </div>
    

  </main><!-- /.container -->
  


</body>
<?php require "app/views/parts/scripts.php" ?>

</html>