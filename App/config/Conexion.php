<?php
namespace App\config;
use PDO;
use PDOException;
class Conexion
{
    protected $server = "127.0.0.1";
    protected $user = "root";
    protected $name = "siac_sevilla2";
    protected $password = "";
    protected $conexion;
    public function __construct()
    {
        try {
            $this->conexion = new PDO("mysql:host=$this->server;dbname=$this->name",$this->user,$this->password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $err) {
            echo "FALLO EN LA CONEXION: ".$err;
        }
    }
    
}
?>