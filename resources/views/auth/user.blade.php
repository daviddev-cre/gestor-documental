<?php

$alertas = [
    ['id' => 1, 'contenido' => 'Este es un mensaje de alerta común que podría estar relacionado con alguno de los módulos en cuestión, por favor verificar y recuperar.', 'estado' => 'activo'],
    ['id' => 2, 'contenido' => 'Recuerda actualizar la información de recursos humanos de tu clinica pueden estar desactualizados', 'estado' => 'inactivo'],
    ['id' => 3, 'contenido' => 'Se ha detectado un problema en el módulo 2.', 'estado' => 'activo'],
    ['id' => 3, 'contenido' => 'Se ha detectado un problema en el módulo 2.', 'estado' => 'activo']
];

/*$usuario = [
    ['id' => 1, 'contenido' => 'Este es un mensaje de alerta común que podría estar relacionado con alguno de los módulos en cuestión, por favor verificar y recuperar.', 'estado' => 'activo'],
    ['id' => 2, 'contenido' => 'Recuerda actualizar la información de recursos humanos de tu clinica pueden estar desactualizados', 'estado' => 'inactivo'],
    ['id' => 3, 'contenido' => 'Se ha detectado un problema en el módulo 2.', 'estado' => 'activo']
];*/

$modulos = [
    [   
        'id' => 1, 
        'nombre' => 'Módulo #1',
        'color' => '#47A1A8', 
        'imagen' => '/img/iconoblanco1.svg', 
        'titulo' => 'Este es el modulo 1', 
        'porcentaje' => 70,
        'descripcion' => 'En este módulo debes verificar que cumples con todas las solicitudes del ministerio en relación al acondicionamiento del establecimiento de servicio',
        'documentos' => [
                (object)['id' => '123456','tipo' => 'documento','nombre' => 'Documento numero uno de la lista del primer modulo','estado' => 1,'imagenvideo' => 'https://carolinapachon.com.co/wp-content/uploads/2024/08/logo-carolina-pachon2.png','video' => 'https://carolinapachon.com.co/wp-content/uploads/2024/10/Recharge-your-skin-with-ilso-daily-moisture-pudding-cream.mp4','descripcion' => 'esta es la descripcion del primer documento del primer modulo ','fechainical' => '25/01/08','alerta' => '25/01/09','url' => '/img/pdfejemplo.pdf', 'comentarios'=> [(object)['cometario'=> 'primercometario', 'persona'=> 'user'],(object)['cometario'=> 'este es el segundo cometario', 'persona'=> 'admin']]],
                (object)['id' => '123457','tipo' => 'documento','nombre' => 'Documento numero dos dentro de la lista del primer modulo','estado' => 0,'imagenvideo' => '','video' => '','descripcion' => 'Esta es la descripcion del segundo documento de la primer lista','fechainical' => '25/01/08','alerta' => '25/01/09','url' => '', 'comentarios'=> [(object)['cometario'=> 'primercometario', 'persona'=> 'user'],(object)['cometario'=> 'este es el segundo cometario', 'persona'=> 'admin']]],
                (object)['id' => '123458','tipo' => 'documento','nombre' => 'Certificado numero uno','estado' => 2,'imagenvideo' => '','video' => 'https://carolinapachon.com.co/wp-content/uploads/2024/08/Carolina-pachon-video1.webm','descripcion' => '','fechainical' => '25/01/08','alerta' => '25/01/09','url' => 'https://img.icons8.com/material-outlined/24/cccccc/phone.png', 'comentarios'=> [(object)['cometario'=> 'primercometario', 'persona'=> 'user'],(object)['cometario'=> 'este es el segundo cometario', 'persona'=> 'user']]],
        ],
    ],
    [   
        'id' => 2, 
        'nombre' => 'Módulo #2',
        'color' => '#47A1A8', 
        'imagen' => '/img/iconoblanco1.svg', 
        'titulo' => 'Este es el modulo 2', 
        'porcentaje' => 10,
        'descripcion' => 'Este es el segundo modulo',
        'documentos' => [
                (object)['id' => '123456','tipo' => 'documento','nombre' => 'Certificado numero uno','estado' => 0,'imagenvideo' => '','video' => '','descripcion' => '','fechainical' => '25/01/08','alerta' => '25/01/09','url' => 'https://img.icons8.com/material-outlined/24/cccccc/phone.png', 'comentarios'=> [(object)['cometario'=> 'primercometario', 'persona'=> 'user'],(object)['cometario'=> 'este es el segundo cometario', 'persona'=> 'admin']]],
                (object)['id' => '123457','tipo' => 'documento','nombre' => 'Certificado numero uno','estado' => 0,'imagenvideo' => '','video' => '','descripcion' => '','fechainical' => '25/01/08','alerta' => '25/01/09','url' => 'https://img.icons8.com/material-outlined/24/cccccc/phone.png', 'comentarios'=> [(object)['cometario'=> 'primercometario', 'persona'=> 'user'],(object)['cometario'=> 'este es el segundo cometario', 'persona'=> 'admin']]],
                (object)['id' => '123458','tipo' => 'documento','nombre' => 'Certificado numero uno','estado' => 2,'imagenvideo' => '','video' => '','descripcion' => '','fechainical' => '25/01/08','alerta' => '25/01/09','url' => 'https://img.icons8.com/material-outlined/24/cccccc/phone.png', 'comentarios'=> [(object)['cometario'=> 'primercometario', 'persona'=> 'user'],(object)['cometario'=> 'este es el segundo cometario', 'persona'=> 'user']]],
                (object)['id' => '123458','tipo' => 'documento','nombre' => 'Certificado numero uno','estado' => 2,'imagenvideo' => '','video' => '','descripcion' => '','fechainical' => '25/01/08','alerta' => '25/01/09','url' => 'https://img.icons8.com/material-outlined/24/cccccc/phone.png', 'comentarios'=> [(object)['cometario'=> 'primercometario', 'persona'=> 'user'],(object)['cometario'=> 'este es el segundo cometario', 'persona'=> 'user']]],
                (object)['id' => '123458','tipo' => 'documento','nombre' => 'Certificado numero uno','estado' => 1,'imagenvideo' => '','video' => '','descripcion' => '','fechainical' => '25/01/08','alerta' => '25/01/09','url' => 'https://img.icons8.com/material-outlined/24/cccccc/phone.png', 'comentarios'=> [(object)['cometario'=> 'primercometario', 'persona'=> 'user'],(object)['cometario'=> 'este es el segundo cometario', 'persona'=> 'user']]],

        ],
    ],
    
    
];

