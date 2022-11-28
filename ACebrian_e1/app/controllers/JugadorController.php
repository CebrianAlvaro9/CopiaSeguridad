<?php
namespace App\Controllers;
require_once('../app/models/Jugador.php');
use App\Models\Jugador;

class JugadorController
{

    function __construct()
    {
        // echo "En JugadorController";
    }

    public function index()
    {
         
        $jugadores = Jugador::all(); 
     
        require "../app/views/jugador/index.php";        
    }

    public function create()

    {
        

        require "../app/views/jugador/create.php";
    }

    public function edit($arguments)
    {
        $id = $arguments[0];
        //buscar datos
        $jugador = Jugador::find($id);
        //mostrar vista

        require "../app/views/jugador/create.php";
    }

    public function update($arguments)
    {
        $id = $arguments[0];
        //crear objeto
        $jugador = Jugador::find($id);
        $jugador->nombre = $_POST['nombre'];
        $jugador->nacimiento = $_POST['nacimiento'];
        $jugador->puesto= $_POST['puesto'];
        $jugador->save();
        
        // "INSERT ...."
        // "UPDATE ...."
        //redirigir a la lista
        header('Location:../index');

    }
  

    public function store()
    {       
         //crear objeto
         $jugador = new Jugador;
         $jugador->nombre = $_POST['nombre'];
         $jugador->nacimiento = $_POST['nacimiento'];
         $jugador->puesto= $_POST['puesto'];
 
         $jugador->insert(); 
            $nametemp=$_FILES["myfile"]["tmp_name"];
            $destino = 'fotos/'.$_FILES["myfile"]["name"];
              
            move_uploaded_file($nametemp,$destino);
              
              
           
      
         
        // !!  COMPLETAR  !!
        header('Location: /jugador');
    }

    public function titular($arguments)
    {
        $_SESSION['titulares'] = [];
        $id = $arguments[0];
        //buscar datos
        $titular = Jugador::find($id);
        $titulares[] = $titular;
        $_SESSION["titulares"] = ($titulares);
        // !!  OMPLETAR  !!
        header('Location: /jugador');
    }
    public function titulares()
    {
        // !!  COMPLETAR  !!


        require "../app/views/jugador/titulares.php";        
    }
    public function quitar($arg)
    { 

        if (isset($_SESSION['titulares'])) {
            $titulares = $_SESSION['titulares'];
          } else {
            $titulares = [];
          }
        
        $id = $_POST['id'];
        unset($titulares[$id]);

        $_SESSION['titulares'] = $titulares;
        // !!  COMPLETAR  !!
        header('Location: /jugador/titulares');
    }
}
