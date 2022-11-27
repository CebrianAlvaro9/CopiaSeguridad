<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p> PRUEBA </p>
<?php 
echo $product->id; 
echo $produc->name; 
var_dump($product);

    foreach($product as $item):?>
<h1>Detalle del producto <?= $item->id ?></h1>
<ul>
    <li><strong>Nombre: </strong><?= $item->name?></li>
    <li><strong>precio: </strong><?= $item->price?></li>
    <li><strong>fecha compra: </strong><?= $item->fecha_compra ?></li>

    
    <?php endforeach; ?>

</ul>
</body>
</html>