<?php
class Database{
    private $host='localhost';
    private $usuario='root';
    private $password='';
    private $basededatos='api';

//     $host="localhost";
// $usuario="root";
// $password="";
// $basededatos='api';
    //$dsn='mysql:host='.$host.';dbname='.$basededatos;
//$conexion= new mysqli($host,$usuario,$password,$basededatos);
//$pdo=new PDO($dsn,$usuario,$password);

    public function getConnection(){
        $hostDB='mysql:host='.$this->host.';dbname='.$this->basededatos.';';
        //$hostDB='mysql:host='.$host.';dbname='.$basededatos;

        try{
            $conexion=new PDO($hostDB,$this->usuario,$this->password);
            //$conexion=new PDO($hostDB,$usuario,$password);
            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
            return $conexion;
        }catch(PDOException $e){
            die("ERROR: ".$e->getMessage());
            
        }
    
    }

}




?>