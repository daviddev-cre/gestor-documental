<?php 
//print_r(session()->all());

?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Habilita.Pro</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">

    <!-- Recaptcha -->
    {!! RecaptchaV3::initJs() !!}

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/css/home.css','resources/js/app.js'])

    <style>
        .code-wrapper {
            display: inline-block;
            position: relative;
            width: 240px; /* Ajusta según sea necesario */
        }

        .code-input {
            font-family: monospace;
            font-size: 24px;
            width: 100%;
            letter-spacing: 18px; /* Ajusta para el espacio entre los dígitos */
            text-align: center;
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            background-color: #f5f5f5;
            outline: none;
        }

        .code-input:focus {
            border-color: #47A1A8;
        }

        .code-input::placeholder {
            letter-spacing: normal; /* Ajuste para que el placeholder no se vea extraño */
            color: #ccc;
        }

    </style>

</head>
<body style="width: 100vw; height: 100vh; margin: 0; padding: 0; background-color: #F2F3F6; display: flex; align-items: center; justify-content: center;">

    <!-- Container -->
    <div class="containerHome" style="width: 95vw; height: 90vh; display: flex; flex-direction: row; background-color: #ffffff; border-radius: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
        
        <!-- Login Section -->
        <div id="logindiv" style="width: 25%; height: 50%; margin-left: 3%; display: flex; justify-content: center; flex-direction: column;">
            <x-login></x-login>
            <div style="display: flex; align-items: center; justify-content: center; margin-top: 8%; flex-direction: column;">
                <p>¿No tienes una cuenta aún?</p>
                <p onclick="loginoregistro()" style="color: #47A1A8; cursor: pointer;">Crear una nueva cuenta</p>
            </div>
        </div>

        <!-- Register Section -->
        <div id="registerdiv" style="width: 25%; height: 50%; margin-left: 3%; display: none; justify-content: center; flex-direction: column;">
            <x-register></x-register>
            <div style="display: flex; align-items: center; justify-content: center; margin-top: 8%; flex-direction: column;">
                <p>Ya tengo una cuenta</p>
                <p onclick="loginoregistro()" style="color: #47A1A8; cursor: pointer;">Iniciar sesión</p>
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

    <div id="modal"  style="position:fixed; z-index:99999999999999; width:100vw; height:100vh; background-color: rgba(40, 40, 40, 0.9); display:flex; align-items:center; justify-content:center;">
        <div style="width:50%; max-width:500px;">
            <div>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('2fa.store') }}">
                            @csrf

                            <p class="text-center" style="font-size:2vw; font-weight:700; color:#47A1A8;">Código</p>
                            <p class="text-center">Se ha enviado un <b>codigo de seguridad <br>a tu correo electronico</b></p>
    
                            @if ($message = Session::get('success'))
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button> 
                                        <strong>{{ $message }}</strong>
                                    </div>
                                </div>
                                </div>
                            @endif
    
                            @if ($message = Session::get('error'))
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-danger alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button> 
                                        <strong>{{ $message }}</strong>
                                    </div>
                                </div>
                                </div>
                            @endif
    
                            <div class="form-group">
                                <div class="code-wrapper" style="width:100%; display:flex; justify-content:center;">
                                    <input id="code" type="text" maxlength="6" class="code-input" name="code" required autocomplete="off" autofocus style="width:60%;">
                                    @error('code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                
                            </div>
    
                            <div class="form-group row mb-0">
                                <div style="width:100%; display:flex; align-items:enter; justify-content:center; margin-top:20px;">
                                    <button type="submit" style="width:60%; height:40px; background-color:#47A1A8; border:none; color:#ffffff; border-radius:10px; ">
                                        Validar
                                    </button>
                                </div>
                            </div>

                            <div >
                                <div style="width:100%; display:flex; align-items:center; justify-content:center; flex-direction:column;">
                                    <p style="width:100%; text-align:center; font-size:12px; margin-top:20px;">Estamos 100% comprometidos <br>con la seguridad de tu información</p>
                                    <a style="color:#47A1A8; font-size:1vw; text-decoration: none; font-weight:600; margin-top:5px; margin-bottom:20px;" href="{{ route('2fa.resend') }}">¡Enviar un nuevo código!</a>
                                    <p onclick="cerrarmodal()" class="text-center" style="cursor:pointer; font-weight:500;">Cerrar</b></p>
                                </div>
                            </div>
    
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
        function cerrarmodal(){
            const modal = document.getElementById('modal');
            modal.style.display = 'none';
            window.location.href = "{{ url('/') }}";
        }
    </script>

</body>
</html>
