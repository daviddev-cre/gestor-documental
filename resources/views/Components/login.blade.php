<aside class="formHome" style="width:100%; display: flex; flex-direction:column; align-items: center;">

    <!-- Logo y Descripción -->
    <img src="img/logo.svg" alt="logo habilitapro" style="width:60%; margin-bottom: 3%;">
    <p style="font-size:0.8vw;">Documentación y habilitación en salud sin complicaciones</p>

    <!-- Botones de Inicio de Sesión con Google y Facebook -->
    <div style="width:100%; display: flex; justify-content: space-between;">
        <button style="width:48%; min-height:40px; display: flex; align-items: center; justify-content: center; border: 2px solid #F6F8FB; border-radius: 8px; background-color: #fff; color: #333; font-size: 16px; cursor: pointer; transition: all 0.3s;">
            <img src="https://img.icons8.com/color/24/000000/google-logo.png" alt="Google">
            Google
        </button>
        
        <button style="width:48%; min-height:40px; display: flex; align-items: center; justify-content: center; border: 2px solid #F6F8FB; border-radius: 8px; background-color: #fff; color: #333; font-size: 16px; cursor: pointer; transition: all 0.3s;">
            <img src="https://img.icons8.com/color/24/000000/facebook-new.png" alt="Facebook">
            Facebook
        </button>
    </div>

    <!-- Separador -->
    <div style="width: 100%; display: flex; align-items: center; margin: 16px 0;">
        <hr style="flex: 1; border: none; border-top: 2px solid #333;">
        <span style="padding: 0 10px;">O ingresa con tu email</span>
        <hr style="flex: 1; border: none; border-top: 2px solid #333;">
    </div>

    <!-- Formulario de Inicio de Sesión -->
    <form action="/login" method="POST" style="width:100%;" autocomplete="off">
        @csrf

        <!-- Campo de Email -->
        <div style="margin-bottom: 16px; position: relative;">
            <input id="emailformulario" type="email" name="email" placeholder="Email" style="width: 100%; padding: 12px 40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 16px; background-color: #FAFBFE; color: #333;">
            <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                <img src="https://img.icons8.com/material-outlined/24/cccccc/email-open.png" alt="Email Icon">
            </span>
            @if($errors->has('email'))
                <!--<div> Por favor escriba el email</div>-->
                <script>
                    window.onload = function() {
                        showAlert('Por favor escriba un Email valido', 'error'); // success o error
                    }
                </script>
            @endif
        </div>

        <!-- Campo de Contraseña -->
        <div style="margin-bottom: 16px; position: relative;">
            <input id="passwordformulario" autocomplete="new-password" type="password" name="password" placeholder="Contraseña" style="width: 100%; padding: 12px 40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 16px; background-color: #FAFBFE; color: #333;">
            <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                <img src="https://img.icons8.com/material-outlined/24/cccccc/lock-2.png" alt="Password Icon">
            </span>
            @if($errors->has('password'))
                <!--<div> Por favor escriba la contraseña</div>-->
                <script>
                    window.onload = function() {
                        showAlert('Por favor escriba la contraseña', 'alerta'); // success o error
                    }
                </script>
            @endif
        </div>

        <!-- Recordarme y Olvidé mi Contraseña -->
        <div style="display: flex; align-items: center; margin-bottom: 16px;">
            <input type="checkbox" name="remember" style="width: 16px; height: 16px;">
            <label for="rememberMe" style="margin-left: 8px; font-size: 14px; color: #666;">Recordarme</label>
            <p onclick="recuperarpasword()" style="cursor:pointer; margin-left: auto; font-size: 14px; color: #47A1A8; text-decoration: none;">Olvidé mi contraseña</p>
        </div>

        <div id="modalrecuperarcontraseña" style="z-index:9999999; display:none; position:fixed; width:100vw; height:100vh; background-color:rgba(50, 50, 50, 0.8); position:fixed; top:0; left:0; padding:0; margin:0; z-index: 99999; align-items:center; justify-content:center;">
            <div style="position:relative; Width:50vw;height:50vh;;background-color:#ffffff; margin:0;padding:0;border-radius:12px; display:flex; flex-direction:column; align-items:center; justify-content:center;">
                <img src="img/logo.svg" alt="logo" style="width:30%;">
                <p style="padding-top:30px; width:50%;text-align:center; font-size:1.1vw; line-height:1.2;">Te enviaremos un correo electrónico con las instrucciones para recuperar tu contraseña</p>
                <input id="emailinvitacion" type="email" autocomplete="off" placeholder="Email de recuperacion" style=" text-align:center;width:50%;height:30px;margin-top:10px;border-radius:12px;border:2px solid #47A1A8;">
                <div onclick="enviarrecuperarpassword()" style="background-color:#47A1A8; margin-top:15px; width:200px; height:35px; border-radius:9px; display:flex; align-items:center; justify-content:center; cursor:pointer; color:#ffffff;">Enviar invitación </div>
                <p onclick="recuperarpasword()" style="margin-top:20px; color:#47A1A8; cursor:pointer;">Cerrar</p>
            </div>
        </div>

        

        <!-- Botón de Enviar -->
        <button type="submit" style="width:100%; background-color:#47A1A8; border:none; font-size:1vw; font-weight: 600; color:#fff; aspect-ratio:9/1; border-radius:14px;">
            Ingresar
        </button>
    </form>

    <script>
        function recuperarpasword(){
            var modal = document.getElementById("modalrecuperarcontraseña");
            if (modal.style.display === "none" || modal.style.display === "") {
                modal.style.display = "flex"; // Muestra el modal
            } else {
                modal.style.display = "none"; // Oculta el modal
            }
        }

        function enviarrecuperarpassword(){
            let emailarecuperar = document.getElementById("emailinvitacion").value;
            if(emailarecuperar != ""){
                showAlert('Correo de recuperacion enviado', 'success');   
                recuperarpasword();
            }else{
                showAlert('El campo *Email* no puede estar vacío', 'error');  
            }

            
        }
    </script>
    


    <!-- Mensaje de Respuesta -->
    @if(session("answer"))
        <script>
            window.onload = function() {
                showAlert('{{ session("answer") }}', 'error');   
            }
        </script>
    @endif 

</aside>
