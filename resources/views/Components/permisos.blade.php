<?php
$tiposdetipoempresa = [
    ['id' => 1, 'nombre' => 'Spa', 'estado' => 0, 'porcentajecompletado'=> 60, 'tipologia' => 'Spa', 'modulos' => [1, 2, 3, 4, 5]],
    ['id' => 2, 'nombre' => 'Spa con medico', 'estado' => 1, 'porcentajecompletado'=> 40, 'tipologia' => 'Clinica estetica', 'modulos' => [3, 2, 1, 9]],
    ['id' => 3, 'nombre' => 'Salon de belleza', 'estado' => 1, 'porcentajecompletado'=> 60, 'tipologia' => 'Spa', 'modulos' => [2, 3, 5]],
];

$modulosseleccionar = [
    ['id' => 1, 'nombre' => 'Recursos humanos', 'estado' => 0, 'porcentajecompletado'=> 60, 'tipologia' => 'Spa', 'color' => '#fd7377', 'icono' => 'img/moduloicono1.png'],
    ['id' => 2, 'nombre' => 'establecimiento e infraetructura', 'estado' => 1, 'porcentajecompletado'=> 40, 'tipologia' => 'Clinica estetica', 'color' => '#62646f', 'icono' => 'img/moduloicono2.png'],
    ['id' => 3, 'nombre' => 'Tratamiento de medicamentos', 'estado' => 0, 'porcentajecompletado'=> 60, 'tipologia' => 'Spa', 'color' => '#f2ac3e', 'icono' => 'img/moduloicono3.png'],
    ['id' => 4, 'nombre' => 'Recursos humanos', 'estado' => 0, 'porcentajecompletado'=> 60, 'tipologia' => 'Spa', 'color' => '#7b6cc9', 'icono' => 'img/moduloicono4.png'],
    ['id' => 5, 'nombre' => 'establecimiento e infraetructura', 'estado' => 1, 'porcentajecompletado'=> 40, 'tipologia' => 'Clinica estetica', 'color' => '#ffca55', 'icono' => 'img/moduloicono5.png'],
    ['id' => 6, 'nombre' => 'Tratamiento de medicamentos', 'estado' => 0, 'porcentajecompletado'=> 60, 'tipologia' => 'Spa', 'color' => '#ff5055', 'icono' => 'img/moduloicono6.png'],
    ['id' => 7, 'nombre' => 'Recursos humanos', 'estado' => 0, 'porcentajecompletado'=> 60, 'tipologia' => 'Spa', 'color' => '#47a1a8', 'icono' => 'img/moduloicono7.png'],
    ['id' => 8, 'nombre' => 'establecimiento e infraetructura', 'estado' => 1, 'porcentajecompletado'=> 40, 'tipologia' => 'Clinica estetica', 'color' => '#ffca55', 'icono' => 'img/moduloicono8.png'],
    ['id' => 9, 'nombre' => 'Tratamiento de medicamentos', 'estado' => 0, 'porcentajecompletado'=> 60, 'tipologia' => 'Spa', 'color' => '#7a8ffa', 'icono' => 'img/moduloicono3.png'],
   
]; 

