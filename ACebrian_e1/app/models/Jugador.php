<?php
namespace App\Models;

require_once '../core/Model.php'; # preparo el acceso a otro fichero
use PDO;
use DateTime;
use Core\Model;



class Jugador extends Model
{
    public function __construct()
    {
        $this->nacimiento = \DateTime::createFromFormat('Y-m-d H:i:s', $this->nacimiento);
    }

    public static function find($id) 
    {
        $db = Jugador::db();

        $statement = $db->prepare('SELECT * FROM jugadores WHERE id=:id');
        $statement->execute(array(':id' => $id));        
        $statement->setFetchMode(PDO::FETCH_CLASS, Jugador::class);
        $jugador = $statement->fetch(PDO::FETCH_CLASS);
        return $jugador;
    }    
    public static function all()
    {
        $db = Jugador::db();
        $statement = $db->query("SELECT * FROM jugadores");
        $jugadores = $statement->fetchAll(PDO::FETCH_CLASS, Jugador::class);

        return $jugadores;
    }
   
    public function insert()
    {
        $db = Jugador::db();
        $statement = $db->prepare('INSERT INTO jugadores(`nombre`, `nacimiento`, `puesto`) VALUES(:nombre, :nacimiento, :puesto)');
        $data = [
            ':nombre' => $this->nombre,
            ':nacimiento' => $this->nacimiento,
            ':puesto' => $this->puesto
        ];
        return $statement->execute($data);
    }

    public function save()
    {   $db = Jugador::db();
        $statement = $db->prepare('UPDATE jugadores SET `nombre`=:nombre, `nacimiento`=:nacimiento, `puesto`=:puesto WHERE id=:id');
        $data = [
            ':id' => $this->id,
            ':nombre' => $this->nombre,
            ':nacimiento' => $this->nacimiento,
            ':puesto' => $this->puesto
        ];
        return $statement->execute($data);
    }
}