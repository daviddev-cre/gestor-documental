<?php

$colaborador = [
    ['id' => 1, 'nombre' => 'Asesor numero uno', 'estadoc' => 0, 'empresasasignadas'=> 60, 'tipologia' => 'Spa'],
    ['id' => 2, 'nombre' => 'Asesor numero dos', 'estadoc' => 1, 'empresasasignadas'=> 40, 'tipologia' => 'Clinica estetica'],
    ['id' => 3, 'nombre' => 'Asesor numero tres', 'estadoc' => 1, 'empresasasignadas'=> 80, 'tipologia' => 'Clinica dental']
];


$datosdelcolaborador = [
    'id'                      => 1,
    'nombre_colaborador'      => 'Colaborador nuemro uno',
    'cedula'                  => '123456789',
    'cargo'                  => 'Asesor',
    'numero_empresas'         => 150,
    'direccion'               => 'Calle Falsa 123, Ciudad',
    'telefono'                => '3102640456',
    'whatsapp'                => '573102640456',
    'estadoc'                 => 1,
    'tarjetaprofesional'      => '16856541656',
    'correo_contacto'         => 'contacto@ejemplo.com',
    'fecha_creacion'          => '2022-01-15',
];



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>colaboradors</title>
  
    <style>
        #slideDivc { width: 500px; height: 100vh; background-color: #ffffff; position: fixed; top: 0; right: -600px; border-radius: 14px 0 0 14px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); transition: right 0.5s ease; } 
        #slideDivc.active { right: 0; } @keyframes floating { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } } 
        @keyframes growWidth { from { width: 0; } to { width: 60%; } } #porcentajetotal div { animation: growWidth 3s ease forwards; }
        .switchc input{opacity:0;width:0}.slideres{display:flex;align-items:center;position:absolute;cursor:pointer;top:10%;left:10%;right:0;bottom:0;background-color:#FD7377;transition:0.4s;border-radius:100vw}.slideres span{position:absolute;content:'';height:75%;aspect-ratio:1/1;border-radius:50%;left:8%;background-color:white;transition:0.4s}.slideres.on{background-color:#47A1A8}.slideres.off{background-color:#FD7377}.slideres.on span{transform:translateX(100%)}.slideres.off span{transform:translateX(0)}
        #slideDivcd { width: 500px; height: 100vh; background-color: #ffffff; position: fixed; top: 0; right: -600px; border-radius: 14px 0 0 14px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); transition: right 0.5s ease; } 
        #slideDivcd.active { right: 0; } @keyframes floating { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } } 
        #listaempresasdeasesor { width: 500px; height: 100vh; background-color: #ffffff; position: fixed; top: 0; right: -600px; border-radius: 14px 0 0 14px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); transition: right 0.5s ease; } 
        #listaempresasdeasesor.active { right: 0; } @keyframes floating { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } } 
    </style>
</head>
<body style="overflow:hidden;">
    
    <div style="width:100%; height:100%; box-sizing: border-box; padding-left:3%;">
        <h1 style="color:#47A1A8;">Asignacion de asesores</h1>
        <p style="font-size:1vw;">En esta sección puedes gestionar cada uno de los colaboradors de la plataforma, sus datos, estadocs y permisos.</p>
        
        <div style="width:96%; aspect-ratio:35/1; display:flex; flex-direction:row; justify-content: space-between;">
            <div style="width:50%; height:95%; position: relative;">
                <input id="buscarc" type="text" placeholder="Buscar" style="padding-left:40px; font-size:.9vw; width:calc(99% - 40px); height:100%; border:2px solid #47A1A8; border-radius:12px;" oninput="filtrarempresacs()">
                <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-30%); color: #ccc;">
                    <img src="https://img.icons8.com/material-outlined/24/cccccc/search.png" alt="Search Icon">
                </span>
            </div>

            <select id="filtrarporestadocc" style="padding-left:1%; font-size:.9vw; width:22%; height:115%; background-color:#ffffff; border: 2px solid #47A1A8; border-radius:12px;" onchange="filtrarempresacs()">
                <option value="Todos">Todos</option>
                    <?php foreach ($colaborador as $colaboradors): ?>
                        <?php if ($colaboradors['estadoc'] === 1): ?>
                            <option value="<?php echo $colaboradors['nombre']; ?>"><?php echo $colaboradors['nombre']; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
            </select>

            <div onclick="verlistaempresasdeasesor()" style="cursor:pointer; width:13%; height:100%; background-color:#ffffff; border-radius:10px; display:flex; align-items:center; justify-content:center; border: 2px solid #47A1A8;">
                <p style="color:#47A1A8; font-size:.9vw;">Asesores</p>
            </div>
            <div onclick="mostrarmodalsumarcolaborador()" style="cursor:pointer; width:13%; height:100%; background-color:#47A1A8; border-radius:10px; display:flex; align-items:center; justify-content:center; border: 2px solid #47A1A8;">
                <p style="color:#ffffff; font-size:.9vw;">+ Nuevo Asesor</p>
            </div>
        </div>

        <div id="listac" style="width:96%; height:calc(70% + 10px); margin-top:20px; overflow-y: auto;">

            @foreach ($Companies as $Company)

            <div id="empresac" class="empresac" style="width:100%; aspect-ratio:25/1; margin-bottom:.6%; background-color:#F2F3F6; border-radius:.5vw; display:flex; flex-direction:row; align-items:center;">
                <p class="nombre-empresac" style="margin-left:2%; width:74%; font-size:.9vw; cursor:pointer;">{{$Company['nameCompany']}}</p>
                <select id="filtrarporestado" style="padding-left:1%; font-size:.9vw; width:22%; height:70%; background-color:#ffffff; border: 2px solid #47A1A8; border-radius:12px;" onchange="filtrarEmpresas()">
                    <option value="null">Sin asesor</option> 
                    <?php foreach ($colaborador as $colaboradors): ?>
                        <?php if ($colaboradors['estadoc'] === 1): ?>
                            <option value="<?php echo $colaboradors['nombre']; ?>"><?php echo $colaboradors['nombre']; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>

            @endforeach 
        
 
        </div>

    </div>


    <div id="modalnuevocolaboradorc" style="display:none; position:relative; width:150vw; height:150vh; background-color:rgba(50, 50, 50, 0.8); position:fixed; padding:0; margin:0; z-index: 99999; margin-left:-18.4%; align-items:center; justify-content:center;">
       
            <div style="position:relative; Width:50vw;height:auto;background-color:#ffffff; margin:0;padding:0;border-radius:12px; display:flex; flex-direction:column; align-items:center; justify-content:center;"> 

                <div style="height:80%; padding:3%; padding-top:5%; padding-bottom:5%;">
                    <p style="margin:0; padding:0; color:#47A1A8; font-size:1.3vw; font-weight:700;">Nuevo Asesor</p>
                    <p style="font-size:.7vw;  padding:0;">Puedes usar este formulario para añadir un nuevo asesor al equipo de trabajo, por favor completa todos los campos.</p>

                    <div style="width:100%; display:flex; flex-direction:row; justify-content:space-between;">
                    <div style="margin-bottom: 16px; position: relative; width:49%;">
                        <input id="cargoasesor" type="text" name="Cargo" placeholder="Cargo" style="width: calc(99% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                            <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                                <img src="https://img.icons8.com/material-outlined/24/cccccc/building.png" alt="Company Icon">
                            </span>
                        </div>
                        <div style="margin-bottom: 16px; position: relative; width:49%;">
                            <input id="emailasesor" type="Email" name="Email" placeholder="Email" style="width: 100%; padding: 6px; padding-left:40px; width:calc(98% - 40px); border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                            <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                                <img src="https://img.icons8.com/material-outlined/24/cccccc/mail.png" alt="User Icon">
                            </span>
                        </div>
                    </div>

                    <div style="margin-bottom: 16px; position: relative;">
                        <input id="nombreasesor" type="text" name="empresac" placeholder="Nombre" style="width: calc(99% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/user.png" alt="Company Icon">
                        </span>
                    </div>

                    <div style="width:100%; display:flex; flex-direction:row; justify-content:space-between;">
                        <div style="margin-bottom: 16px; position: relative; width:49%;">
                            <input id="cedulaasesor" type="number" name="identificacion"  placeholder="Cedula" style="width: 100%; padding: 6px; padding-left:40px; width:calc(96% - 40px); border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                            <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                                <img src="https://img.icons8.com/material-outlined/24/cccccc/identification-documents.png" alt="Identification Icon">
                            </span>
                        </div>
                        <div style="margin-bottom: 16px; position: relative; width:49%;">
                            <input id="tarjetaprofesioanlasesor" type="number" name="empleados"  placeholder="Tarjeta profesional" style="width: 100%; padding: 6px; padding-left:40px; width:calc(98% - 40px); border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                            <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                                <img src="https://img.icons8.com/?size=24&id=qePzjQLJYgjF&format=png&color=cccccc" alt="User Icon">
                            </span>
                        </div>
                    </div>


                    <div style="margin-bottom: 16px; position: relative;">
                        <input id="direccionasesor" type="text" name="location" placeholder="Dirección" style="width: calc(99% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/marker.png" alt="Location Icon">
                        </span>
                    </div>

                    <div style="width:100%; display:flex; flex-direction:row; justify-content:space-between;">
                        <div style="margin-bottom: 16px; position: relative; width:49%;">
                            <input id="telefonoasesor" type="number" name="Teléfono" placeholder="Teléfono" style="width: 100%; padding: 6px; padding-left:40px; width:calc(96% - 40px); border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                            <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                                <img src="https://img.icons8.com/material-outlined/24/cccccc/phone.png" alt="Identification Icon">
                            </span>
                        </div>
                        <div style="margin-bottom: 16px; position: relative; width:49%;">
                            <input id="whatsappasesor" type="number" name="WhatsApp" placeholder="WhatsApp" style="width: 100%; padding: 6px; padding-left:40px; width:calc(98% - 40px); border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                            <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                                <img src="https://img.icons8.com/material-outlined/24/cccccc/whatsapp.png" alt="User Icon">
                            </span>
                        </div>
                    </div>

                    <div style="width:100%; display:flex; flex-direction:column;">
                        <button onclick="guardarnuevoasesor()" style="cursor:pointer; background-color:#47A1A8; color:#ffffff; border-radius:10px; border:none; width:100%;height:35px;font-weight:600;">Guardar</button>
                        <p onclick="cerrarnuevoasesor()" style="width:100%; text-align:center; color:#47A1A8; cursor:pointer;">Descartar y cerrar</p>
                    </div>

                </div>
        
            </div> 
           
    </div>
    


    <div id="modaleliminarcolaboradorc" style="display:none; position:relative; width:150vw; height:150vh; background-color:rgba(50, 50, 50, 0.8); position:fixed; padding:0; margin:0; z-index: 99999; margin-left:-18.4%; align-items:center; justify-content:center;">
        <div style="position:relative; Width:50vw;height:50vh;;background-color:#ffffff; margin:0;padding:0;border-radius:12px; display:flex; flex-direction:column; align-items:center; justify-content:center;">
            <img src="img/logo.svg" alt="logo" style="width:30%;">
            <p style="width:80%;text-align:center; font-size:.9vw;">Para eliminar de manera permanente a este colaborador, por favor escriba la palabra "eliminar". Tenga en cuenta que las empresas asignadas a esta persona quedarán sin asesor, y deberá reasignarlas una por una.</b></p>
            <input id="palabraeliminarc" type="text" placeholder="Escriba la palabra eliminar" style=" text-align:center;width:50%;height:30px;border-radius:12px;border:2px solid #47A1A8;">
            <div onclick="confirmareliminarcolaboradorc()" style="background-color:#47A1A8; margin-top:10px; width:200px; height:35px; border-radius:9px; display:flex; align-items:center; justify-content:center; cursor:pointer;"><p style="color:#ffffff; width:100%;height:50%;text-align:center;padding:0;">Eliminar</p></div>
            <p onclick="cerrareliminarcolaboradorc()" style="color:#47A1A8; cursor:pointer;">Cerrar</p>
        </div> 
    </div>

    <!--slide-->
    <div id="slideDivc" style="display:block; z-index:9999999999; padding:2%; box-sizing: border-box;">

            <div style="height:100%; overflow-y: auto; overflow-x: hidden; padding:3%; padding-top:0; padding-bottom:0;">
                <p style="margin:0; padding:0; color:#47A1A8; font-size:1.3vw; font-weight:700;">Informacion del colaborador</p>
                <p style="font-size:.7vw;  padding:0;">A continuación se muestra la información del colaborador seleccionado. Por favor, no realices modificaciones a menos que sea estrictamente necesario.</p>

                <div style="width:100%; display:flex; flex-direction:row; justify-content:space-between;">
                <div style="margin-bottom: 16px; position: relative; width:49%;">
                    <input id="cargoasesoractualizar" type="text" name="Cargo" value="<?php echo $datosdelcolaborador['cargo']; ?>" placeholder="Cargo" style="width: calc(99% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/building.png" alt="Company Icon">
                        </span>
                    </div>
                    <div style="margin-bottom: 16px; position: relative; width:49%;">
                        <input readonly type="text" value="<?php echo $datosdelcolaborador['fecha_creacion'];?>" name="Suscripción" placeholder="Suscripción" style="width: 100%; padding: 6px; padding-left:40px; width:calc(98% - 40px); border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/calendar.png" alt="User Icon">
                        </span>
                    </div>
                </div>

                <div style="margin-bottom: 16px; position: relative;">
                    <input id="nombreasesoractualizar" type="text" name="empresac" value="<?php echo $datosdelcolaborador['nombre_colaborador']; ?>" placeholder="Nombre del asesor" style="width: calc(99% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                    <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                        <img src="https://img.icons8.com/material-outlined/24/cccccc/building.png" alt="Company Icon">
                    </span>
                </div>

                <div style="width:100%; display:flex; flex-direction:row; justify-content:space-between;">
                    <div style="margin-bottom: 16px; position: relative; width:49%;">
                        <input id="cedulaasesoractualizar" type="number" name="identificacion" value="<?php echo $datosdelcolaborador['cedula'];?>" placeholder="cedula" style="width: 100%; padding: 6px; padding-left:40px; width:calc(96% - 40px); border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/identification-documents.png" alt="Identification Icon">
                        </span>
                    </div>
                    <div style="margin-bottom: 16px; position: relative; width:49%;">
                        <input id="cantidadempactualizar" type="number" name="empleados" value="<?php echo $datosdelcolaborador['numero_empresas'];?>" placeholder="Empresas Asignadas" style="width: 100%; padding: 6px; padding-left:40px; width:calc(98% - 40px); border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/user.png" alt="User Icon">
                        </span>
                    </div>
                </div>


                <div style="margin-bottom: 16px; position: relative;">
                    <input id="direccionasesoractualizar" type="text" name="location" value="<?php echo $datosdelcolaborador['direccion'];?>" placeholder="Dirección" style="width: calc(99% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                    <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                        <img src="https://img.icons8.com/material-outlined/24/cccccc/marker.png" alt="Location Icon">
                    </span>
                </div>

                <div style="margin-bottom: 16px; position: relative;">
                    <input id="emailasesoractualizar" type="text" name="location" value="<?php echo $datosdelcolaborador['correo_contacto'];?>" placeholder="Email" style="width: calc(99% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                    <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                        <img src="https://img.icons8.com/material-outlined/24/cccccc/mail.png" alt="Location Icon">
                    </span>
                </div>

                <div style="margin-bottom: 16px; position: relative;">
                    <input id="tarjetaasesoractualizar" type="text" name="tarjeta" value="<?php echo $datosdelcolaborador['tarjetaprofesional'];?>" placeholder="Tarjeta profesional" style="width: calc(99% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                    <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                        <img src="https://img.icons8.com/?size=24&id=qePzjQLJYgjF&format=png&color=cccccc" alt="Location Icon">
                    </span>
                </div>

                <div style="width:100%; display:flex; flex-direction:row; justify-content:space-between;">
                    <div style="margin-bottom: 16px; position: relative; width:49%;">
                        <input id="telefonoasesoractualizar" type="number" value="<?php echo $datosdelcolaborador['telefono'];?>" name="Teléfono" placeholder="Teléfono" style="width: 100%; padding: 6px; padding-left:40px; width:calc(96% - 40px); border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/phone.png" alt="Identification Icon">
                        </span>
                    </div>
                    <div style="margin-bottom: 16px; position: relative; width:49%;">
                        <input id="whatsappasesoractualizar" type="number" value="<?php echo $datosdelcolaborador['whatsapp'];?>" name="WhatsApp" placeholder="WhatsApp" style="width: 100%; padding: 6px; padding-left:40px; width:calc(98% - 40px); border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/whatsapp.png" alt="User Icon">
                        </span>
                    </div>
                </div>

                <div style="width:100%; display:flex; flex-direction:row; justify-content:space-between;">
                    <div style="margin-bottom: 16px; position: relative; width:50%; "> 
                        <button onclick="cerrarasesorsinmodificar()" style="cursor:pointer; background-color:#ffffff; color:#47A1A8; border-radius:10px; border:2px solid #47A1A8; width:100%;height:35px;font-weight:600;">Cerrar</button>
                    </div>
                    <div style="margin-bottom: 16px; position: relative; width:50%; margin-left:2%;">
                        <button onclick="guradrcolaboradorsmodificado(<?php echo $datosdelcolaborador['id'];?>)" style="cursor:pointer; background-color:#47A1A8; color:#ffffff; border-radius:10px; border:none; width:100%;height:35px;font-weight:600;">Guardar</button>
                    </div>
                </div>

            </div>
        </div>

        <div id="slideDivcd" style="padding:2%; box-sizing: border-box;">
            <p style="margin:0; padding:0; color:#47A1A8; font-size:1.3vw; font-weight:700;">Informacion del colaborador</p>
            <p style="font-size:.7vw;  padding:0;">Este es un email transaccional, por tanto, debe ser de caracter informativo. No se espera que el usuario responda y no existe un historial.</p>
            <div style="margin-bottom: 16px; position: relative;">
                <input id="asuntoemailcolaborador" type="text" name="empresac" placeholder="Asunto" style="width: calc(99% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                    <img src="https://img.icons8.com/material-outlined/24/cccccc/mail.png" alt="Company Icon">
                </span>
            </div>
            <div style="margin-bottom: 10px; position: relative;">
                <textarea name="descripcion" placeholder="Escribe aqui el mensaje que deseas enviar a este usuario" rows="3" style="height:70vh; width: 98%; padding: 6px 6px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 1vw; background-color: #FAFBFE; color: #333; resize: none;"></textarea>
            </div>
            
            <div style="width:100%; display:flex; flex-direction:row; justify-content:space-between;">
                <div style="margin-bottom: 16px; position: relative; width:50%; "> 
                    <button onclick="enviaremailcolaborador()" style="cursor:pointer; background-color:#ffffff; color:#47A1A8; border-radius:10px; border:2px solid #47A1A8; width:100%;height:35px;font-weight:600;">Cerrar</button>
                </div>
                <div style="margin-bottom: 16px; position: relative; width:50%; margin-left:2%;">
                    <button onclick="enviaremailcolaborador()" style="cursor:pointer; background-color:#47A1A8; color:#ffffff; border-radius:10px; border:none; width:100%;height:35px;font-weight:600;">Enviar</button>
                </div>
            </div>
        </div>

        <div id="listaempresasdeasesor" style="padding:2%; box-sizing: border-box;">
            <p style="margin:0; padding:0; color:#47A1A8; font-size:1.3vw; font-weight:700;">Informacion del colaborador</p>
            <p style="font-size:.7vw;  padding:0;">Este es un email transaccional, por tanto, debe ser de caracter informativo. No se espera que el usuario responda y no existe un historial.</p>
            
            <div style="margin-bottom: 16px; position: relative;">
                <input id="buscartodaslasempresas" oninput="filterCompanies()" type="text" placeholder="Buscar" style="width: calc(99% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                    <img src="https://img.icons8.com/material-outlined/24/cccccc/search.png" alt="Company Icon">
                </span>
            </div>

            <div style="margin-bottom: 10px; position: relative; height:80%; overflow-y: auto;">
                <?php foreach ($colaborador as $colaboradors): ?>
                    <div id="empresadeasesorlista<?php echo $colaboradors['id']; ?>" class="empresadeasesorlista" data-estadoc="<?php echo $colaboradors['estadoc']; ?>" style="width:100%; aspect-ratio:18/1; margin-bottom:.6%; background-color:#F2F3F6; border-radius:.5vw; display:flex; flex-direction:row; align-items:center;">
                                                
                        <label class="switch" style="margin-left:3%; position: relative; display: inline-block; height: 100%; aspect-ratio: 1.8/1;">
                            <input type="checkbox" id="switchc{{$colaboradors['id']}}" onchange="toggleswitchc({{$colaboradors['id']}})" style="opacity: 0; width: 0;" 
                                <?php echo $colaboradors['estadoc'] == 1 ? 'checked' : ''; ?>>
                            <span class="slideres <?php echo $colaboradors['estadoc'] == 1 ? 'on' : 'off'; ?>" style="display:flex; align-items:center; position: absolute; cursor: pointer; top: 10%; left: 10%; right: 0; bottom: 0; transition: background-color 0.4s ease; border-radius: 100vw;">
                                <span style="position: absolute; content: ''; height: 75%; aspect-ratio: 1/1; border-radius: 50%; left: 8%; background-color: white; transition: transform 0.4s ease;"></span>
                            </span>
                        </label>
                        <p id="nombreasesorlista<?php echo $colaboradors['id']; ?>" class="nombreempresadelasesor" style="margin-left:3%; width:80%; font-size:.9vw; cursor:pointer;"><?php echo $colaboradors['nombre']; ?></p>
                        <img  onclick="eliminarcolaboradorc({{$colaboradors['id']}})" style="height:100%; margin-right:3%; cursor:pointer;" src="https://img.icons8.com/material-outlined/24/47A1A8/delete.png" alt="Edit Icon">
                        <img  onclick="editarcolaborador({{$colaboradors['id']}})" style="height:100%; margin-right:4%; cursor:pointer;" src="https://img.icons8.com/material-outlined/24/47A1A8/edit.png" alt="Edit Icon">
                   
                    </div>
                <?php endforeach; ?>
            </div>

            
            <div style="width:100%; display:flex; flex-direction:row; justify-content:space-between;">
            <button onclick="verlistaempresasdeasesor()" style="cursor:pointer; background-color:#47A1A8; color:#ffffff; border-radius:10px; border:none; width:100%;height:35px;font-weight:600;">Cerrar</button>

            </div>
        </div>

    
    <script>








        //var colaboradors = <?php echo json_encode($colaborador); ?>;
        var colaboradoraeliminar = "";

        
        
        function filtrarempresacs() {
            const input = document.getElementById('buscarc').value.toLowerCase(); 
            const seleccionFiltro = document.getElementById('filtrarporestadocc').value.toLowerCase(); 
            const empresacs = document.querySelectorAll('.empresac'); 

            empresacs.forEach(empresac => {
                const nombreempresac = empresac.querySelector('.nombre-empresac').textContent.toLowerCase(); 
                const selectEmpresac = empresac.querySelector('select'); 
                const seleccionEmpresac = selectEmpresac.options[selectEmpresac.selectedIndex].value.toLowerCase();

                const coincideNombre = nombreempresac.includes(input); 
                const coincideSeleccion = (seleccionFiltro === "todos" || seleccionFiltro === seleccionEmpresac); 

                if (coincideNombre && coincideSeleccion) {
                    empresac.style.display = 'flex'; 
                } else {
                    empresac.style.display = 'none'; 
                }
            });
        }

        function mostrarmodalsumarcolaborador(){
            document.getElementById('modalnuevocolaboradorc').style.display = "flex";
            document.getElementById('cargoasesor').value = "";
            document.getElementById('emailasesor').value = "";
            document.getElementById('nombreasesor').value = "";
            document.getElementById('cedulaasesor').value = "";
            document.getElementById('tarjetaprofesioanlasesor').value = "";
            document.getElementById('direccionasesor').value = "";
            document.getElementById('telefonoasesor').value = "";
            document.getElementById('whatsappasesor').value = "";
        }
        function ocultarmodalsumarcolaborador(){
            document.getElementById('modalnuevocolaboradorc').style.display = "none";
        }
        function eliminarcolaboradorc(id){
            colaboradoraeliminar = id;
            document.getElementById('palabraeliminarc').value = "";
            document.getElementById('modaleliminarcolaboradorc').style.display = "flex";
        }
        
        function confirmareliminarcolaboradorc(){
            let palabraeliminarc = document.getElementById('palabraeliminarc').value;
            if(palabraeliminarc === 'eliminar'){
                document.getElementById('modaleliminarcolaboradorc').style.display = "none";
                const empresacDiv = document.getElementById('empresadeasesorlista' + colaboradoraeliminar);
                if (empresacDiv) {
                    empresacDiv.style.display = 'none';

                    //logica para eliminar asesor de la base de datos

                }

                //alert('Colaborador '+colaboradoraeliminar+' eliminado');
                   
            }else{
                alert('La palabra '+palabraeliminarc+' no coincide');
            }
        }
        
        function enviarinvitacion(){
            let nombre = document.getElementById('nombreinvitacionc').value;
            let email = document.getElementById('emailinvitacionc').value;
            if(nombre && email){
                ocultarmodalsumarcolaborador()
                alert('Enviando invitacion a '+nombre+' al correo electronico '+email);
            }else{
                alert('Los campos no pueden estar vacios');
            }
        }

        function editarcolaborador(id) {
            const slideDivc = document.getElementById('slideDivc');
            if (slideDivc.classList.contains('active')) {
                slideDivc.classList.remove('active'); 
            } else {
                slideDivc.classList.add('active');  
                //alert(id);  
            }
        }
        

        function verlistaempresasdeasesor(id) {
            const slideDivc = document.getElementById('listaempresasdeasesor');
            if (slideDivc.classList.contains('active')) {
                slideDivc.classList.remove('active'); 
            } else {
                slideDivc.classList.add('active');  
                //alert(id);  
            }
        }

        function enviaremailcolaborador(id) {
            const slideDivc = document.getElementById('slideDivcd');
            if (slideDivc.classList.contains('active')) {
                slideDivc.classList.remove('active'); 
            } else {
                slideDivc.classList.add('active');   
            }
        }

        function cerrarasesorsinmodificar(){
            const slideDivc = document.getElementById('slideDivc');
            slideDivc.classList.remove('active'); 
        }

        function guradrcolaboradorsmodificado(id){
            const slideDivc = document.getElementById('slideDivc');
            let cargoasesoractualizar= document.getElementById('cargoasesoractualizar').value;
            let nombreasesoractualizar= document.getElementById('nombreasesoractualizar').value;
            let cedulaasesoractualizar= document.getElementById('cedulaasesoractualizar').value;
            let cantidadempactualizar= document.getElementById('cantidadempactualizar').value;
            let direccionasesoractualizar= document.getElementById('direccionasesoractualizar').value;
            let emailasesoractualizar= document.getElementById('emailasesoractualizar').value;
            let tarjetaasesoractualizar= document.getElementById('tarjetaasesoractualizar').value;
            let telefonoasesoractualizar= document.getElementById('telefonoasesoractualizar').value;
            let whatsappasesoractualizar= document.getElementById('whatsappasesoractualizar').value;

            document.getElementById('nombreasesorlista'+id).textContent = nombreasesoractualizar;
            
            //Logica para Actualizar Asesor
            slideDivc.classList.remove('active'); 
                alert(
                    'Asesor actualizado:\n' +
                    'ID: ' + id + '\n' +
                    'Cargo: ' + cargoasesoractualizar + '\n' +
                    'Nombre: ' + nombreasesoractualizar + '\n' +
                    'Cédula: ' + cedulaasesoractualizar + '\n' +
                    'Cantidad de empresas: ' + cantidadempactualizar + '\n' +
                    'Dirección: ' + direccionasesoractualizar + '\n' +
                    'Email: ' + emailasesoractualizar + '\n' +
                    'Tarjeta: ' + tarjetaasesoractualizar + '\n' +
                    'Teléfono: ' + telefonoasesoractualizar + '\n' +
                    'WhatsApp: ' + whatsappasesoractualizar
                );

        }

        function solicitardatoscolaboradorseleccionado(){

        }
        function cambiarestadocIconoc() {
            var estadoc = document.getElementById("estadoc").value;
            var icono = document.getElementById("estadocIconoc");
            if (estadoc == "1") {
                icono.src = "https://img.icons8.com/material-outlined/24/47A1A8/filled-circle.png";
            } else {
                icono.src = "https://img.icons8.com/material-outlined/24/FD7377/filled-circle.png";
            }
        }
        window.onload = function() {
           cambiarestadocIconoc();
        }

         
        function cerrareliminarcolaboradorc(){
            document.getElementById('modaleliminarcolaboradorc').style.display = "none";
        }


        function toggleswitchc(colaboradorId) {
            var switchcElement = document.getElementById("switchc" + colaboradorId);
            var estadoc = switchcElement.checked ? 1 : 0;  
            var slider = switchcElement.nextElementSibling;
            var circle = slider.querySelector('span');
            var color = estadoc === 1 ? '#47A1A8' : '#FD7377';  
            slider.style.backgroundColor = color;

            if (estadoc === 1) {
                circle.style.transform = 'translateX(100%)';
            } else {
                circle.style.transform = 'translateX(0px)';
            }
            // Actualizar estado en el servidor
            actualizarestadoc(colaboradorId, estadoc);
        }

        function actualizarestadoc(colaboradorId, estadoc) {
            /*var xhr = new XMLHttpRequest();
            xhr.open("POST", "actualizar_estadoc.php", true); 
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    console.log("estadoc de colaborador " + colaboradorId + " actualizado a " + estadoc);
                }
            };
            xhr.send("colaborador_id=" + colaboradorId + "&estadoc=" + estadoc);  // Enviar datos al servidor*/
        }


        function toggleswitchcclientes(userId) {
            var checkbox = document.getElementById('switchc' + userId);
            var estadoc = checkbox.checked ? 1 : 0; 
            var slider = document.querySelector('#switchc' + userId + ' + .slideres');
            var circle = slider.querySelector('span');
            if (estadoc === 1) {
                slider.style.backgroundColor = '#47A1A8';
                circle.style.transform = 'translateX(100%)';
            } else {
                slider.style.backgroundColor = '#FD7377'; 
                circle.style.transform = 'translateX(0px)';
            }
        }

        function filterCompanies() {
            var input = document.querySelector('#buscartodaslasempresas'); 
            var filter = input.value.toLowerCase(); 
            var empresas = document.querySelectorAll('.empresadeasesorlista');
            empresas.forEach(function(empresac) {
                var nombreEmpresa = empresac.querySelector('.nombreempresadelasesor').textContent.toLowerCase();
                if (nombreEmpresa.indexOf(filter) > -1) {
                    empresac.style.display = 'flex'; 
                } else {
                    empresac.style.display = 'none';
                }
            });
        }

        function eliminarasesor(id){
            alert('Eliminando #'+ id);
            
        }

        function guardarnuevoasesor(){

            let cargo = document.getElementById('cargoasesor').value;
            let emailasesor = document.getElementById('emailasesor').value;
            let nombreasesor = document.getElementById('nombreasesor').value;
            let cedulaasesor = document.getElementById('cedulaasesor').value;
            let tarjetaprofesioanlasesor = document.getElementById('tarjetaprofesioanlasesor').value;
            let direccionasesor = document.getElementById('direccionasesor').value;
            let telefonoasesor = document.getElementById('telefonoasesor').value;
            let whatsappasesor = document.getElementById('whatsappasesor').value;
            if (!cargo || !emailasesor || !nombreasesor || !cedulaasesor || !telefonoasesor || !whatsappasesor) {
                alert('Por favor, completa todos los campos obligatorios.');
                return;
            }else{
                alert('Creando nuevo Asesor en el sistema');
                document.getElementById('modalnuevocolaboradorc').style.display = "none";
            }    
        }
        
        
        function cerrarnuevoasesor(){
            document.getElementById('modalnuevocolaboradorc').style.display = "none";
        }


    </script>
</body>
</html>
