<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Usuarios</title>
    @vite(['resources/css/app.css', 'resources/css/home.css'])
    <style>
        #slideDiv { width: 500px; height: 100vh; background-color: #ffffff; position: fixed; top: 0; right: -600px; border-radius: 14px 0 0 14px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); transition: right 0.5s ease; } 
        #slideDiv.active { right: 0; } @keyframes floating { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } } 
        @keyframes growWidth { from { width: 0; } to { width: 60%; } } #porcentajetotal div { animation: growWidth 3s ease forwards; }
        .switch input{opacity:0;width:0}.slideres{display:flex;align-items:center;position:absolute;cursor:pointer;top:10%;left:10%;right:0;bottom:0;background-color:#FD7377;transition:0.4s;border-radius:100vw}.slideres span{position:absolute;content:'';height:75%;aspect-ratio:1/1;border-radius:50%;left:8%;background-color:white;transition:0.4s}.slideres.on{background-color:#47A1A8}.slideres.off{background-color:#FD7377}.slideres.on span{transform:translateX(100%)}.slideres.off span{transform:translateX(0)}
        #slideDivcdclientes { width: 500px; height: 100vh; background-color: #ffffff; position: fixed; top: 0; right: -600px; border-radius: 14px 0 0 14px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); transition: right 0.5s ease; } 
        #slideDivcdclientes.active { right: 0; } @keyframes floating { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } } 
    </style>
</head>
<body style="overflow:hidden;">
    
    <div style="width:100%; height:100%; box-sizing: border-box; padding-left:3%;">
        <h1 style="color:#47A1A8;">Comunicados y publicidad</h1>
        <p style="font-size:1vw;">En esta sección, puedes enviar comunicados por correo electrónico, WhatsApp o SMS únicamente a los usuarios. Verifica que los datos de los usuarios estén completos.</p>
        
        <div style="width:96%; aspect-ratio:35/1; display:flex; flex-direction:row; justify-content: space-between;">
            <div style="width:50%; height:95%; position: relative;">
                <input id="comunicadoasunto" type="text" placeholder="Asunto" style="padding-left:40px; font-size:.9vw; width:calc(99% - 40px); height:100%; border:2px solid #47A1A8; border-radius:12px;" oninput="filtrarEmpresas()">
                <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-30%); color: #ccc;">
                    <img src="https://img.icons8.com/material-outlined/24/cccccc/email.png" alt="Search Icon">
                </span>
            </div>
            <select id="comunicadotipo" style="padding-left:1%; font-size:.9vw; width:22%; height:115%; background-color:#ffffff; border: 2px solid #47A1A8; border-radius:12px;" onchange="filtrarEmpresas()">
                <option value="email">Email</option>
                <option value="whatsapp">Whatsapp</option>
                <option value="sms">Mensaje de texto</option>
            </select>

            <div onclick="seleccionartodoscheckbox()" style="cursor:pointer; width:13%; height:100%; background-color:#ffffff; border-radius:10px; display:flex; align-items:center; justify-content:center; border: 2px solid #47A1A8;">
                <p style="color:#47A1A8; font-size:.9vw;">Seleccionar todo</p>
            </div>
            <div onclick="enviarcomunicado()" style="cursor:pointer; width:13%; height:100%; background-color:#47A1A8; border-radius:10px; display:flex; align-items:center; justify-content:center; border: 2px solid #47A1A8;">
                <p style="color:#ffffff; font-size:.9vw;">+ Enviar comunicado</p>
            </div>
        </div>

        <div style="width:96%; height:calc(75% - 10px); display:flex; flex-direction:row;">
            <div id="lista" style="width:70%; height:100%; margin-top:20px; overflow-y: auto; box-sizing:border-box;">
                @foreach ($Companies as $Company)
                    <div id="comunicadoempresa{{$Company['id']}}" class="empresa" data-estado="{{$Company['state']}}" style="width:100%; aspect-ratio:18/1; margin-bottom:.6%; background-color:#F2F3F6; border-radius:.5vw; display:flex; flex-direction:row; align-items:center;">
                        <input class="destinatarios" id="comunicadoto" type="checkbox" style="height:20px; width:20px; margin-left:1%; accent-color: #47A1A8;">
                        <p style="width:35%; padding-left:1%; font-size:.9vw;" class="nombre-empresa" >{{$Company['nameCompany']}}</p>
                        <p style="width:35%; text-align:center;font-size:.9vw;" class="nombre-empresa">{{$Company['contactEmail']}}</p>
                        <p style="width:15%; text-align:center;font-size:.9vw;" class="nombre-empresa" >{{$Company['whatsapp']}}</p>
                        <p style="width:15%; text-align:center;font-size:.9vw;" class="nombre-empresa" >{{$Company['cellphone']}}</p>
                    </div>
                @endforeach 

            </div>
            <div style="width:30%; height:100%; margin-top:20px;  padding:10px; box-sizing:border-box;">
                <textarea  id="mensajecomunicado" type="text"  placeholder="Escribe aquí tu mensaje. Para WhatsApp puedes usar un máximo de 300 caracteres y para SMS un máximo de 100 caracteres." style="resize:none; box-sizing:border-box; padding:4%; font-size:.9vw; width:100%; height:100%; border:2px solid #47A1A8; border-radius:12px;" oninput="filtrarEmpresas()"></textarea>
            </div>

    </div>


    <script>

        function seleccionartodoscheckbox() {
            var checkboxes = document.querySelectorAll('.destinatarios');
            var allChecked = checkboxes[0].checked;
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = !allChecked;
            });
        }

        function enviarcomunicado() {

            let asunto = document.getElementById('comunicadoasunto').value;
            let comunicadotipo = document.getElementById('comunicadotipo').value;
            let mensajecomunicado = document.getElementById('mensajecomunicado').value;

            if (asunto === "") {
                showAlert("Por favor, ingresa el asunto.","alerta");
                return;
            }
            if (comunicadotipo === "") {
                showAlert("Por favor, selecciona el tipo de comunicado.",'alerta');
                return;
            }
            if (mensajecomunicado === "") {
                showAlert("Por favor, ingresa el mensaje del comunicado.", 'alerta');
                return;
            }

            let usuariosSeleccionados = [];
            let checkboxes = document.querySelectorAll('.destinatarios');

            checkboxes.forEach(function(checkbox) {
                if (checkbox.checked) {
                    let empresaDiv = checkbox.closest('.empresa');
                    let id = empresaDiv.id.replace('comunicadoempresa', ''); 
                    let nombreEmpresa = empresaDiv.querySelectorAll('.nombre-empresa')[0].textContent.trim();
                    let email = empresaDiv.querySelectorAll('.nombre-empresa')[1].textContent.trim(); 
                    let whatsapps = empresaDiv.querySelectorAll('.nombre-empresa')[2].textContent.trim(); 
                    let telefono = empresaDiv.querySelectorAll('.nombre-empresa')[3].textContent.trim(); 

                    usuariosSeleccionados.push({
                        id: id,
                        nombre: nombreEmpresa,
                        whatsapp: whatsapps,
                        telefono: telefono,
                        email: email
                    });
                }
            });

            if (usuariosSeleccionados.length > 0) {

                if(comunicadotipo === 'whatsapp'){
                    usuariosSeleccionados.forEach(function(usuario) {
                        const mensajeData = {
                            "messaging_product": "whatsapp",
                            "to": usuario.whatsapp,
                            "type": "template",
                            "template": {
                                "name": "comunicadoshabilitapro",  
                                "language": {
                                    "code": "es" 
                                },
                                "components": [
                                    {
                                        "type": "header",  
                                        "parameters": [
                                            {
                                                "type": "text", 
                                                "text": asunto 
                                            }
                                        ]
                                    },
                                    {
                                        "type": "body", 
                                        "parameters": [
                                            {
                                                "type": "text",  
                                                "text": usuario.nombre
                                            },
                                            {
                                                "type": "text",  
                                                "text": mensajecomunicado
                                            }
                                        ]
                                    }
                                ]
                            }
                        };
                        
                        fetch('https://graph.facebook.com/v21.0/541194599079322/messages', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'Authorization': 'Bearer EAASPixIL3REBO80d1LoBEeBpqu96D8lr9G6ZC4Lwm5YxwkCWqIABpTGWYUP0ahBMGDEbrOndaMMt2b4ZAgOybrxtjr3Xa789WcZB9PlDGUKCDk4A285cF1Nif9I6gOxE8bb5umgB17Ytz3ujaWGj1nUvs1mZCNZAkprgEjjJRYd0VQypGwaYpv8gfQ1ZAixWN8DgZDZD'
                            },
                            body: JSON.stringify(mensajeData) 
                        })
                        .then(response => response.json())
                        .then(data => {
                            console.log('Respuesta de WhatsApp API:', data);
                        })
                        .catch(error => {
                            console.error('Error al enviar el mensaje a WhatsApp:', error);
                        });
                    });

                    //alert('Solicitu de envio de comunicado de WhatsApp enviada');
                    showAlert('Solicitu de envio de comunicado de WhatsApp enviada', 'success'); // success alerta o error
                    seleccionartodoscheckbox();

                }  


                if (comunicadotipo === 'sms') {
                    if (usuariosSeleccionados.length > 0) {
                        usuariosSeleccionados.forEach(function(usuario) {
                            const url = 'https://www.altiria.net:8443/api/http';
                            const data = new URLSearchParams();
                            data.append('cmd', 'sendsms');
                            data.append('apiKey', 'mz7YG8RavK'); 
                            data.append('apiSecret', 'a7fctg4yme'); 
                            data.append('dest', '57'+usuario.telefono); 
                            data.append('msg', 'HabilitaPro: ' + mensajecomunicado);

                            fetch(url, {
                                method: 'POST',
                                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                                body: data.toString()
                            })
                            .then(response => response.json()) 
                            .then(responseData => {
                                if (responseData.status === 'OK') {
                                    alert('SMS enviado con éxito a: ' + usuario.telefono);
                                } else {
                                    alert('Error al enviar SMS a: ' + usuario.telefono);
                                }
                            })
                            .catch(error => console.error('Error en la API de SMS:', error));
                        });

                        showAlert('Solicitud de mensajes SMS enviados exitosamente', 'success'); // success alerta o error
                        seleccionartodoscheckbox();

                    } else {
                        showAlert('No se ha seleccionado ningún destinatario para el SMS.', 'error');
                        seleccionartodoscheckbox();
                    }
                  
                }


                if (comunicadotipo === 'email') { 
                    let asunto = document.getElementById('comunicadoasunto').value;
                    let mensajecomunicado = document.getElementById('mensajecomunicado').value;
                    if (usuariosSeleccionados.length > 0) {
                        usuariosSeleccionados.forEach(function(usuario) {
                            fetch('/enviar-comunicado', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                                },
                                body: JSON.stringify({
                                    asunto: asunto,
                                    mensaje: mensajecomunicado,
                                    email: usuario.email,
                                    nombre: usuario.nombre  
                                })
                            })
                            .then(response => response.json())
                            .then(data => {
                                //alert('Correo enviado con éxito a: ' + usuario.email); 
                            })
                            .catch(error => {
                                alert('Error al enviar el correo a: ' + usuario.email + ': ' + error); 
                            });
                        });
                        
                        //alert('Solicitu de envio de comunicado via Email enviada');
                        showAlert('Solicitu de envio de comunicado via Email enviada','success');
                        seleccionartodoscheckbox();

                    } else {
                        alert('No se ha seleccionado ninguna empresa.');
                    }

                }

            } else {
                //alert("No se ha seleccionado ningún usuario.");
                showAlert('No se ha seleccionado ningún usuario.', 'error'); // success o error
            }

            asunto = '';
            comunicadotipo = '';
            mensajecomunicado = '';
        }
    </script>
</body>
</html>
