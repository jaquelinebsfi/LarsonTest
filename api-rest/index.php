<?php
    require_once ('../includes/Database.class.php');
    require_once ('../includes/Client.class.php');
// $host="localhost";
// $usuario="root";
// $password="";
// $basededatos='api';

//$dsn='mysql:host='.$host.';dbname='.$basededatos;
//$conexion= new mysqli($host,$usuario,$password,$basededatos);
// $pdo=new PDO($dsn,$usuario,$password);
// $query=$pdo->query('SELECT * FROM tasks');
// while($fila=$query->fetch())
// {
//     echo $fila['title'];
//     echo "<br />";
// }
if($_SERVER['REQUEST_METHOD'] =='GET'){
    Client::consultarall_task();

// Get the data from the request body


    }


    if($_SERVER['REQUEST_METHOD'] =='POST' && isset($_GET['title'])
     && isset($_GET['status'])&& isset($_GET['description'])){
        Client::create_task($_GET['title'],$_GET['status'],$_GET['description']);
    
    // Get the data from the request body


        }

// header("Content-Type: application/json");
// $metodo=$_SERVER['REQUEST_METHOD'];
// print_r($metodo);
// $path=isset($_SERVER['PATH_INFO'])?$_SERVER['PATH_INFO']:"/";
// $buscarId=explode("/",$path);
// $id=($path!=="/")?end($buscarId):null;

// switch($metodo){
//     case 'GET':
     
        
//             consultaSelect($conexion,$id);
        
//         break;
   
//     case 'POST':
//         //echo 'Consulta de registros - POST';
//         insertar($conexion);
//         break;
//     case 'PUT':
//         actualizar($conexion,$id);
          
//          break;
//     case 'DELETE':
//         //echo 'Consulta de registros - DELETE';
//         eliminar($conexion,$id);
           
//     default:
//         echo 'Metodo no permitido';
//         break;

// }

// function consultaSelect($conexion,$id){
//     $sql=($id===null)?"SELECT * FROM usuarios":"SELECT * FROM usuarios where id=$id";
//     $resultado=$conexion->query($sql);
//     if($resultado->num_rows>0){
//         while($fila=$resultado->fetch_assoc()){
//             $datos[]=$fila;
//         }
//         echo json_encode($datos);
//     }else{
//         return json_encode(array('mensaje'=>'No hay registros'));
//     }
// }
// function insertar($conexion){
//     $dato=json_decode(file_get_contents('php://input'),true);
//     $nombre=$dato['Nombre'];
//     print_r($nombre);

//     $sql="INSERT INTO usuarios(Nombre) VALUES ('$nombre')";
//     $resultado=$conexion->query($sql);
//     if($resultado){
//         $dato['id']=$conexion->insert_id;
//         echo json_encode($dato);
//     }else{
//         echo json_encode(array('error'=>'Error al crear usuario'));
//     }
// }
// function eliminar($conexion,$id){
//     $sql="DELETE FROM usuarios WHERE id=$id";
//     $resultado=$conexion->query($sql);
//     if($resultado){
//         echo json_encode(array('mensaje'=>'Usuario eliminado'));
//     }else{
//         echo json_encode(array('error'=>'Error al eliminar usuario'));
//     }
// }
// function actualizar($conexion,$id){
    
//     $dato=json_decode(file_get_contents('php://input'),true);
//     $nombre=$dato['Nombre'];
//     echo "Actualizar usuario con id es : ".$id. " con el dato: ". $nombre;

//     $sql="UPDATE usuarios SET Nombre ='$nombre' WHERE id=$id";
//     $resultado=$conexion->query($sql);
//     if($resultado){
//         echo json_encode(array('mensaje'=>'Usuario actualizado'));
//     }else{
//         echo json_encode(array('error'=>'Error al actualizar el usuario'));
//     }
// }    





















?>