<aside class="formHome" style="width: 100%; display: flex; flex-direction: column; align-items: center;">
    <!-- Logo y Descripción -->
    <img src="img/logo.png" alt="logo habilitapro" style="width: 60%; margin-bottom: 3%;">
    <p style="font-size: 0.8vw; margin-bottom: 5%;">Documentación y habilitación en salud sin complicaciones</p>

    <!-- Formulario de Registro -->
    <form action="/register" method="POST" id="submitRegister" style="width: 100%; margin-top: 3%;" autocomplete="off" onsubmit="return validateForm()">
        @csrf

        <!-- Campo de Nombre -->
        <div style="margin-bottom: 16px; position: relative;">
            <input type="text" name="name" id="name" placeholder="Nombre" style="width: 100%; padding: 12px 40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 16px; outline: none; background-color: #FAFBFE; color: #333;">
            @error('name')
                <script>
                    window.onload = function() {
                        showAlert('Por favor escriba su nombre', 'alerta');
                    }
                </script>
            @enderror
            <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                <img src="https://img.icons8.com/material-outlined/24/cccccc/user.png" alt="User Icon" />
            </span>
        </div>

        <!-- Campo de Email -->
        <div style="margin-bottom: 16px; position: relative;">
            <input type="email" autocomplete="new-email" name="email" id="email" placeholder="Email" style="width: 100%; padding: 12px 40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 16px; outline: none; background-color: #FAFBFE; color: #333;">
            @error('email')
                <script>
                    window.onload = function() {
                        showAlert('Ya existe una cuenta con este email', 'error');
                    }
                </script>
            @enderror
            <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                <img src="https://img.icons8.com/material-outlined/24/cccccc/email-open.png" alt="Email Icon" />
            </span>
        </div>

        <!-- Campo de Contraseña -->
        <div style="margin-bottom: 16px; position: relative;">
            <input type="password" autocomplete="new-password" name="password" id="password" placeholder="Contraseña" style="width: 100%; padding: 12px 40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 16px; outline: none; background-color: #FAFBFE; color: #333;">
            @error('password')
                <script>
                    window.onload = function() {
                        showAlert('Por favor escriba una contraseña válida', 'alerta');
                    }
                </script>
            @enderror
            <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                <img src="https://img.icons8.com/material-outlined/24/cccccc/lock-2.png" alt="Password Icon" />
            </span>
        </div>

        <!-- Políticas y Tratamiento de Datos -->
        <div style="display: flex; align-items: center; margin-bottom: 16px;">
            <input type="checkbox" id="rememberMe" name="remember" style="width: 16px; height: 16px;">
            <label for="rememberMe" style="margin-left: 8px; font-size: 14px; color: #666;">Aceptar políticas</label>
            <a href="#tratamientodatos" style="margin-left: auto; font-size: 14px; color: #47A1A8; text-decoration: none;">Tratamiento de datos</a>
        </div>

        <!-- ReCaptcha v3 -->
        {!! RecaptchaV3::field('register') !!}

        <!-- Botón de Envío -->
        <button type="submit" class="btn btn-primary btn-lg" style="width: 100%; background-color: #47A1A8; border: none; font-size: 1vw; font-weight: 600; color: #fff; aspect-ratio: 9/1; border-radius: 14px;">
            Registrar
        </button>
    </form>

    <!-- Mensaje de Sesión si existe -->
    @if(session("answer"))
        
    @endif 

    <!-- Mostrar todos los errores de validación si existen -->
    @if($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <script>
                        
                        /*alert('{{ $error }}');

                        window.onload = function() {
                            showAlert('{{ $error }}', 'error');
                        }*/

                    </script>
                @endforeach
            </ul>
        </div>
    @endif

</aside>

<script>
    function validateForm() {
        let name = document.getElementById('name').value;
        let email = document.getElementById('email').value;
        let password = document.getElementById('password').value;
        let rememberMe = document.getElementById('rememberMe').checked;

        // Validación de campos vacíos
        if (name === "") {
            showAlert("Debes usar un *Nombre* valido", "alerta");
            return false;
        }

        if (email === "") {
            showAlert("No es un *Email* valido", "alerta");
            return false;
        }

        if (password === "") {
            showAlert("El campo *Contraseña* no es valida ", "alerta");
            return false;
        }

        // Validación de email
        let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            showAlert("Por favor ingrese un correo electrónico válido", "error");
            return false;
        }

        // Validación de contraseña
        if (password.length < 6) {
            showAlert("La contraseña debe tener al menos 6 caracteres", "error");
            return false;
        }

        // Validación de checkbox
        if (!rememberMe) {
            showAlert("Debe aceptar las políticas", "alerta");
            return false;
        }

        // Validación de reCaptcha
        if (!grecaptcha.getResponse()) {
            showAlert("Debe verificar que no es un robot", "error");
            return false;
        }

        return true;
    }
</script>
