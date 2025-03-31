<?php
require_once ('Database.class.php');
class Client{
    
    public static function create_task($title,$status,$description){
        $basededatos=new Database();
        $conexion=$basededatos->getConnection();
        $stmt= $conexion->prepare('INSERT INTO tasks (title,status,description) 
        VALUES (:title, :status, :description)');
        
        $stmt->bindParam(':title',$title);
        $stmt->bindParam(':status',$status);
        $stmt->bindParam(':description',$description); 
       
        if($stmt->execute()){
           header('HTTP/1.1 201 Tarea creada correctamente');
        }else{header('HTTP/1.1 404 La tarea no se ha creado correctamente');
        }
    }
    public static function update_task($id,$title,$status,$description){
        $basededatos=new Database();
        $conexion=$basededatos->getConnection();
        $stmt= $conexion->prepare('UPDATE tasks SET title=:title, status=:status, 
        description=:description WHERE id = :id');
        // $created_at = date('Y-m-d H:i:s'); // Get the current date and time in the correct format
        // $updated_at = date('Y-m-d H:i:s'); // Get the current date and time in the correct format
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':title',$title);
        $stmt->bindParam(':status',$status);
        $stmt->bindParam(':description',$description); 
        
        // $stmt->bindParam(':created_at',$created_at);
        // $stmt->bindParam(':updated_at',$updated_at); 
        
        if($stmt->execute()){
           header('HTTP/1.1 201 Tarea actualizada correctamente');
        }else{              
           header('HTTP/1.1 404 La tarea no se pudo actualizar');
        }
    }
    public static function delete_task($id){
            $basededatos=new Database();
            $conexion=$basededatos->getConnection();
            $stmt= $conexion->prepare('DELETE FROM tasks WHERE id = :id');
            $stmt->bindParam(':id',$id);
            
            
            if($stmt->execute()){
               header('HTTP/1.1 201 Tarea eliminada correctamente');
            }else{              
               header('HTTP/1.1 404 La tarea no se ha eliminado correctamente');
            }   
    }
    public static function consultarall_task(){
        $basededatos=new Database();
        $conexion=$basededatos->getConnection();
        $stmt= $conexion->prepare('SELECT * FROM tasks');
       
        
        if($stmt->execute()){
            $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($result);
           header('HTTP/1.1 201 Tareas consultadas');
        }else{              
           header('HTTP/1.1 404 No se han encontrado tareas');
        }
    }
    public static function consultaid_task($id){
        $basededatos=new Database();
        $conexion=$basededatos->getConnection();
        $stmt= $conexion->prepare('SELECT * FROM tasks WHERE id = :id');
        $stmt->bindParam(':id',$id);
       
        
        if($stmt->execute()){
            $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
         
            echo json_encode($result);
           header('HTTP/1.1 201 Tareas consultadas');
            
        }else{              
           header('HTTP/1.1 404 No se han encontrado tareas');
        }
    }


}

?>