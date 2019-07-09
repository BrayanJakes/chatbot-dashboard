
<?php

require("../body.php");

?> 


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  
</head>
<body>

    <div class="container my-5">


        <div class="row">
        
        
        
        
        
        
        
        <div class="col-md-12" id="appRegistro" >
                      <div class="card">
                        <div class="card-header card-header-info">
                          <h4 class="card-title">Registro Usuario</h4>
                          <p class="card-category">Ingresa tus datos de registro</p>
                        </div>
                        <div class="card-body">
                    
                        <form class="mt-3" >
          <div class="form-group">
            <label for="exampleInputEmail1">Nombre completo</label>
            <input type="text" class="form-control" v-model="FormularioRegistro.nombre"  aria-describedby="emailHelp" >
           
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" class="form-control" v-model="FormularioRegistro.email"  >
          </div>
        
          <div class="row">
              <div class="col-xm-3 col-md-6">
              <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" v-model="FormularioRegistro.password"  >
          </div>
              </div>
              <div class="col-xm-3 col-md-6">
              <div class="form-group">
            <label for="exampleInputPassword1">Confirmar Contraseña</label>
            <input type="password" class="form-control" v-model="FormularioRegistro.password2" >
          </div>
                  </div>
          </div>
        
        
        
        
         
        
          <button type="submit" class="btn btn-info btn-block" @click="Registrar($event)" >Submit</button>
        </form>
        
        <small class="form-text text-muted text-center">Ya tienes cuentas? <a href="login.php"> Click Aqui </a> </small>
        
        
        
                        </div>
                      </div>
                    </div>
        
        </div>
        
        </div>
        
        
        
        
        
        
        
        
        <script src="https://cdn.jsdelivr.net/npm/vue"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.js"></script>
        <script src="./js/registro.js"></script>
  
</body>
</html>








<!-- 
<?php

require("../footer.php");

?> -->