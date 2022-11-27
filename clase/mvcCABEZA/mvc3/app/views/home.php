
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Sticky Footer Navbar Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  </head>

  <body>



  <h1>Inventario de Productos aa</h1>
    <table>
    <?php 
    foreach($products as $product):
 ?>
        <tr>
            <td> Identificador: <?= $product->id ?></td>
            <td>Descripcion: <a href="../public/product/show&id=<?= $product->id ?>"><?= $product->name?></a></td>
        </tr>
        <?php endforeach; ?>


 
  </body>
</html>
