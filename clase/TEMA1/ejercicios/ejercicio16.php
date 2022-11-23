<!DOCTYPE html>
<html><head>
  <meta charset="UTF-8">
  <title>ejemplo</title>
</head><body>
  <h2>Lista con formularios:</h2>
  <form action="">
    <input type="text" name="nombres[]">
   
    <input type="submit" value="Nuevo">
  
    <hr>
    <?php
    if (isset($_GET['nombres'])) {
      
      foreach($_GET['nombres'] as $nombre) {
        
        echo '<input type="hidden" name="nombres[]" value="' . $nombre . '">';
        echo "<ul><li>".$nombre."</li></ul>";
      }
      // el input hidden nos permite que se vayan almacenando en ve de sustituyendo poco a poco
    }
    ?>
  </form>

  
</body></html>