$informaciondeltipotipoempresa = [
    'id'                      => 1,
    'nombre_tipoempresa'          => 'Nombre de la tipoempresa numero uno',
    'nit'                     => '123456789',
    'numero_empleados'        => 150,
    'tipologia'               => 'Spa',
    'direccion'               => 'Calle Falsa 123, Ciudad',
    'telefono'                => '3102640456',
    'whatsapp'                => '573102640456',
    'representante_legal'     => 'Juan Pérez',
    'sitio_web'               => 'https://www.ejemplo.com',
    'descripcion_tipoempresa'     => 'Descripción breve de la tipoempresa y sus actividades.',
    'estado'                  => 1,
    'ultima_fecha_pago'       => '2024-10-01',
    'fecha_vencimiento_pago'  => '2024-11-01',
    'correo_contacto'         => 'contacto@ejemplo.com',
    'representante_telefono'  => '+591 456 789 012',
    'fecha_creacion'          => '2022-01-15',
    'tipo_persona'            => 'Jurídica',
    'sector'                  => 'Salud',
    'asesor'                  => 'Asesor #3',
    'ciudad'                  => 'Bogotá',
    'porcentajecompletado'    => 60,
];


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tipotipoempresa</title>
    <style>
        #slideDivtipotipoempresa { width: 500px; height: 100vh; background-color: #ffffff; position: fixed; top: 0; right: -600px; border-radius: 14px 0 0 14px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); transition: right 0.5s ease; } 
        #slideDivtipotipoempresa.active { right: 0; } @keyframes floating { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } } 
        @keyframes growWidth { from { width: 0; } to { width: 60%; } } #porcentajetotal div { animation: growWidth 3s ease forwards; }
        .switchtipotipoempresa input{opacity:0;width:0}.slideres{display:flex;align-items:center;position:absolute;cursor:pointer;top:10%;left:10%;right:0;bottom:0;background-color:#FD7377;transition:0.4s;border-radius:100vw}.slideres span{position:absolute;content:'';height:75%;aspect-ratio:1/1;border-radius:50%;left:8%;background-color:white;transition:0.4s}.slideres.on{background-color:#47A1A8}.slideres.off{background-color:#FD7377}.slideres.on span{transform:translateX(100%)}.slideres.off span{transform:translateX(0)}
        #slideDivtipotipoempresacdclientes { width: 500px; height: 100vh; background-color: #ffffff; position: fixed; top: 0; right: -600px; border-radius: 14px 0 0 14px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); transition: right 0.5s ease; } 
        #slideDivtipotipoempresacdclientes.active { right: 0; } @keyframes floating { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } } 
    </style>
</head> 
<body style="overflow:hidden;">
    
    <div style="width:100%; height:100%; box-sizing: border-box; padding-left:3%;">
        <h1 style="color:#47A1A8;">Tipos de empresa y permisos</h1>
        <p style="font-size:1vw;">En esta sección puedes gestionar cada uno de los tipotipoempresa de la plataforma, sus datos, estados y permisos.</p>
        
        <div style="width:96%; aspect-ratio:35/1; display:flex; flex-direction:row; justify-content: space-between;">
            <div style="width:50%; height:95%; position: relative;">
                <input id="buscartipotipoempresa" type="text" placeholder="Buscar" style="padding-left:40px; font-size:.9vw; width:calc(99% - 40px); height:100%; border:2px solid #47A1A8; border-radius:12px;" oninput="filtrartipoempresas()">
                <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-30%); color: #ccc;">
                    <img src="https://img.icons8.com/material-outlined/24/cccccc/search.png" alt="Search Icon">
                </span>
            </div>
            <select id="filtrarporestadotipotipoempresa" style="padding-left:1%; font-size:.9vw; width:22%; height:115%; background-color:#ffffff; border: 2px solid #47A1A8; border-radius:12px;" onchange="filtrartipoempresas()">
                <option value="Todos">Todos</option>
                <option value="Activos">Activos</option>
                <option value="Inactivos">Inactivos</option>
            </select>

            <div onclick="" style="cursor:pointer; width:13%; height:100%; background-color:#ffffff; border-radius:10px; display:flex; align-items:center; justify-content:center; border: 2px solid #47A1A8;">
                <p style="color:#47A1A8; font-size:.9vw;">Exportar</p>
            </div>
            <div onclick="mostrarmodalsumartipousuario()" style="cursor:pointer; width:13%; height:100%; background-color:#47A1A8; border-radius:10px; display:flex; align-items:center; justify-content:center; border: 2px solid #47A1A8;">
                <p style="color:#ffffff; font-size:.9vw;">+ Nuevo Tipo</p>
            </div>
        </div>

        <div style="width:96%;height:calc(73% + 10px); display:flex; flex-direction:rpw;">

        
            <div id="listatipotipoempresa" style="width:50%; height:100%; margin-top:20px; overflow-y: auto; padding:1%; box-sizing:border-box;">
                <?php foreach ($tiposdetipoempresa as $tiposdetipoempresas): ?>
                    <div id="tipoempresa<?php echo $tiposdetipoempresas['id']; ?>" class="tipoempresasc"  
                        style="width:100%; aspect-ratio:25/1; margin-bottom:.6%; background-color:#F2F3F6; border-radius:.5vw; display:flex; flex-direction:row; align-items:center; cursor:pointer;" 
                        onclick="seleccionartipoempresa(<?php echo $tiposdetipoempresas['id']; ?>)">
                        <p id="nombretipoempresa<?php echo $tiposdetipoempresas['id']; ?>" class="nombretipoempresa" style="margin-left:2%; width:87%; font-size:.9vw;"><?php echo $tiposdetipoempresas['nombre']; ?></p>
                        <div style="width:10%; height:100%; display:flex; flex-direction:row; justify-content: flex-end; align-items:center;">
                            <img id="eliminartipoempresa<?php echo $tiposdetipoempresas['id']; ?>" class="eliminartipoempresa" onclick="eliminartipotipoempresa(<?php echo $tiposdetipoempresas['id']; ?>)" style=" height:80%; margin-right:8%; cursor:pointer;" src="https://img.icons8.com/material-outlined/24/47A1A8/delete.png" alt="Delete Icon">
                            <img id="editartipoempresa<?php echo $tiposdetipoempresas['id']; ?>" class="editartipoempresa" onclick="editartipotipoempresa(<?php echo $tiposdetipoempresas['id']; ?>)" style="height:80%; margin-right:8%; cursor:pointer;" src="https://img.icons8.com/material-outlined/24/47A1A8/edit.png" alt="Edit Icon">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>


            <div id="modulos" style="width:23%; height:100%; margin-top:20px; padding:1%; box-sizing:border-box;overflow-y: auto;">
                <?php foreach ($modulosseleccionar as $modulosaseleccionar): ?>
                    <div id="modulosarrastrar<?php echo $modulosaseleccionar['id']; ?>" 
                        class="modulosarrastrar" 
                        data-estado="<?php echo $modulosaseleccionar['estado']; ?>" 
                        draggable="true"
                        style="cursor:pointer; width:100%; aspect-ratio:28/1; margin-bottom:1.2%; background-color:#F2F3F6; border-radius:.5vw; display:flex; flex-direction:row; align-items:center;">
                        <div style="width:12%; aspect-ratio:1/1; background-color:<?php echo $modulosaseleccionar['color']; ?>; margin-left:4%; border-radius:9px; display:flex; align-items:center; justify-content:center;">
                            <img src="<?php echo $modulosaseleccionar['icono']; ?>" alt="icono" style="width:80%;">
                        </div>
                        <p class="nombre-tipoempresa" style="margin-left:2%; width:80%; font-size:.9vw;"><?php echo $modulosaseleccionar['nombre']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

            <div style="width:25%; height:100%; display:flex; flex-direction:column; margin-top:20px; padding:1%; box-sizing:border-box; border: 1px dashed #ccc;">
                <div id="tipologiaconmodulos" style="width:100%; height:95%; overflow-y: auto;" >
                    <!-- Aquí se arrastrarán los elementos -->

                </div>
                <div onclick="alert('Tipo de tipoempresa guardado')" style="cursor:pointer; width:100%; height:6%; background-color:#47A1A8; border-radius:10px; display:flex; align-items:center; justify-content:center; border: 2px solid #47A1A8;">
                    <p style="color:#ffffff; font-size:.9vw;">Guardar</p>
                </div>
            </div>
            
            

        </div>
    </div>

    <div id="modalnuevotipotipodeempresa" style="display:none; position:relative; width:150vw; height:150vh; background-color:rgba(50, 50, 50, 0.8); position:fixed; padding:0; margin:0; z-index: 99999; margin-left:-18.4%; align-items:center; justify-content:center;">
        <div style="position:relative; Width:50vw;height:50vh;;background-color:#ffffff; margin:0;padding:0;border-radius:12px; display:flex; flex-direction:column; align-items:center; justify-content:center;">
            <img src="img/logo.svg" alt="logo" style="width:30%; margin-bottom:10px;">
            <input id="nombredeltipodeempresa" type="text" autocomplete="off" name="name"placeholder="Nombre para el tipo de empresa" style=" text-align:center;width:50%;height:30px;border-radius:12px;border:2px solid #47A1A8;">
            <div onclick="creartipoempresa()" style="background-color:#47A1A8; margin-top:10px; width:200px; height:35px; border-radius:9px; display:flex; align-items:center; justify-content:center; cursor:pointer;"><p style="color:#ffffff; width:100%;height:50%;text-align:center;padding:0;">Crear tipo de empresa</p></div>
            <p onclick="ocultarmodalsumartipousuario()" style="color:#47A1A8; cursor:pointer;">Cerrar</p>
        </div>
    </div>
    <div id="modaleliminartipotipoempresa" style="display:none; position:relative; width:150vw; height:150vh; background-color:rgba(50, 50, 50, 0.8); position:fixed; padding:0; margin:0; z-index: 99999; margin-left:-18.4%; align-items:center; justify-content:center;">
        <div style="position:relative; Width:50vw;height:50vh;;background-color:#ffffff; margin:0;padding:0;border-radius:12px; display:flex; flex-direction:column; align-items:center; justify-content:center;">
            <img src="img/logo.svg" alt="logo" style="width:30%;">
            <p style="width:50%;text-align:center; font-size:.9vw;">Para eliminar de manera <b>permanente</b> este usuario por favor escriba <b>la palabra "eliminar"</b></p>
            <input id="palabraeliminar" type="nombre" placeholder="Escriba la palabra eliminar" style=" text-align:center;width:50%;height:30px;border-radius:12px;border:2px solid #47A1A8;">
            <div onclick="confirmareliminartipotipoempresa()" style="background-color:#47A1A8; margin-top:10px; width:200px; height:35px; border-radius:9px; display:flex; align-items:center; justify-content:center; cursor:pointer;"><p style="color:#ffffff; width:100%;height:50%;text-align:center;padding:0;">Eliminar</p></div>
            <p onclick="cerrareliminartipotipoempresa()" style="color:#47A1A8; cursor:pointer;">Cerrar</p>
        </div> 
    </div>

    <!--slide-->
    <div id="slideDivtipotipoempresa" style="padding:2%; box-sizing: border-box;">

            <div style="height:100%; overflow-y: auto; overflow-x: hidden; padding:3%; padding-top:0; padding-bottom:0;">
                <p style="margin:0; padding:0; color:#47A1A8; font-size:1.3vw; font-weight:700;">Informacion del usuario</p>
                <p style="font-size:.7vw;  padding:0;">A continuación se muestra la información del usuario seleccionado. Por favor, no realices modificaciones a menos que sea estrictamente necesario.</p>

                <div style="width:100%; display:flex; flex-direction:row; justify-content:space-between;">
                <div style="margin-bottom: 16px; position: relative; width:49%;">
                    <input type="text" name="ciudad" value="<?php echo $informaciondeltipotipoempresa['ciudad']; ?>" placeholder="Ciudad" style="width: calc(99% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                    <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                        <img src="https://img.icons8.com/material-outlined/24/cccccc/building.png" alt="Company Icon">
                    </span>
                </div>
                    <div style="margin-bottom: 16px; position: relative; width:49%;">
                        <input readonly type="text" value="<?php echo $informaciondeltipotipoempresa['fecha_creacion'];?>" name="Suscripción" placeholder="Suscripción" style="width: 100%; padding: 6px; padding-left:40px; width:calc(98% - 40px); border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/calendar.png" alt="User Icon">
                        </span>
                    </div>
                </div>

                <div style="margin-bottom: 16px; position: relative;">
                    <input type="text" name="tipoempresa" value="<?php echo $informaciondeltipotipoempresa['nombre_tipoempresa']; ?>" placeholder="Nombre de la tipoempresa o razón social" style="width: calc(99% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                    <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                        <img src="https://img.icons8.com/material-outlined/24/cccccc/building.png" alt="Company Icon">
                    </span>
                </div>

                <div style="width:100%; display:flex; flex-direction:row; justify-content:space-between;">
                    <div style="margin-bottom: 16px; position: relative; width:49%;">
                        <input type="number" name="identificacion" value="<?php echo $informaciondeltipotipoempresa['nit'];?>" placeholder="Nit" style="width: 100%; padding: 6px; padding-left:40px; width:calc(96% - 40px); border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/identification-documents.png" alt="Identification Icon">
                        </span>
                    </div>
                    <div style="margin-bottom: 16px; position: relative; width:49%;">
                        <input type="number" name="empleados" value="<?php echo $informaciondeltipotipoempresa['numero_empleados'];?>" placeholder="No. Empleados" style="width: 100%; padding: 6px; padding-left:40px; width:calc(98% - 40px); border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/user.png" alt="User Icon">
                        </span>
                    </div>
                </div>



                <div style="margin-bottom: 16px; position: relative;">
                    <input type="text" name="location" value="<?php echo $informaciondeltipotipoempresa['direccion'];?>" placeholder="Dirección de la sede principal" style="width: calc(99% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                    <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                        <img src="https://img.icons8.com/material-outlined/24/cccccc/marker.png" alt="Location Icon">
                    </span>
                </div>

                <div style="width:100%; display:flex; flex-direction:row; justify-content:space-between;">
                    <div style="margin-bottom: 16px; position: relative; width:49%;">
                        <input type="number" value="<?php echo $informaciondeltipotipoempresa['telefono'];?>" name="Teléfono" placeholder="Teléfono" style="width: 100%; padding: 6px; padding-left:40px; width:calc(96% - 40px); border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/phone.png" alt="Identification Icon">
                        </span>
                    </div>
                    <div style="margin-bottom: 16px; position: relative; width:49%;">
                        <input type="number" value="<?php echo $informaciondeltipotipoempresa['whatsapp'];?>" name="WhatsApp" placeholder="WhatsApp" style="width: 100%; padding: 6px; padding-left:40px; width:calc(98% - 40px); border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/whatsapp.png" alt="User Icon">
                        </span>
                    </div>
                </div>

                <div style="margin-bottom: 16px; position: relative;">
                    <input type="text" value="<?php echo $informaciondeltipotipoempresa['representante_legal'];?>" name="representante" placeholder="Representante legal" style="width: calc(100% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                    <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                        <img src="https://img.icons8.com/material-outlined/24/cccccc/businessman.png" alt="Representative Icon">
                    </span>
                </div>

                <div style="margin-bottom: 16px; position: relative;">
                    <input type="text" value="<?php echo $informaciondeltipotipoempresa['sitio_web'];?>" name="web" placeholder="Sitio web" style="width: calc(100% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                    <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                        <img src="https://img.icons8.com/material-outlined/24/cccccc/internet.png" alt="Website Icon">
                    </span>
                </div>

                <div style="margin-bottom: 10px; position: relative;">
                    <textarea name="descripcion" placeholder="Descripcion de la tipoempresa" rows="3" style="width: 98%; padding: 6px 6px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333; resize: none;"><?php echo $informaciondeltipotipoempresa['descripcion_tipoempresa'];?></textarea>
                </div>

                <div style="width:100%; display:flex; flex-direction:row; justify-content:space-between;">
                    <div style="margin-bottom: 16px; position: relative; width:50%;"> 
                        <button onclick="guradrtipotipoempresamodificado()" style="cursor:pointer; background-color:#ffffff; color:#47A1A8; border-radius:10px; border: 2px solid #47A1A8; width:100%;height:35px;font-weight:600;">Cerrar</button>
                    </div>
                    <div style="margin-bottom: 16px; position: relative; width:50%; margin-left:2%;">
                        <button onclick="guradrtipotipoempresamodificado()" style="cursor:pointer; background-color:#47A1A8; color:#ffffff; border-radius:10px; border:none; width:100%;height:35px;font-weight:600;">Guardar</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="slideDivtipotipoempresacdclientes" style="padding:2%; box-sizing: border-box;">
            <p style="margin:0; padding:0; color:#47A1A8; font-size:1.3vw; font-weight:700;">Informacion del colaborador</p>
            <p style="font-size:.7vw;  padding:0;">Este es un email transaccional, por tanto, debe ser de caracter informativo. No se espera que el usuario responda y no existe un historial.</p>
            <div style="margin-bottom: 16px; position: relative;">
                <input id="asuntoemailcolaborador" type="text" name="tipoempresac" placeholder="Asunto" style="width: calc(99% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                    <img src="https://img.icons8.com/material-outlined/24/cccccc/mail.png" alt="Company Icon">
                </span>
            </div>
            <div style="margin-bottom: 10px; position: relative;">
                <textarea name="descripcion" placeholder="Escribe aqui el mensaje que deseas enviar a este usuario" rows="3" style="height:70vh; width: 98%; padding: 6px 6px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 1vw; background-color: #FAFBFE; color: #333; resize: none;"></textarea>
            </div>
            
            <div style="width:100%; display:flex; flex-direction:row; justify-content:space-between;">
                <div style="margin-bottom: 16px; position: relative; width:50%; "> 
                    <button onclick="enviaremailclientes()" style="cursor:pointer; background-color:#ffffff; color:#47A1A8; border-radius:10px; border:2px solid #47A1A8; width:100%;height:35px;font-weight:600;">Cerrar</button>
                </div>
                <div style="margin-bottom: 16px; position: relative; width:50%; margin-left:2%;">
                    <button onclick="enviaremailclientes()" style="cursor:pointer; background-color:#47A1A8; color:#ffffff; border-radius:10px; border:none; width:100%;height:35px;font-weight:600;">Enviar</button>
                </div>
            </div>
        </div>


    <script>
        var tipotipoempresa = <?php echo json_encode($modulosseleccionar); ?>;
        var usuarioaeliminar = "";

        function filtrartipoempresas() {
            const inputbuscarempresa = document.getElementById('buscartipotipoempresa').value.toLowerCase(); 
            const estadoFiltrosc = document.getElementById('filtrarporestadotipotipoempresa').value; 
            const tipoempresascs = document.querySelectorAll('.tipoempresasc'); 

            tipoempresascs.forEach(tipoempresa => {
                const nombretipoempresa = tipoempresa.querySelector('.nombretipoempresa').textContent.toLowerCase(); // Cambiado a 'nombretipoempresa'
                const estadotipoempresa = tipoempresa.getAttribute('data-estado'); 
                const coincideEstado = (estadoFiltrosc === "Todos" || (estadoFiltrosc === "Activos" && parseInt(estadotipoempresa) === 1) || (estadoFiltrosc === "Inactivos" && parseInt(estadotipoempresa) === 0)); 
                const coincideNombre = nombretipoempresa.includes(inputbuscarempresa);
                
                if (coincideNombre && coincideEstado) {
                    tipoempresa.style.display = 'flex';
                } else {
                    tipoempresa.style.display = 'none';
                }
            });
        }


        function mostrarmodalsumartipousuario(){
            document.getElementById('modalnuevotipotipodeempresa').style.display = "flex";
        }
        function ocultarmodalsumartipousuario(){
            document.getElementById('modalnuevotipotipodeempresa').style.display = "none";
        }
        function eliminartipotipoempresa(id){
            usuarioaeliminar = id;
            document.getElementById('modaleliminartipotipoempresa').style.display = "flex";
        }
        function confirmareliminartipotipoempresa(){
            let palabraeliminar = document.getElementById('palabraeliminar').value;
            if(palabraeliminar === 'eliminar'){
                document.getElementById('modaleliminartipotipoempresa').style.display = "none";
                const tipoempresaDiv = document.getElementById('tipoempresa' + usuarioaeliminar);
                if (tipoempresaDiv) {
                    tipoempresaDiv.style.display = 'none';
                }                   
            }else{
                alert('La palabra '+palabraeliminar+' no coincide');
            }
        }
        

        function editartipotipoempresa(id) {
            const slideDivtipotipoempresa = document.getElementById('slideDivtipotipoempresa');
            if (slideDivtipotipoempresa.classList.contains('active')) {
                slideDivtipotipoempresa.classList.remove('active'); 
            } else {
                slideDivtipotipoempresa.classList.add('active');  
            }
        }

        
        function guradrtipotipoempresamodificado(){
            const slideDivtipotipoempresa = document.getElementById('slideDivtipotipoempresa');
            slideDivtipotipoempresa.classList.remove('active'); 
        }

         
        function cerrareliminartipotipoempresa(){
            document.getElementById('modaleliminartipotipoempresa').style.display = "none";
        }


        function toggleswitchtipotipoempresa(usuarioId) {
            var switchtipotipoempresaElement = document.getElementById("switchtipotipoempresa" + usuarioId);
            var estado = switchtipotipoempresaElement.checked ? 1 : 0;  
                        var slider = switchtipotipoempresaElement.nextElementSibling;
            var color = estado === 1 ? '#47A1A8' : '#FD7377';  
            slider.style.backgroundColor = color;
            actualizarEstado(usuarioId, estado);
        }

        function actualizarEstado(usuarioId, estado) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "actualizar_estado.php", true); 
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    console.log("Estado de usuario " + usuarioId + " actualizado a " + estado);
                }
            };
            xhr.send("usuario_id=" + usuarioId + "&estado=" + estado);  
        }

        function toggleswitchtipotipoempresaclientes(userId) {
            var checkbox = document.getElementById('switchtipotipoempresa' + userId);
            var estado = checkbox.checked ? 1 : 0; 
            var slider = document.querySelector('#switchtipotipoempresa' + userId + ' + .slideres');
            var circle = slider.querySelector('span');
            if (estado === 1) {
                slider.style.backgroundColor = '#47A1A8';
                circle.style.transform = 'translateX(100%)';
            } else {
                slider.style.backgroundColor = '#FD7377'; 
                circle.style.transform = 'translateX(0px)';
            }
        }




        document.addEventListener('DOMContentLoaded', () => {
            const draggableItems = document.querySelectorAll('.modulosarrastrar');
            const dropZones = [document.getElementById('modulos'), document.getElementById('tipologiaconmodulos')];

            draggableItems.forEach(item => {
                item.addEventListener('dragstart', (e) => {
                    e.dataTransfer.setData('text/plain', item.id);
                    e.target.style.opacity = '0.5'; 
                });

                item.addEventListener('dragend', (e) => {
                    e.target.style.opacity = '1';
                });
            });

            dropZones.forEach(zone => {
                zone.addEventListener('dragover', (e) => {
                    e.preventDefault(); 
                });

                zone.addEventListener('drop', (e) => {
                    e.preventDefault();
                    const id = e.dataTransfer.getData('text/plain'); 
                    const draggedElement = document.getElementById(id); 
                    if (draggedElement) {
                        zone.appendChild(draggedElement); 
                    }
                });
            });
            
        });

        function seleccionartipoempresa(id) {

            // hacer que se muevan a cada uno de los lados segun si existe o no en el array
            const tiposdetipoempresa = <?php echo json_encode($tiposdetipoempresa); ?>;
            const tipoSeleccionado = tiposdetipoempresa.find(tipo => tipo.id === id);
            if (!tipoSeleccionado) {
                alert('Tipo de empresa no encontrado:' + id);
                return;
            }
            const modulosAMover = tipoSeleccionado.modulos.map(modulo => `modulosarrastrar${modulo}`);
            const modulosEnTipologia = [];
            document.querySelectorAll('#tipologiaconmodulos .modulosarrastrar').forEach(item => {
                const moduloId = parseInt(item.id.replace('modulosarrastrar', ''));
                if (!tipoSeleccionado.modulos.includes(moduloId)) {
                    modulosEnTipologia.push(item.id); 
                }
            });
            moverModulos(modulosEnTipologia, 'modulos');
            moverModulos(modulosAMover, 'tipologiaconmodulos');
            function moverModulos(modulos, zonaDestino) {
                const zonaDestinoElement = document.getElementById(zonaDestino);
                modulos.forEach(moduloId => {
                    const modulo = document.getElementById(moduloId);
                    if (modulo) {
                        zonaDestinoElement.appendChild(modulo);
                    }
                });
            }


            const tipoempresas = document.querySelectorAll('.tipoempresasc'); 
            const nombretipoempresas = document.querySelectorAll('.nombretipoempresa');
            const eliminartipoempresa = document.querySelectorAll('.eliminartipoempresa');
            const editartipoempresa = document.querySelectorAll('.editartipoempresa');

            tipoempresas.forEach(emp => {
                emp.style.backgroundColor = '#F2F3F6';
            });

            nombretipoempresas.forEach(emp => {
                emp.style.color = '#868686';
            });

            eliminartipoempresa.forEach(emp => {
                emp.src = 'https://img.icons8.com/material-outlined/24/47A1A8/delete.png';
            });

            editartipoempresa.forEach(emp => {
                emp.src = 'https://img.icons8.com/material-outlined/24/47A1A8/edit.png';
            });

            const tipoempresaSeleccionada = document.getElementById('tipoempresa' + id);
            let nombretipoempresaSeleccionada = document.getElementById('nombretipoempresa' + id);
            let eliminartipoempresaSeleccionada = document.getElementById('eliminartipoempresa' + id);
            let editartipoempresaSeleccionada = document.getElementById('editartipoempresa' + id);
            tipoempresaSeleccionada.style.backgroundColor = 'RGBA(71, 161, 168, .8)';
            nombretipoempresaSeleccionada.style.color = '#ffffff';
            eliminartipoempresaSeleccionada.src = 'https://img.icons8.com/material-outlined/24/ffffff/delete.png';
            editartipoempresaSeleccionada.src = 'https://img.icons8.com/material-outlined/24/ffffff/edit.png';


        }

        function moverModulos(modulosAMover, zonaDestino) {
            const zonaOrigen = document.getElementById('modulos');
            const zonaDestinoElement = document.getElementById(zonaDestino);
            if (!zonaDestinoElement) {
                console.error('Zona de destino no encontrada:', zonaDestino);
                return;
            }
            zonaOrigen.querySelectorAll('.modulosarrastrar').forEach(item => {
                const moduloId = item.id;
                if (modulosAMover.includes(moduloId)) {
                    zonaDestinoElement.appendChild(item);
                }
            });
        }

        function creartipoempresa() {
            let nombredeltipodeempresa = document.getElementById('nombredeltipodeempresa').value;
            if (nombredeltipodeempresa) {
                const contenedor = document.getElementById('listatipotipoempresa');
                const elementosExistentes = contenedor.getElementsByClassName('tipoempresasc');
                let ultimoId = 0;
                if (elementosExistentes.length > 0) {
                    // Obtener el último id de los elementos existentes
                    const ultimoElemento = elementosExistentes[elementosExistentes.length - 1];
                    ultimoId = parseInt(ultimoElemento.id.replace('tipoempresa', ''), 10);
                }
                const nuevoId = ultimoId + 1;
                agregarElementoLista(nuevoId, nombredeltipodeempresa);
                document.getElementById('modalnuevotipotipodeempresa').style.display = "none";
                showAlert("Nuevo tipo de empresa creado","success");
            } else {
                showAlert("El nombre del tipo de empresa no es valido","error");
            }
        }





        function agregarElementoLista(id, nombre) {
            // Seleccionar el contenedor principal
            const contenedor = document.getElementById('listatipotipoempresa');

            // Crear el nuevo div principal
            const nuevoDiv = document.createElement('div');
            nuevoDiv.id = `tipoempresa${id}`;
            nuevoDiv.className = 'tipoempresasc';
            nuevoDiv.style.cssText = `
                width: 100%;
                aspect-ratio: 25 / 1;
                margin-bottom: 0.6%;
                background-color: #F2F3F6;
                border-radius: 0.5vw;
                display: flex;
                flex-direction: row;
                align-items: center;
                cursor: pointer;
            `;
            nuevoDiv.setAttribute('onclick', `seleccionartipoempresa(${id})`);

            // Crear el párrafo del nombre
            const nombreP = document.createElement('p');
            nombreP.id = `nombretipoempresa${id}`;
            nombreP.className = 'nombretipoempresa';
            nombreP.style.cssText = `
                margin-left: 2%;
                width: 87%;
                font-size: 0.9vw;
            `;
            nombreP.textContent = nombre;

            // Crear el contenedor de los iconos
            const iconosDiv = document.createElement('div');
            iconosDiv.style.cssText = `
                width: 10%;
                height: 100%;
                display: flex;
                flex-direction: row;
                justify-content: flex-end;
                align-items: center;
            `;

            // Crear el icono de eliminar
            const eliminarImg = document.createElement('img');
            eliminarImg.id = `eliminartipoempresa${id}`;
            eliminarImg.className = 'eliminartipoempresa';
            eliminarImg.src = 'https://img.icons8.com/material-outlined/24/47A1A8/delete.png';
            eliminarImg.alt = 'Delete Icon';
            eliminarImg.style.cssText = `
                height: 80%;
                margin-right: 8%;
                cursor: pointer;
            `;
            eliminarImg.setAttribute('onclick', `eliminartipotipoempresa(${id})`);

            // Crear el icono de editar
            const editarImg = document.createElement('img');
            editarImg.id = `editartipoempresa${id}`;
            editarImg.className = 'editartipoempresa';
            editarImg.src = 'https://img.icons8.com/material-outlined/24/47A1A8/edit.png';
            editarImg.alt = 'Edit Icon';
            editarImg.style.cssText = `
                height: 80%;
                margin-right: 8%;
                cursor: pointer;
            `;
            editarImg.setAttribute('onclick', `editartipotipoempresa(${id})`);

            // Añadir los elementos al DOM
            iconosDiv.appendChild(eliminarImg);
            iconosDiv.appendChild(editarImg);
            nuevoDiv.appendChild(nombreP);
            nuevoDiv.appendChild(iconosDiv);
            contenedor.appendChild(nuevoDiv);
        }





        

        
        

    </script>
</body>
</html>
