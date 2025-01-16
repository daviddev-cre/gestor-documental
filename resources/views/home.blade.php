

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Habilita.Pro</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}" >


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">

    <!-- Recaptcha -->
    {!! RecaptchaV3::initJs() !!}

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/css/home.css','resources/js/app.js'])
    @vite('resources/js/alertas.js')

</head>
<body style="width: 100vw; height: 100vh; margin: 0; padding: 0; background-color: #F2F3F6; display: flex; align-items: center; justify-content: center;">
    
    <!-- Container -->
    <div class="containerHome" style="width: 95vw; height: 90vh; display: flex; flex-direction: row; background-color: #ffffff; border-radius: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
        <!-- Login Section -->
        <div id="logindiv" style="width: 25%; height: 50%; margin-left: 3%; display: flex; justify-content: center; flex-direction: column;">
            <x-login></x-login>
            <div style="display: flex; align-items: center; justify-content: center; margin-top: 8%; flex-direction: column;">
                <p>¿No tienes una cuenta aún?</p>
                <p onclick="loginoregistro()" style="color: #47A1A8; cursor: pointer; font-size:1.2vw;">Crear una nueva cuenta</p>
            </div>
        </div>

        <!-- Register Section -->
        <div id="registerdiv" style="width: 25%; height: 50%; margin-left: 3%; display: none; justify-content: center; flex-direction: column;">
            <x-register></x-register>
            <div style="display: flex; align-items: center; justify-content: center; margin-top: 8%;  flex-direction: column;">
                <p>Ya tengo una cuenta</p>
                <p onclick="loginoregistro()" style="color: #47A1A8; cursor: pointer; font-size:1.2vw; font-height:900;">Iniciar sesión</p>
            </div>
        </div>

        <!-- Right Section -->
        <div style="width: 70%; height: 100%; display: flex; align-items: center; justify-content: center;">
            <div style="width: 90%; height: 90%; position: relative; background-image: url('img/publicidad.webp'); background-position: center; background-size: cover; background-repeat: no-repeat; border-radius: 15px;">
                <img src="img/info.svg" alt="info" style="width: 50%; height: auto; position: absolute; top: 60%; left: 8%;">
            </div>
        </div>

           <!-- <div id="app">
                <router-view></router-view>
            </div> -->

    </div>

    <!--Recaptcha-->
    <script>
        function onSubmit(token) {
            document.getElementById("submitRegister").submit();
        }
    </script>

    <!-- Conmutador Login/Register  -->
    <script>
        function loginoregistro() {
            const loginDiv = document.getElementById('logindiv');
            const registerDiv = document.getElementById('registerdiv');

            if (loginDiv.style.display === 'none') {
                loginDiv.style.display = 'flex';
                registerDiv.style.display = 'none';
            } else {
                loginDiv.style.display = 'none';
                registerDiv.style.display = 'flex';
            }
        }
    </script>

</body>
</html>