//dd(session()-> all());

?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Habilita.Pro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">

    <style>
        #slideDiv { min-width: 450px; max-width: 30%; height: 100vh; background-color: #ffffff; position: fixed; top: 0; right: -600px; border-radius: 14px 0 0 14px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); transition: right 0.5s ease; } 
        #slideDiv.active { right: 0; } @keyframes floating { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } } 
        #menuflotante { width: 80%; aspect-ratio: 5/1; margin-left: 10%; background-image: url('/img/fondomenu.svg'); background-size: cover; display: flex; flex-direction: row; animation: floating 2s ease-in-out infinite; } 
        @keyframes growWidth { from { width: 0; } to { width: 60%; } } #porcentajetotal div { animation: growWidth 3s ease forwards; }
    </style>
</head>
<body style="width: 100vw; height: 100vh; margin: 0; padding: 0; background-color: #F2F3F6; display: flex; align-items: center; justify-content: center;">
    
    <div class="containerHome" style="width: 95vw; height: 90vh; display: flex; flex-direction: row; background-color: #FBFBFB; border-radius: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
        
        <div id="logindiv" style="width: 25%; height: 100%; margin-left: 3%; display: flex;  flex-direction: column;">
           
          <img onclick="showAlert('¡Este es un mensaje de alerta!')" src="/img/logo.svg " alt="" style="width:50%; margin-left:20%; margin-top:60px;">

          <div id="datoscliente" style="width:100%; height:8%; display:flex; flex-direction:row; margin-top:30px;">

            <div style="aspect-ratio:1/1; height:100%; background-image: url('/img/avatar.png'); background-size:cover;"> 

            </div>
            <div style="width:65%; height:100%; margin-left:5%;">
                <h3 style="font-size:2.1vh; color:#868686;">Clinica de ejemplo</h3>
                <h3 id="contadorporcentaje" style="font-size:3vh;color:#868686;">0%</h3> 
            </div>
            <div style="width:15%;height:100%; display:flex; aligne-items:center; justify-content:center; cursor:pointer;">
                <img id="configuracionesglobales" src="/img/iconoconfiguraciones.svg" alt="Configuraciones" style="width:60%; aspect-ratio:1/1;">
            </div>

          </div>
          <div id="barraporcentajeglobal" style="margin-top:3%;">
                <div style="width:100%; height:10px; background-color:#EFEFEF; border-radius:14px;"><div id="porcentajetotaltotal" style="width:0%; height:100%; background-color:#47A1A8;border-radius:14px;"></div></div>
          </div>
          <div id="contenidovariable" style="width:100%; height:55%;">
                <div id="modulo1" style="display:none; justify-content:center; margin-top:5%; padding:20px;">
                    <div style="display: grid; grid-template-columns: repeat(5, 1fr); grid-gap: 3%; max-width:350px;">
                        <?php foreach ($modulos as $modulo): ?>
                            <div onclick="procesarModulo({{ $modulo['id'] }})"  style="width: 100%; border-radius:14px; display:flex; align-items:center; justify-content:center; cursor:pointer; flex-direction:column;">
                                <img src="<?php echo $modulo['imagen']; ?>" alt="<?php echo $modulo['nombre']; ?>" style="width:100%; background-color:<?php echo $modulo['color']; ?>; border-radius:10px;">
                                <p style="font-size:.6vw; width:100%; text-align:center; margin-top:10%;"><?php echo $modulo['nombre']; ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div id="modulo2" style="display:none; flex-direction:column; align-items:center; width:100%; height:90%; margin-top:5%; overflow-y: scroll; overflow-x: hidden; padding:3%;">
                    <?php foreach ($alertas as $alerta): ?>
                        <div style="width:100%; height:25%; background-color:#ffffff; border-radius:12px; box-shadow: 0 4px 8px rgba(40, 40, 40, 0.03); cursor:pointer; display:flex; flex-direction:row; padding:5%; margin-top:5px; position:relative;">
                            <div style="height:20px; aspect-ratio: 1 / 1; background-color:#47A1A8; border-radius:100%; "></div>
                            <p style="font-size:.7vw; line-height:1.2; width: calc(90% - 20px); margin-left:5%;"><?php echo $alerta['contenido']; ?></p>
                            <img src="/img/iconoborrar.svg" alt="opciones" style="height:20%; position:absolute; bottom:15%; right:4%; cursor:pointer;">
                        </div>
                    <?php endforeach; ?>
                </div>

                <div id="modulo3" style="position:relative; display:none; width:90%; margin-left:5%; height:95%; margin-top:5%; flex-direction:column; min-height:200px;">
                    <p style="color:#47A1A8; font-weight:700; font-size:1.1vw;">¿Necesitas ayuda?</p>
                    <p style=" font-size:.7vw;">Nuestro equipo de profesionales esta presto a ayudarte solo debes enviar un mensaje con tu solicitud, que sera atendida lo más pronto posible</p>    
                    <textarea  id="textoArea" name="textoArea" style="resize: none; padding: 2%; width:100%; height:25%; border:none; font-size:.8vw;"  placeholder="Escribe aquí tu solicitud para abrir el tiket"></textarea>
                    <div class="opciones" style="margin-top:2%; display:flex; justify-content:space-between;">
                        <input type="radio" id="soporte" name="fruta" value="manzana">
                        <label for="soporte">Soporte Técnico</label>

                        <input type="radio" id="validacion" name="fruta" value="banana">
                        <label for="validacion">Documentos</label>

                        <input type="radio" id="normatividad" name="fruta" value="naranja">
                        <label for="normatividad">Normatividad</label>
                    </div>
                    <button style="font-size:1vw; margin-top:15px; background-color:#47A1A8; color:#ffffff; border-radius:10px; border:none; width:100%;height:35px;font-weight:600; ">Generar Tiket</button>
                </div>

                <div id="modulo4" style="position:relative; display:none; width:90%; margin-left:5%; height:95%; margin-top:5%; flex-direction:column; min-height:200px;">
                    <div style="width:100%; height:100%; position:relative;">
                        <p style="color:#47A1A8; font-weight:400; margin:0; padding:0;">Plan activo hasta</p>
                        <p style="color:#47A1A8; font-weight:700; font-size:1.1vw;">30/11/2025</p>
                        <p style="font-size:.7vw;  padding:0;">Para usar todos los beneficios de la plataforma asegúrate de que tu plan este activado:<br><br>• Almacenamiento illimitado<br>• Asesoría permanente<br>• Alertas automatizadas<br>• Verificación documental profesional</p>
                        <div style="width:100%; display:flex; flex-direction:row;">
                            <div style="width:50%; display:flex; flex-direction:column;">
                                <div style="display:flex; flex-direction:row; margin:0; padding:0;">
                                    <p style="margin:0; padding:0; color:#47A1A8; font-size:2.1vw; font-weight:500;">250.000</p>
                                    <p style="margin:0; padding:0;font-size:;.5vw">cop</p>
                                </div>
                                <p style="margin:0; padding:0;color:#47A1A8; font-size:.7vw; font-weight:500; margin-top:-10px;">Plan premium por 1 año</p>
                            </div>
                            <div style="width:50%; background-image:url(/img/pasarela.web); background-size:contain; background-repeat:no-repeat; background-position:center;"></div>
                        </div>
                        <button style="margin-top:15px; background-color:#47A1A8; color:#ffffff; border-radius:10px; border:none; width:100%;height:35px;font-weight:600;">Pagar suscripción</button>
                    </div>
                </div>
                



          </div>

          <div id="menuflotante" style=" width:70%; aspect-ratio:5/1; background-image:url('/img/fondomenu.svg'); background-size:cover; margin-left:10%;display:flex; flex-direction:row; ">
           
              <div onclick="mostrarmodulo(1)" style="width:25%; height:92%; cursor:pointer;display:flex; align-items:center; justify-content:center; flex-direction:column;"> <img src="/img/menu1.svg" alt="menu1" style="height:70%; width:70%;"> </div>
              <div onclick="mostrarmodulo(2)" style="width:25%; height:92%; cursor:pointer;display:flex; align-items:center; justify-content:center; flex-direction:column;"><img src="/img/menu3.svg" alt="menu1" style="height:70%; width:70%;"></div>
              <div onclick="mostrarmodulo(3)" style="width:25%; height:92%; cursor:pointer;display:flex; align-items:center; justify-content:center; flex-direction:column;"><img src="/img/menu4.svg" alt="menu1" style="height:70%; width:70%;"></div>
              <div onclick="mostrarmodulo(4)" style="width:25%; height:92%; cursor:pointer;display:flex; align-items:center; justify-content:center; flex-direction:column;"><img src="/img/menu5.svg" alt="menu1" style="height:70%; width:70%;"></div>

              
          </div>

        </div>

        <!-- Right Section -->
        <div style="width: 70%; height: 100%; display: flex; align-items: center; justify-content: center;">
           
          <div style="width:100%; height:100%;display:flex; align-items:center; justify-content:center;">
            <div style="width:95%; height:90%; background-color:#F2F3F6; border-radius:15px; padding:3%;">
                <div id="mostrarmodulos" style="display:none; width:100%; height:100%;">
                    <h2 id="Mtitulo" style="width:50%; margin:0; padding:0; color:#47A1A8; font-size:2.1vw; font-weight:800; ">Habilitación en salud, <br>sin complicaciones</h2>
                    <p  id="Mdescripcion" style="font-size:.7vw;  padding:0;">Documentación y habilitación en salud sin complicaciones</p>
                    <div id="barraporcentajeglobal" style="margin-top:3%; width:100%; display:flex; align-items:center; justify:content;">
                        <p id="Mporcentaje" style="font-size:1.5vw;">0%</p>
                        <div style="width:50%; height:10px;  margin-left:2%;background-color:#ffffff; border-radius:14px;"><div id="Mporcentajebarra" style="width:00%; height:100%; background-color:#47A1A8;border-radius:14px;"></div></div>
                    </div>
                    <p style="font-size:1vw; margin:0; padding:0;">Requerimientos completados</p>
                    <div id="documentosContainer" style="width:100%; height:65%; overflow-y: auto; overflow-x: hidden; padding:3%;">
                        <?php foreach ($modulos as $modulo): ?>
                            <div class="modulo" data-id="<?= $modulo['id']; ?>" style="display:none;">
                                <?php foreach ($modulo['documentos'] as $documento): ?>
                                    <div style="width:100%; aspect-ratio:20/1; background-color:#ffffff; border-radius:12px; box-shadow: 0 4px 8px rgba(40, 40, 40, 0.03); cursor:pointer; display:flex; flex-direction:row; padding:1.5%; margin-top:5px;">
                                        <div onclick="urldocumento(<?= $documento->id; ?>, '<?= addslashes($documento->url); ?>')" style="height:20px; aspect-ratio: 1 / 1; background-color:<?= ($documento->estado === 2) ? '#47A1A8' : ($documento->estado === 0 ? '#FF5055' : ($documento->estado === 1 ? '#FFC300' : '#ffffff')); ?>; border-radius:100%;"></div>
                                        <p   onclick="urldocumento(<?= $documento->id; ?>, '<?= addslashes($documento->url); ?>')" style="font-size:1vw; line-height:1.2; width: calc(90% - 20px); margin-left:5%;"><?= $documento->nombre; ?></p>
                                        <img onclick="Mdescargardocumento(<?= $documento->id; ?>)" src="/img/iconodescargar.svg" alt="descargar" style="width:30px;">
                                        <img onclick="Mborrardocumento(<?= $documento->id; ?>)" src="/img/iconoborrar.svg" alt="eliminar" style="width:30px; margin-left:1%;">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div id="slideDiv" style="padding:2%; ">
            <div style="width:100%; height:100%;overflow-y: auto; overflow-x: hidden; padding:3%; padding-top:0; padding-bottom:0;">
                <p style="margin:0; padding:0; color:#47A1A8; font-size:1.3vw; font-weight:700;">Informacion del usuario</p>
                <p style="font-size:.7vw;  padding:0;">Por favor, completa estos datos para que los revisores tengan toda la información necesaria y puedan verificar correctamente la documentación de tu empresa.</p>
                
                <form method="post" action="{{route('compañias.update', $Company->id)}}">
                    @csrf
                    @method("PUT")
                    <input type="hidden" name="userId" value="{{$Company->userId}}">
                    <input type="hidden" name="percent" value="{{$Company->percent}}">
                    <input type="hidden" name="typePerson_foreigner" value="{{$Company->typePerson_foreigner}}">
                    <input type="hidden" name="sector_foreigner" value="{{$Company->sector_foreigner}}">
                    <div style="margin-bottom: 16px; position: relative; width:49%;">
                        <select type="text" name="department_foreigner" value="{{$Departments[$Company->department_foreigner]['departmentName']}}" placeholder="Ciudad" style="width: calc(99% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                            <option value="" disabled {{$Company->typology_foreigner ? 'selected' : '' }}>Departamento</option>
                            @foreach ($Departments as $Department)
                                <option value="{{$Department->id}}" {{ $Department->id == $Company->department_foreigner ? 'selected' : '' }}>
                                    {{ $Department['departmentName'] }}
                                </option>
                            @endforeach
                        </select>
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/building.png" alt="Company Icon">
                        </span>
                    </div>
                    <div style="margin-bottom: 16px; position: relative;">
                        <input type="text" name="nameCompany" value = "{{isset($Company->nameCompany) ? $Company->nameCompany : '' }}" placeholder="Nombre de la empresa o razón social" style="width: 100%; padding: 6px 40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/building.png" alt="Company Icon">
                        </span>
                    </div>
                    <div style="margin-bottom: 16px; position: relative;">
                        <input type="text" name="contactEmail" value="{{$Company->contactEmail ? $Company->contactEmail : ''}}" placeholder="Correo de la empresa" style="width: calc(99% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/building.png" alt="Company Icon">
                        </span>
                    </div>
                    <div style="width:100%; display:flex; flex-direction:row; justify-content:space-between;">
                        <div style="margin-bottom: 16px; position: relative; width:49%;">
                            <input type="text" name="nit" value="{{isset($Company->nit) ? $Company->nit : ''}}" placeholder="Nit" style="width: 100%; padding: 6px 40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                            <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                                <img src="https://img.icons8.com/material-outlined/24/cccccc/identification-documents.png" alt="Identification Icon">
                            </span>
                        </div>
                        <div style="margin-bottom: 16px; position: relative; width:49%;">
                            <input type="text" name="numberEmployees" value="{{isset($Company->numberEmployees) ? $Company->numberEmployees : ''}}" placeholder="No. Empleados" style="width: 100%; padding: 6px 40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                            <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                                <img src="https://img.icons8.com/material-outlined/24/cccccc/user.png" alt="User Icon">
                            </span>
                        </div>
                    </div>
                    <div style="margin-bottom: 16px; position: relative;">
                        <select  name="typology_foreigner" style="padding: 6px; padding-left:40px; width:101.5%; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333; appearance: none;">
                            <option value=""  disabled {{ $Company->typology_foreigner ? 'selected' : '' }}>Tipo de empresa</option>
                            @foreach ($Typologies as $Typology)
                                <option value="{{ $Typology['id'] }}" {{ $Typology['id'] == $Company->typology_foreigner ? 'selected' : '' }}>
                                    {{ $Typology->typologyName }}
                                </option>
                            @endforeach
                        </select>                    
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/stethoscope.png" alt="Company Type Icon">
                        </span>
                    </div>

                    <div style="margin-bottom: 16px; position: relative;">
                        <input type="text" name="address" value="{{isset($Company->address) ? $Company->address : '' }}" placeholder="Dirección de la sede principal" style="width: 100%; padding: 6px 40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/marker.png" alt="Location Icon">
                        </span>
                    </div>

                    <div style="width:100%; display:flex; flex-direction:row; justify-content:space-between;">
                        <div style="margin-bottom: 16px; position: relative; width:49%;">
                            <input type="number" name="cellphone" value="{{isset($Company->cellphone) ? $Company->cellphone : ''}}" placeholder="Teléfono" style="width: 100%; padding: 6px 40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                            <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                                <img src="https://img.icons8.com/material-outlined/24/cccccc/phone.png" alt="Phone Icon">
                            </span>
                        </div>
                        <div style="margin-bottom: 16px; position: relative; width:49%;">
                            <input type="text" name="whatsapp" value="{{isset($Company->whatsapp) ? $Company->whatsapp : ''}}" placeholder="WhatsApp" style="width: 100%; padding: 6px 40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                            <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                                <img src="https://img.icons8.com/material-outlined/24/cccccc/whatsapp.png" alt="WhatsApp Icon">
                            </span>
                        </div>
                    </div>

                    <div style="margin-bottom: 16px; position: relative;">
                        <input type="text" name="legalRepresentative" value="{{isset($Company->legalRepresentative) ? $Company->legalRepresentative : '' }}" placeholder="Representante legal" style="width: 100%; padding: 6px 40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/businessman.png" alt="Representative Icon">
                        </span>
                    </div>

                    <div style="margin-bottom: 16px; position: relative;">
                        <input type="text" name="webSite" value="{{isset($Company->webSite) ? $Company->webSite : '' }}" placeholder="Sitio web" style="width: 100%; padding: 6px 40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/internet.png" alt="Website Icon">
                        </span>
                    </div>
                    
                    <div style="margin-bottom: 10px; position: relative;">
                        <textarea name="companyDescription" placeholder="Descripcion de la empresa" rows="3" style="width: 100%; padding: 6px 6px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333; resize: none;">{{$Company->companyDescription}}</textarea>
                    </div>
                
                    <div style="width:100%; display:flex; flex-direction:row; justify-content:space-between;">
                        <div style="margin-bottom: 16px; position: relative; width:50%;"> </div>
                        <div style="margin-bottom: 16px; position: relative; width:50%;">
                        <button onclick="submit()" style="background-color:#47A1A8; color:#ffffff; border-radius:10px; border:none; width:100%;height:35px;font-weight:600;">Guardar</button>
                        </div>
                    </div>
                </form>
                @if ($errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif  
                
            </div>
        </div>

        <div id="mostrardocumentos" style="display:none; width:100vw; height:100vh; background-color: rgba(40, 40, 40, 0.9); z-indez:999999999999; position:fixed; align-items:center; justify-content:center;">
            <div style="position:relative; width:80%; height:90%; background-color:#F2F3F6;border-radius:8px; padding:2%; display:flex; flex-direction:row;">
                <iframe id="miIframe" width="70%" height="100%" style="border: none;"></iframe>  
                <p onclick="cerrardocumento()" style="font-size:2vw; font-weight:800; color:#47A1A8; position:absolute; top:0%; right:1.5%; cursor:pointer;">x</p>                  
                <div style="width:30%; height:100%; padding:1%;">
                    <div style="width:100%; height:100%; background-color:#ffffff; border-radius:10px; padding:3%;">

                        <div id="chatdocuemntacion" style="width:100%; height:calc(100% - 100px); overflow-y: auto; border-bottom: solid 5px #47A1A8; display: flex; flex-direction: column; padding: 3%; justify-content:end; align-items:center;">
                            
                            <div style="flex: 0 0 auto; width:80%; background-color: #ffffff;border:solid 2px #47A1A8; color: #ffffff; border-radius: 14px; padding: 3%; box-shadow: 0 4px 8px rgba(40, 40, 40, 0.03); margin: 5px; margin-left:-18%; margin-left:-18%;">
                                <p style="line-height:1; color:#47A1A8;">Este es un texto que puede ser un poco largo, pero queremos que se muestre correctamente.</p>
                            </div>
                            
                        </div>
                        <div style="width:100%; height:auto; display:flex; flex-direction:row; align-items:end;justify-content: space-between;">
                            <textarea id="comentariodocuemento" name="comentario" id="comentarios" placeholder="Puedes dejar un comentario aqui" style="width:85%;margin-top:1%; height:100px; border-radius:8px; border: solid 2px #F1F3F8; background-color:#FAFBFE; resize: none; padding:2%;"></textarea>
                            <img onclick="crearComentario()" src="/img/enter.svg" alt="enter" style="width:8%; height:8%; cursor:pointer;">                   
                        </div>
                                          
                    </div>
                </div>                            
            </div>
        </div>  
        <div id="colocardocumentos" style="display:none; width:100vw; height:100vh; background-color: rgba(40, 40, 40, 0.9); z-indez:999999999999; position:fixed; align-items:center; justify-content:center;">
            <div style="position:relative; width:80%; height:90%; background-color:#F2F3F6;border-radius:8px; padding:2%; display:flex; flex-direction:row;">
            <p onclick="cerrarsumardocumento()" style="font-size:2vw; font-weight:800; color:#47A1A8; position:absolute; top:0%; right:1.5%; cursor:pointer;">x</p>                  
            
            <div style="width:100%; height:100%;  display:flex; flex-direction:row;">
                <div id="drop-area" style="width:50%; height:100%;display:flex;align-items:center;justify-content:center;display:flex;align-items:center;justify-content:center;flex-direction:column;">

                    <div style="width:60%; border-radius:12px; aspect-ratio:1/1; border: 2px dashed #47A1A8; padding: 10px; line-height: 1.5; display:flex;align-items:center;justify-content:center;flex-direction:column;">
                        <img onclick="subirdocumento()" src="/img/upload.svg" alt="arrastrar y soltar documento" style="width:50%; height:auto;cursor:pointer;">
                        <input onchange="procesardocumento(this.files)" style="display:none;" type="file" id="filearchivo" accept=".pdf, .jpg, .jpeg, .png, .webp">
                        <button onclick="subirdocumento()" id="upload-button" style="font-size:.8vw; background-color:#47A1A8; padding:2% 17%; color:#ffffff; border:none;border-radius:8px;">Seleccionar Documento</button>
                        <p id="nombredeldocumento" style="width:80%; text-align:center; margin-top:15px;" >Seleccione o arrastre el docuemnto</p>
                        <p style="margin-top:10px; font-size:12px;">Formatos aceptados .pdf .png .jpg .webp</p>
                    </div>    
                    
                    <button onclick="subirdocumento()" id="upload-button" style="margin-top:20px; font-size:.8vw; background-color:#47A1A8; padding:2% 17%; color:#ffffff; border:none;border-radius:8px;">Guardar</button>

                </div>
                <div style="width:50%; height:100%;">
                    <h2 id="Mtitulodeldocumento" style="height:12%; margin:0; padding:0; margin-top:40px; width:70%; color:#47A1A8; font-size:1.5vw; font-weight:800; ">Documento pdf con todas las hojas de vida</h2>
                    <div id="videoinfo" style="width:80%; margin-top:17px; position:relative;">
                        <video id="Mvideodeldocumento" onclick="pausaroreproducirvideo()" style="width:100%; border-radius:15px;" preload></video>
                        <img id="iconoplay" src="/img/play.svg" alt="Play" onclick="pausaroreproducirvideo()" style="width:20%; position:absolute; top:50%; left:50%; transform: translate(-50%, -50%); cursor:pointer;">
                    </div>
                    <p id="Mdescripciondocumento" style="height:30%; overflow-y: auto; font-size:.7vw; width:80%; margin-top:20px; padding:0;">Una hoja de vida es un documento que resume la trayectoria profesional y académica de una persona. Incluye información como la formación educativa, la experiencia laboral, habilidades, logros y datos de contacto. Su objetivo es presentar al candidato de manera clara y concisa, facilitando su evaluación en procesos de selección de empleo. Una hoja de vida es un documento que resume la trayectoria profesional y académica de una persona. Incluye información como la formación educativa, la experiencia laboral, habilidades, logros y datos de contacto. Su objetivo es presentar al candidato de manera clara y concisa, facilitando su evaluación en procesos de selección de empleo. Una hoja de vida es un documento que resume la trayectoria profesional y académica de una persona. Incluye información como la formación educativa, la experiencia laboral, habilidades, logros y datos de contacto. Su objetivo es presentar al candidato de manera clara y concisa, facilitando su evaluación en procesos de selección de empleo. Una hoja de vida es un documento que resume la trayectoria profesional y académica de una persona. Incluye información como la formación educativa, la experiencia laboral, habilidades, logros y datos de contacto. Su objetivo es presentar al candidato de manera clara y concisa, facilitando su evaluación en procesos de selección de empleo. Una hoja de vida es un documento que resume la trayectoria profesional y académica de una persona. Incluye información como la formación educativa, la experiencia laboral, habilidades, logros y datos de contacto. Su objetivo es presentar al candidato de manera clara y concisa, facilitando su evaluación en procesos de selección de empleo.</p>
                    
                </div>

            </div>
                                            
            
            </div>
        </div>   
        
    <script>
        let moduloactual = 0;
        const modulos = <?php echo json_encode($modulos); ?>;
        const slideDiv = document.getElementById('slideDiv');
        const toggleButton = document.getElementById('configuracionesglobales');

        document.addEventListener('DOMContentLoaded', function() {
            encontrarporcentajetotal();
        });

        toggleButton.addEventListener('click', () => {
            slideDiv.classList.toggle('active'); 
        });

        function informaciongeneral() {
            const slideDiv = document.getElementById('slideDiv');
            if (slideDiv.classList.contains('active')) {
                slideDiv.classList.remove('active'); 
            } else {
                slideDiv.classList.add('active');    
            }
        }

        function mostrarmodulo(a) {
            for (let i = 1; i <= 4; i++) {
                document.getElementById(`modulo${i}`).style.display = (i === a) ? "flex" : "none";
            }
        }
        mostrarmodulo(1);

   
        function procesarModulo(id) {
            moduloactual = id;
            const modulo = modulos.find(mod => mod.id === id);
            if (modulo) {
                document.getElementById('mostrarmodulos').style.display = "block"
                document.getElementById('Mtitulo').textContent = modulo.titulo;
                document.getElementById('Mdescripcion').textContent = modulo.descripcion;

                document.querySelectorAll('.modulo').forEach(modulo => modulo.style.display = 'none');
                const moduloSeleccionado = document.querySelector(`.modulo[data-id='${id}']`);
                if (moduloSeleccionado) moduloSeleccionado.style.display = 'block';
            }
            encontrarporcentaje(id);
        }

        function encontrarporcentaje(id) {
            const moduloActual = modulos.find(mod => mod.id === id);
            const documentos = moduloActual.documentos;
            const promedio = documentos.filter(doc => doc.estado === 2).length / documentos.length * 100 || 0;

            document.getElementById('Mporcentaje').textContent = Math.floor(promedio) + '%';
            const barra = document.getElementById('Mporcentajebarra');
            barra.style.width = '0%';
            barra.style.transition = 'width 1s ease';
            

            setTimeout(() => {
                barra.style.width = promedio + '%';
            }, 100);
        }

        function encontrarporcentajetotal() {
            const totalDocumentos = modulos.reduce((sum, mod) => sum + mod.documentos.length, 0);
            const totalEstado2 = modulos.reduce((sum, mod) => sum + mod.documentos.filter(doc => doc.estado === 2).length, 0);
            const promedio = totalDocumentos > 0 ? (totalEstado2 / totalDocumentos) * 100 : 0;
            document.getElementById('contadorporcentaje').textContent = Math.floor(promedio) + '%';
            const porcentajetotaltotal = document.getElementById('porcentajetotaltotal');
            porcentajetotaltotal.style.width = '0%';
            porcentajetotaltotal.style.transition = 'width 1s ease';
            porcentajetotaltotal.style.width = promedio + '%';
        }
        
        

        function urldocumento(id, url){
            
            if (url) {
                document.getElementById('miIframe').src = url;
                document.getElementById('mostrardocumentos').style.display = 'flex';

                const modulo = modulos.find(mod => mod.id === moduloactual);
                if (modulo) {
                    const documento = modulo.documentos.find(doc => doc.id === String(id));
                    if (documento) {
                        const chatContainer = document.getElementById('chatdocuemntacion');
                        while (chatContainer.firstChild) {
                            chatContainer.removeChild(chatContainer.firstChild);
                        }

                        documento.comentarios.forEach(comentario => {
                            const nuevoDiv = document.createElement('div');
                            const isUser = `${comentario.persona}` === 'user';
                            const textocomentario = `${comentario.cometario}`;

                            nuevoDiv.style.cssText = `
                                flex: 0 0 auto;
                                width: 80%;
                                background-color: ${isUser ? '#47A1A8' : '#ffffff'};
                                color: ${isUser ? '#ffffff' : '#47A1A8'};
                                border-radius: 14px;
                                padding: 3%;
                                box-shadow: 0 4px 8px rgba(40, 40, 40, 0.03);
                                margin: 5px;
                                margin-left: ${isUser ? '18%' : '-18%'};
                                ${!isUser ? 'border: 2px solid #47A1A8;' : ''}
                            `;
                            const nuevoParrafo = document.createElement('p');
                            nuevoParrafo.style.color = isUser ? '#ffffff' : '#47A1A8';
                            nuevoParrafo.textContent = textocomentario;
                            nuevoDiv.appendChild(nuevoParrafo);
                            chatContainer.appendChild(nuevoDiv);

                        });
                    } 
                }
            }else{
                document.getElementById('colocardocumentos').style.display = 'flex';
                mostrarDocumentoPorId(id);
                //aqui
                const iconoplay = document.getElementById('iconoplay');
                iconoplay.style.display = 'block';
                
            }
            

        }

        function mostrarDocumentoPorId(id) {

            const modulo = modulos.find(mod => mod.id === moduloactual);
            const documento = modulo.documentos.find(doc => doc.id === String(id));
            if (documento) {
                document.getElementById('Mtitulodeldocumento').textContent = documento.nombre;
                document.getElementById('Mdescripciondocumento').textContent = documento.descripcion;
                if(documento.video){
                    document.getElementById('Mvideodeldocumento').style.display = 'block';
                    document.getElementById('videoinfo').style.display = 'block';
                    document.getElementById('Mvideodeldocumento').src = documento.video;
                    document.getElementById('Mvideodeldocumento').poster = documento.imagenvideo;
                }else{
                    document.getElementById('Mvideodeldocumento').style.display = 'none';
                    document.getElementById('videoinfo').style.display = 'none';
                }
                
            }
            
        }


        function cerrardocumento(){
            document.getElementById('mostrardocumentos').style.display = 'none'; 
        }
        function cerrarsumardocumento(){
            document.getElementById('colocardocumentos').style.display = 'none'; 
            const Mvideodeldocumento = document.getElementById('Mvideodeldocumento');
            Mvideodeldocumento.pause();
        }

        function Mdescargardocumento(c){
            alert('Descargando documento con id '+c);
        }
        function Minfodocumento(c){
            alert('Mostrando informacion del documento con id '+c);
        }
        function Mborrardocumento(c){
            alert('Borrando documento con id '+c);
        }

        function crearComentario() {
            const texto = document.getElementById('comentariodocuemento').value;
            if (texto.trim()) {
                const nuevoDiv = document.createElement('div');
                nuevoDiv.style.flex = '0 0 auto';
                nuevoDiv.style.width = '80%';
                nuevoDiv.style.backgroundColor = '#47A1A8';
                nuevoDiv.style.color = '#ffffff';
                nuevoDiv.style.borderRadius = '14px';
                nuevoDiv.style.padding = '3%';
                nuevoDiv.style.boxShadow = '0 4px 8px rgba(40, 40, 40, 0.03)';
                nuevoDiv.style.margin = '5px';
                nuevoDiv.style.marginLeft = '18%';
                const nuevoParrafo = document.createElement('p');
                nuevoParrafo.style.color = '#ffffff';
                nuevoParrafo.textContent = texto;
                nuevoDiv.appendChild(nuevoParrafo);
                document.getElementById('chatdocuemntacion').appendChild(nuevoDiv);
                document.getElementById('comentariodocuemento').value = '';
            }
        }
        
        //elemento de arrastrar y soltar
        const validFormats = ['application/pdf', 'image/jpeg', 'image/png', 'image/webp'];

        const dropArea = document.getElementById('drop-area');
            dropArea.addEventListener('dragover', (e) => {
                e.preventDefault();
                dropArea.classList.add('hover');
            });
            dropArea.addEventListener('dragleave', () => {
                dropArea.classList.remove('hover');
            });
            dropArea.addEventListener('drop', (e) => {
                e.preventDefault();
                dropArea.classList.remove('hover');
                const files = e.dataTransfer.files;
                procesardocumento(files);
            });
        
            //controlar input de documentos
            const fileInput = document.getElementById('filearchivo');
            function subirdocumento(){
                fileInput.click(); 
            }
            function procesardocumento(files){
                const fileNameDisplay = document.getElementById('nombredeldocumento');

                for (const file of files) {
                    if (validFormats.includes(file.type)) {
                        if (files.length > 0) {
                            fileNameDisplay.textContent = files[0].name;
                        } else {
                            fileNameDisplay.textContent = 'Ningún archivo seleccionado';
                        }
                    }else{
                        alert('Este formato de archivo no es permitido, solo puedes incluir archivos .pdf .png .jpg y .webp');
                    }
                }
                
               
            }

            function pausaroreproducirvideo(){
                const Mvideodeldocumento = document.getElementById('Mvideodeldocumento');
                const iconoplay = document.getElementById('iconoplay');
                if (Mvideodeldocumento.paused) {
                    Mvideodeldocumento.play();
                    iconoplay.style.display = 'none';
                   
                } else {
                    Mvideodeldocumento.pause();
                    iconoplay.style.display = 'block';
                    
                }
            }

            

    </script>

    

</body>
</html>
