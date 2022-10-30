
<?php 
class App
{
  public function __construct($name = "Aplicación PHP")
  {
    // echo "Consturyendo la app <hr>";
    $this->name = $name;
    $this->module = "Desarrollo Web en Entorno Servidor";
    $this->teacher = "Rafael Cabeza";
    $this->student = "Alvaro Cebrian";
  }


public function index()
{
  echo "Estamos en el index<br>";
  echo "Estos es $this->name<br>";
  echo "Me llamo $this->student<br>";
  echo "Estamos estudiando $this->module con el profesor $this->teacher<br>";
}

  public function run()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'index';
    }
   $this->$method();      
  }

  public function login(){

    if (isset($_COOKIE['usuario'])){
        header('Location: home.php');

    }else{  echo "<form  name='miformu'  action="; echo htmlspecialchars($_SERVER['PHP_SELF']); echo" method='post'>
    
   <label for='usuario' name='usuario'>Usuario</label><input type='text' minlength='3'  name='usuario' id='usuario' > <br>
   <label for= 'password'>contraseña</label><input type='password'  name='password' id='password'> <br>
   <input type='submit'value='enviar' id='envio' name='envio'>
    </form> ";}

 
 
  }

  public function auth(){

  
    if(isset($_POST['envio'])){
      
       $contra= $_POST['password'];

        if(!empty($_POST['usuario'])&&$_POST['password']&& !isset($_COOKIE['usuario'])){
            $miarray=[$_POST['usuario'],$_POST['password']];
            $infoguardar = serialize($miarray);
          setcookie("usuario",$infoguardar,time()+3600);
          header('Location: home.php');
         return;
        }
        if(!empty($_POST["usuario"])&& !empty($_POST["password"])){
         //redirige a home
         

        }else{
                header('Location: index.php');
                
                return;
            }

    }
    include('home.php');
}

public function prueba(){
    echo "hola";
}

public function home(){

    echo "Hola ";

}
 public function logout(){

    setCookie("usuario","", time() -60);
   
    echo" <a href='index.php'>Volver a iniciar sesion</a> ";

    include('home.php');
}


}