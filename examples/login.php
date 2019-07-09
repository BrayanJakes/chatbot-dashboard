
<?php

require("../body.php");

?>


<div class="container my-5">


<div class="row">



<div class="col-md-12" id="appLogin">
              <div class="card">
                <div class="card-header card-header-info">
                  <h4 class="card-title">Login</h4>
                  <p class="card-category">Ingresa tus datos de session</p>
                </div>
                <div class="card-body ">
                       
                <form class="mt-3" >
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" v-model="FormularioLogin.email" >
           
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password </label>
            <input type="password" class="form-control" v-model="FormularioLogin.password"   >
          </div>
        

        
        
        
         
        
          <button type="submit" class="btn btn-info btn-block" v-bind:disabled="FormularioLogin.password.length < 8" @click="login($event)" >Submit</button>
        </form>
        
        <small class="form-text text-muted text-center"  >Aun no tienes cuentas? <a href="registro.php"> Click Aqui </a> </small>
        
        
                </div>
              </div>
            </div>

</div>


</div>





<script src="https://cdn.jsdelivr.net/npm/vue"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.js"></script>
        <script src="./js/login.js"></script>






<?php

require("../footer.php");

?>