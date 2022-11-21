<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ejemplo</title>
</head>

<body>
    <h2>Formulario</h2>
    <form method="get" action="">
        <label>Nombre</label><input type="text" minlength="3" value="" name="nombre"> <br>

        <input type="submit" value="enviar">
    </form>

    <h2>Datos enviados</h2>
    <?php

    $array = ["Russell", "Paco", "Juan"];


    if (isset($_GET['nombre']) && !empty($_GET['nombre'])) {
        $nom = $_GET['nombre'];

        if (in_array($nom, $array)) {
            echo "Hola " . $nom;
        } else {
            echo $nom . " no es valido.";
        }
    }

    ?>
</body>

</html>