const app = new Vue({


    el: "#appLogin",
    data: {
        FormularioLogin: {
            email: '',
            password: ''
        }
    },
    methods: {
        login(e){
            e.preventDefault();

        axios.post('./phpbackend/loginUsuario.php?action=login', app.FormularioLogin)
        .then((resp) => {
           
            if(resp.data === 'Contraseña invalida'){
              return  app.notificacion('top', 'center', `Contraseña invalida`, 'warning', 'danger')
            };
            if(resp.data === 'El correo no existe'){
              return  app.notificacion('top', 'center', `Email no existe`, 'warning', 'danger')

            }
            if(resp.data.error == false){
                console.log(resp);
                axios.post('auth.php?action=inicioSession', resp.data.users).then((resp) => {
                   window.location.href = 'dashboard.php'
                });
            }
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