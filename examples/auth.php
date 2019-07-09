<?php


$datos = json_decode(file_get_contents("php://input"));

if(isset($_GET['action'])){
  if($_GET['action'] == 'inicioSession'){
    session_start();
    $_SESSION['email'] = $datos->email;
    $_SESSION['nombre'] = $datos->nombre;
    header('location: login.php');
  }
};


?>