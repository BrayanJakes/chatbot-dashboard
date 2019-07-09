

const app = new Vue({


    el: "#appRegistro",
    data: {
        FormularioRegistro: {
            nombre: '',
            email: '',
            password: '',
            password2: ''
        }
    },
    methods: {
        Registrar(e){
            e.preventDefault();

            if(this.FormularioRegistro.password != this.FormularioRegistro.password2){
               return app.notificacion('top','center', 'las contraseña no coincide', 'warning', 'danger');

            }

            let formulario = { nombre: app.FormularioRegistro.nombre, email: app.FormularioRegistro.email, password: app.FormularioRegistro.password }

           axios.post('./phpbackend/registroUsuario.php?action=crear', formulario  ).then(response => {
            app.notificacion('top','center', `Usuario ${this.FormularioRegistro.nombre} Registrado con exito`, 'done', 'success');
            setTimeout(() => {
                window.location.href = 'login.php'

            }, 3000)
           })

            

        

        },
        
        notificacion(ubicacion, alineacion, mensaje, icono, color = 'success' | 'warning' | 'primary' | 'info' | 'danger'){

            $.notify({
                icon: icono,
                message: mensaje
          
            },{
                type: color,
                timer: 3000,
                placement: {
                    from: ubicacion,
                    align: alineacion
                }
            });
          }
    }


})