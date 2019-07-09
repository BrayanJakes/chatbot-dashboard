<?php

require_once('conexion.php');

$datos = json_decode(file_get_contents("php://input"));

if(isset($_GET['action'])){
    $action = $_GET['action'];
}else{
     echo "no existe la variable action";
     die();
};


if ($action == 'crear'){
    $nombre = $datos->nombre;
    $email = $datos->email;
    $password = $datos->password;
    $opciones = ['cost' => 12];


    $passwordEncriptado = password_hash($password, PASSWORD_BCRYPT, $opciones);
    
    $res = array('error' => false);
    
    
    $result = $conexion->query("INSERT INTO usuario (`nombre`, `email`, `password`)
     VALUES ('$nombre', '$email', '$passwordEncriptado' )");
    
    
    $res = "Guardado correctamente";
    
   
    
    echo json_encode($res);
    die();
};




?>