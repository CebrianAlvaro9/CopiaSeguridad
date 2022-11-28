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
      <h1>Lista de jugadores</h1>
      <p>
      <a href="" class="btn btn-primary">Nuevo</a>
      <a href="" class="btn btn-primary">titulares</a>        
      </p>
      <main role="main" class="container">
  <h1>Lista de usuarios  
      <a class="btn btn-primary float-right" href="../user/create">Nuevo</a>
  </h1>
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
            
            foreach($jugadores as $jugador) {?>
                <tr>
                <td><?= $jugador->nombre ?></td>
                <td><?= $jugador->nacimiento->format('Y-m-d H:i:s')?></td>
                <td><?= $jugador->puesto ?></td>
         
         
                <td><a class="btn btn-primary btn-sm" href="../jugador/create/<?= $jugador->id ?>">  Editar </a></td>
                <td><a class="btn btn-primary btn-sm" href="../jugador/titular/<?= $jugador->id ?>">  Titular </a></td>
                </tr>
            <?php } ?>           
        </tbody>
    </table>
</main>
 
    </div>

  </main><!-- /.container -->
  <?php require "../app/views/parts/footer.php" ?>


</body>
<?php require "../app/views/parts/scripts.php" ?>

</html>