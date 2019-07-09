<?php

require_once('conexion.php');

$datos = json_decode(file_get_contents("php://input"));

$res = array('error' => false);

if(isset($_GET['action'])){
    $action = $_GET['action'];
}else{
     echo "no existe la variable action";
     die();
};

if($action == 'login'){

    $email = $datos->email;
    $password = $datos->password;

    $result = $conexion->query("SELECT * FROM `usuario` WHERE `email` = '$email'");

        $users = array();

        $contador = mysqli_num_rows($result);

        if($contador == 0) {
            echo 'El correo no existe';
            die();
         }else {

        while ($row = $result->fetch_assoc()){
            $users = [ 'nombre' => $row['nombre'], 'email' => $row['email'], 'password' => $row['password'] ];
            $res['users'] =  $users;
        };

        
        

        
            if(password_verify( $password , $res['users']['password'] )) {
                $res['users']['password'] = ':)';
                echo json_encode($res);
                die();
             }else{
                 echo "Contraseña invalida";
                 die();
             };
        };
    
        

   
    


   


};


?>