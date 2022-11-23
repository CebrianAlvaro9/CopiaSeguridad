<?php




class App
{

  public $dsn ="mysql:dbname=agenda;host=localhost";
  public $user="root";
  public $bd;
  //constructor de la sesion
  public function __construct()
  {
    

    session_start();
  
    
        try {
            $this->bd = new PDO($this->dsn, $this->user);
            
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
        
    }


  //metodo run carga la app y envia al metodo login

  public function run()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'login';
    }

    $this->$method();
  }

    // Si existe una cookie rederige directamente al home si no se va al login
    
  public function login()
  {
 

    if (isset($_SESSION['name'])) {
     
      header('Location: ?method=home');

      return;
     
    } else {
     
    
      setcookie(session_name(), '', time() - 7200, '/');
      // este else es para borrar la sesion vacia que se crea al entrar al metodo login en el caso de estar los campos vacios de name y password
    }
    

    include('views/login.php');
  }
  
  // Comprueba que los campos se hayan enviado guardas los post en dos variables y crea las sesiones con ellas
  public function auth()

  {
   $nombre= $_POST['name'];
   $sql = "select password from credenciales where usuario='".$nombre."'";
   $hash = $this->bd->query($sql);
  foreach($hash as $fila){
  $contra=$fila[0];    
  }

    if (password_verify($_POST['password'], $contra) && !empty($_POST['name'])) {
      $name = $_POST['name'];
      $password = $_POST['password'];
      $sql = "CREATE TABLE contactos( ".
      "tipo VARCHAR(100) NOT NULL, ".
      "nombre VARCHAR(100) NOT NULL, ".
      "apellido VARCHAR(100), ".
      "email VARCHAR(100), ".
      "direccion VARCHAR(100) NOT NULL, ".
      "numero INT NOT NULL); ";
    
      $create = $this->bd-> prepare($sql);
      $create->execute();
    } else {
      header('Location: ?method=login');
      return;
    }
    $_SESSION['name'] = $name;
    $_SESSION['password'] = $password;
    header('Location: index.php?method=home');
  }


  
  public function home()

  {


    if (!isset($_SESSION['name'])) {
      header('Location: ?method=login');
      return;
    }
    if (isset($_SESSION['deseos'])) {
      $deseos = ($_SESSION['deseos']);
    } else {
      // $deseos = array();
      $deseos = [];
    }
    include('views/home.php');
  }


  //añadir deseos a la lista en este caso un array deseos para posteriormente guardarlos dentro de la sesion deseos
  public function new()
  {


    if (!isset($_POST['new'])) {
      header('Location: index.php?method=home');
      return;
    }
    $new = $_POST['new'];
    if (isset($_SESSION['deseos'])) {
      $deseos = ($_SESSION['deseos']);
    } else {
      $deseos = [];
    }
    $deseos[] = $new;
    $_SESSION["deseos"] = ($deseos);
    header('Location: index.php?method=home');
  }

  // elimina el deseo de la lista que selecciones a traves de su id
  public function delete()
  {
    if (isset($_SESSION['deseos'])) {
      $deseos = $_SESSION['deseos'];
    } else {
      $deseos = [];
    }
    $id = $_GET['id'];
    unset($deseos[$id]);
    $_SESSION['deseos'] = $deseos;
    header('Location: index.php?method=home');
  }

  //para vaciar la lista de deseos g
  public function empty()
  {


    $_SESSION['deseos'] = [];
    // setcookie('deseos', '', time() - 1);
    header('Location: index.php?method=home');
  }
//borra todas las sessiones creadas y redirige al metodo login
  public function close()
  {
    session_destroy();
    setcookie(session_name(), '', time() - 7200, '/');
    header('Location: index.php?method=login');
    $sql = "drop table contactos; ";
  
    $create = $this->bd-> prepare($sql);
    $create->execute();
    


  }

  public function subirfichero(){
   $type= $_FILES["myfile"]['type'];
    if(isset($_POST["envio"])){
      if($_FILES["myfile"]['size']<5242880){
        if($type=='image/png'||$type=='image/jpg'||$type=='application/pdf'){

          echo "Nombre del fichero" . $_FILES["myfile"]['name'];
          echo "<br>Extension del fichero" . $_FILES["myfile"]['type'];
          echo "<br>Tamaño del fichero " . $_FILES["myfile"]['size'];
          $nametemp=$_FILES["myfile"]["tmp_name"];
          $destino = 'uploads/'.$_FILES["myfile"]["name"];
          echo  "<br>". $destino;
         $flag= move_uploaded_file($nametemp,$destino);
          echo $flag ? "fichero subido correctamente" : "<br>fallo en la subida";
          if($flag){
              //subida ok
          }else{
              echo "<p> No has enviado ningun fichero ";
          }
        }
   
         
      } 
  }else{
      echo " No has enviado ningun fichero";
  }
  include('views/home.php');
  }

public function crear(){
  $sql = "CREATE TABLE contactos( ".
  "tipo VARCHAR(100) NOT NULL, ".
  "nombre VARCHAR(100) NOT NULL, ".
  "apellido VARCHAR(100), ".
  "email VARCHAR(100), ".
  "direccion VARCHAR(100) NOT NULL, ".
  "numero INT NOT NULL); ";

  $create = $this->bd-> prepare($sql);
  $create->execute();
}






 public function insertarXML(){

$datos = simplexml_load_file("agenda.xml");

foreach ($datos->children() as $fila) {
   
   $sentencia = $this->bd-> prepare("INSERT INTO contactos (tipo,nombre,apellido,email,direccion,numero) VALUES (?,?,?,?,?,?)");
   $atributo = $fila->attributes(); 

    $tipo1 = $atributo['tipo'];
    $nombre = $fila->nombre;
    $apellido = $fila->apellidos;
    $email=$fila->email;
    $direccion= $fila->direccion;
    $telefono= $fila->telefono;
    $sentencia->bindParam(1,$tipo1);
    $sentencia->bindParam(2,$nombre);
    $sentencia->bindParam(3,$apellido);
    $sentencia->bindParam(4,$email);
    $sentencia->bindParam(5,$direccion);
    $sentencia->bindParam(6,$telefono);
    $sentencia->execute();
}

include('views/home.php');

 }

 public function mostrar(){


  $sql = ("SELECT * FROM contactos");
  $registros =$this->bd->query($sql);
  $contador=0;
  

include('views/home.php');
 }
  
}
