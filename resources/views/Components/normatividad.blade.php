<?php
$msdemmodulo = [
    [
        'id' => 1,
        'nombre' => 'Modulo 1',
        'estado' => 0,
        'color' => '#47a1a8',
        'icono' => '1.svg',
        'documentos' => [
            [
                'nombre' => 'Documento 1',
                'descripcion' => 'Descripción del documento 1',
                'url' => 'https://ejemplo.com/documento1',
                'urlvideo' => 'https://ejemplo.com/video1',
                'tipo' => 'PDF'
            ],
            [
                'nombre' => 'Documento 2',
                'descripcion' => 'Descripción del documento 2',
                'url' => 'https://ejemplo.com/documento2',
                'urlvideo' => 'https://ejemplo.com/video2',
                'tipo' => 'Word'
            ],
        ],
    ],
    [
        'id' => 2,
        'nombre' => 'Modulo 2',
        'estado' => 1,
        'color' => '#7a8ffa',
        'icono' => '5.svg',
        'documentos' => [
            [
                'nombre' => 'Documento 3',
                'descripcion' => 'Descripción del documento 3',
                'url' => 'https://ejemplo.com/documento3',
                'urlvideo' => 'https://ejemplo.com/video3',
                'tipo' => 'Excel'
            ],
        ],
    ],
    [
        'id' => 3,
        'nombre' => 'Modulo 3',
        'estado' => 1,
        'color' => '#fd7377',
        'icono' => '8.svg',
        'documentos' => [
            [
                'nombre' => 'Documento 4',
                'descripcion' => 'Descripción del documento 4',
                'url' => 'https://ejemplo.com/documento4',
                'urlvideo' => 'https://ejemplo.com/video4',
                'tipo' => 'PowerPoint'
            ],
            [
                'nombre' => 'Documento 5',
                'descripcion' => 'Descripción del documento 5',
                'url' => 'https://ejemplo.com/documento5',
                'urlvideo' => 'https://ejemplo.com/video5',
                'tipo' => 'PDF'
            ],
        ],
    ],
];


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mmmodulo</title>
    <style>
        #slideDivmmmodulo { width: 500px; height: 100vh; background-color: #ffffff; position: fixed; top: 0; right: -600px; border-radius: 14px 0 0 14px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); transition: right 0.5s ease; } 
        #slideDivmmmodulo.active { right: 0; } @keyframes floating { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } } 
        @keyframes growWidth { from { width: 0; } to { width: 60%; } } #porcentajetotal div { animation: growWidth 3s ease forwards; }
        .switchmmmodulo input{opacity:0;width:0}.slideres{display:flex;align-items:center;position:absolute;cursor:pointer;top:10%;left:10%;right:0;bottom:0;background-color:#FD7377;transition:0.4s;border-radius:100vw}.slideres span{position:absolute;content:'';height:75%;aspect-ratio:1/1;border-radius:50%;left:8%;background-color:white;transition:0.4s}.slideres.on{background-color:#47A1A8}.slideres.off{background-color:#FD7377}.slideres.on span{transform:translateX(100%)}.slideres.off span{transform:translateX(0)}
        #slideDivmmmodulo { width: 500px; height: 100vh; background-color: #ffffff; position: fixed; top: 0; right: -600px; border-radius: 14px 0 0 14px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); transition: right 0.5s ease; } 
        #slideDivmmmodulo.active { right: 0; } @keyframes floating { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } } 

        .colores{aspect-ratio:1/1; border-radius:100%; cursor:pointer;}
        .acordeon-container {width: 100%; margin: 0 auto; margin:0; padding:0;}
        .acordeon {border-radius:10px; background-color: #F2F3F6; width: 100%; aspect-ratio:13/1; border: none;text-align: left;cursor: pointer;font-size: 18px;transition: 0.3s; margin-top:.8%;}
        .acordeon:hover {background-color: #ffffff;}
        .panel {margin-top:-5px; z-index:9999999; padding: 10px 18px; display: none; background-color: #ffffff;overflow: hidden;border-top: 1px solid #ccc; border-radius: 0 0 10px 10px;}

    </style>
</head> 
<body style="overflow:hidden;">
    
    <div style="width:100%; height:100%; box-sizing: border-box; padding-left:3%;">
        <h1 style="color:#47A1A8;">modulos y normatividad</h1>
        <p style="font-size:1vw;">En esta sección puedes gestionar cada uno de los moduloss, es decir las listas de la documentacion que debe cumplir cada usuario</p>
        
        <div style="width:96%; aspect-ratio:35/1; display:flex; flex-direction:row; justify-content: space-between;">
            <div style="width:50%; height:95%; position: relative;">
                <input id="buscarmoduloss" type="text" placeholder="Buscar" style="padding-left:40px; font-size:.9vw; width:calc(99% - 40px); height:100%; border:2px solid #47A1A8; border-radius:12px;" oninput="filtrarmmoduloss()">
                <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-30%); color: #ccc;">
                    <img src="https://img.icons8.com/material-outlined/24/cccccc/search.png" alt="Search Icon">
                </span>
            </div>
            <select id="filtrarporestadomoduloss" style="padding-left:1%; font-size:.9vw; width:22%; height:115%; background-color:#ffffff; border: 2px solid #47A1A8; border-radius:12px;" onchange="filtrarmmoduloss()">
                <option value="Todos">Todos</option>
                <option value="Activos">Activos</option>
                <option value="Inactivos">Inactivos</option>
            </select>

            <div onclick="editarmmmodulo()" style="cursor:pointer; width:13%; height:100%; background-color:#ffffff; border-radius:10px; display:flex; align-items:center; justify-content:center; border: 2px solid #47A1A8;">
                <p style="color:#47A1A8; font-size:.9vw;">+ Nuevo Modulo</p>
            </div>
            <div onclick="guardartodo()" style="cursor:pointer; width:13%; height:100%; background-color:#47A1A8; border-radius:10px; display:flex; align-items:center; justify-content:center; border: 2px solid #47A1A8;">
                <p style="color:#ffffff; font-size:.9vw;">Guardar todo</p>
            </div>
        </div>

        <div style="width:96%;height:calc(73% + 10px); display:flex; flex-direction:rpw;">

        
            <div id="listammmodulo" style="width:50%; height:100%; margin-top:20px; overflow-y: auto; padding:1%; box-sizing:border-box;">
                
                <?php foreach ($msdemmodulo as $msdemmoduloss): ?>
                    <div id="mmodulo<?php echo $msdemmoduloss['id']; ?>" class="mmodulossc" data-estado="<?php echo $msdemmoduloss['estado']; ?>" 
                        style="width:100%; aspect-ratio:25/1; margin-bottom:.6%; background-color:#F2F3F6; border-radius:.5vw; display:flex; flex-direction:row; align-items:center; cursor:pointer;" onclick="seleccionarmmodulo(<?php echo $msdemmoduloss['id']; ?>)">
                        <div style="height:150%; border-radius:5px; aspect-ratio:1/1; background-color:<?php echo $msdemmoduloss['color']; ?>; margin-left:1%;">
                            <img style="height:100%;" src="img/<?php echo $msdemmoduloss['icono']; ?>" alt="icono">
                        </div>
                        <p id="nombremmodulo<?php echo $msdemmoduloss['id']; ?>" class="nombremmodulo" style="margin-left:2%; width:80%; font-size:.9vw;"><?php echo $msdemmoduloss['nombre']; ?></p>
                        <div style="width:10%; height:100%; display:flex; flex-direction:row; justify-content: flex-end; align-items:center;">
                            <img id="eliminarmmodulo<?php echo $msdemmoduloss['id']; ?>" class="eliminarmmodulo" onclick="eliminarmmmodulo(<?php echo $msdemmoduloss['id']; ?>)" style=" height:80%; margin-right:8%; cursor:pointer;" src="https://img.icons8.com/material-outlined/24/47A1A8/delete.png" alt="Delete Icon">
                            <img id="editarmmodulo<?php echo $msdemmoduloss['id']; ?>" class="editarmmodulo" onclick="editarmmmodulo(<?php echo $msdemmoduloss['id']; ?>)" style="height:80%; margin-right:8%; cursor:pointer;" src="https://img.icons8.com/material-outlined/24/47A1A8/edit.png" alt="Edit Icon">
                        </div>
                        
                    </div>
                <?php endforeach; ?>
                
            </div>
            <div id="listammmodulo" style="border-radius:10px; background-color:#47A1A8; width:50%; height:100%; margin-top:15px; overflow-y: auto; padding:1%; box-sizing:border-box;">
             
                <div>
                    <div class="acordeon" style="background-color:transparent; justify-content: flex-end; display:flex; flex-direction:row; padding-left:3%; box-sizing:border-box; align-items:center;">    
                        <div onclick="nuevodocumento()" style=" cursor:pointer; width:30%; height:70%; margin-right:1%; background-color:#ffffff; border-radius:10px; display:flex; align-items:center; justify-content:center; border: 2px solid #ffffff;">
                            <p style="color:#47A1A8; font-size:.9vw;">+ Nuevo documento</p>
                        </div>
                    </div>
                    
                </div>
        

            <div class="acordeon-container">

                <!--<div id="listadedocumentos" style="width:100%; height:100%; display:none; flex-direction:column;">                    
                    <div class="acordeon-item" draggable="true">
                        <div class="acordeon" style="display:flex; flex-direction:row; padding-left:3%; box-sizing:border-box; align-items:center; justify-content: space-between;">
                            <p class="abriracordion" style="width:70%;">Titulo del documento numero uno</p>
                            <img src="https://img.icons8.com/material-outlined/24/47A1A8/delete.png" alt="eliminar" style="height:50%; margin-right:3%;">
                        </div>
                        <div class="panel">
                            <div style="margin-bottom: 16px; position: relative;">
                                <div style="display:flex; flex-direction:row;">
                                    <input id="ulrdelfile" type="text" name="mmodulo" value="" placeholder="URL de documento ejemplo" style="width: 70%; padding: 6px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                                    <label for="fileInput" id="botonfile" style="cursor:pointer; width:30%; height:32px; margin-left:1%; background-color:#47A1A8; border-radius:10px; display:flex; align-items:center; justify-content:center; border: 2px solid #47A1A8;">
                                        <p style="color:#ffffff; font-size:.9vw; margin: 0;">Subir ejemplo</p>
                                    </label>
                                    <input type="file" id="fileInput" style="display: none;" onchange="document.getElementById('ulrdelfile').value = this.files[0]?.name || '';">
                                </div>
                                <select name="" id="" class="" placeholder="Enlace a formulario" style="width:100%; height:35px; margin-top:10px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                                    <option value="" selected disabled>Seleccione un formulario si es necesario</option>
                                    <option value="formulario1">Formulario 1</option>
                                </select>
                                <input id="" type="text" name="" value="" placeholder="URL de video explicativo" style="margin-top:10px; width: 98%; padding: 6px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                                <div style="margin-bottom: 10px; position: relative;">
                                    <textarea id="" name="" placeholder="Descripcion de la mmodulo" rows="3" style="width: 98%; aspect-ratio:1/.2; margin-top:10px; padding: 6px 6px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 16px; background-color: #FAFBFE; color: #333; resize: none;"></textarea>
                                </div>
                            </div>
                            <div onclick="guardartodo()" style="cursor:pointer; width:30%; height:30px; margin-right:1%; background-color:#47A1A8; border-radius:10px; display:flex; align-items:center; justify-content:center; border: 2px solid #47A1A8;">
                                <p style="color:#ffffff; font-size:.9vw;">Guardar documento</p>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>

                

            </div>



            
            

        </div>
    </div>

    <div id="modalnuevommmodulo" style="display:none; position:relative; width:150vw; height:150vh; background-color:rgba(50, 50, 50, 0.8); position:fixed; padding:0; margin:0; z-index: 99999; margin-left:-18.4%; align-items:center; justify-content:center;">
        <div style="position:relative; Width:50vw;height:50vh;;background-color:#ffffff; margin:0;padding:0;border-radius:12px; display:flex; flex-direction:column; align-items:center; justify-content:center;">
            <img src="img/logo.svg" alt="logo" style="width:30%;">
            <p style="width:70%;text-align:center; font-size:.9vw;">No es posible agregar a un nuevo usuario de forma directa, ya que es necesario que realice su registro. Sin embargo, puedes utilizar este formulario para enviar una invitación por correo electrónico, permitiendo que la persona se una a la comunidad.</p>
            <input id="nombreinvitacion" type="text" autocomplete="off" name="name"placeholder="Nombre" style=" text-align:center;width:50%;height:30px;border-radius:12px;border:2px solid #47A1A8;">
            <input id="emailinvitacion" type="email" autocomplete="off" placeholder="Email" style=" text-align:center;width:50%;height:30px;margin-top:10px;border-radius:12px;border:2px solid #47A1A8;">
            <div onclick="" style="background-color:#47A1A8; margin-top:10px; width:200px; height:35px; border-radius:9px; display:flex; align-items:center; justify-content:center; cursor:pointer;"><p style="color:#ffffff; width:100%;height:50%;text-align:center;padding:0;">Enviar invitación</p></div>
            <p onclick="ocultarmodalsumarusuario()" style="color:#47A1A8; cursor:pointer;">Cerrar</p>
        </div>
    </div>
    <div id="modaleliminarmmmodulo" style="display:none; position:relative; width:150vw; height:150vh; background-color:rgba(50, 50, 50, 0.8); position:fixed; padding:0; margin:0; z-index: 99999; margin-left:-18.4%; align-items:center; justify-content:center;">
        <div style="position:relative; Width:50vw;height:50vh;;background-color:#ffffff; margin:0;padding:0;border-radius:12px; display:flex; flex-direction:column; align-items:center; justify-content:center;">
            <img src="img/logo.svg" alt="logo" style="width:30%;">
            <p style="width:50%;text-align:center; font-size:.9vw;">Para eliminar de manera <b>permanente</b> este usuario por favor escriba <b>la palabra "eliminar"</b></p>
            <input id="palabraeliminarmodulo" type="nombre" placeholder="Escriba la palabra eliminar" style=" text-align:center;width:50%;height:30px;border-radius:12px;border:2px solid #47A1A8;">
            <div onclick="confirmareliminarmmmodulo()" style="background-color:#47A1A8; margin-top:10px; width:200px; height:35px; border-radius:9px; display:flex; align-items:center; justify-content:center; cursor:pointer;"><p style="color:#ffffff; width:100%;height:50%;text-align:center;padding:0;">Eliminar</p></div>
            <p onclick="cerrareliminarmmmodulo()" style="color:#47A1A8; cursor:pointer;">Cerrar</p>
        </div> 
    </div>
    <div id="modalnuevodocumento" style="display:none; position:relative; width:150vw; height:150vh; background-color:rgba(50, 50, 50, 0.8); position:fixed; padding:0; margin:0; z-index: 99999; margin-left:-18.4%; align-items:center; justify-content:center;">
        <div style="position:relative; Width:50vw;height:50vh;;background-color:#ffffff; margin:0;padding:0;border-radius:12px; display:flex; flex-direction:column; align-items:center; justify-content:center;">
            <img src="img/logo.svg" alt="logo" style="width:30%; margin-bottom:3%;">
            <input id="nombredelnuevodocumento" type="text" autocomplete="off" name="name"placeholder="Nombre del nuevo documento" style=" text-align:center;width:50%;height:30px;border-radius:12px;border:2px solid #47A1A8;">
            <div  onclick="crearnuevodocumento()" style="background-color:#47A1A8; margin-top:10px; width:200px; height:35px; border-radius:9px; display:flex; align-items:center; justify-content:center; cursor:pointer;"><p style="color:#ffffff; width:100%;height:50%;text-align:center;padding:0;">Crear documento</p></div>
            <p onclick="ocultarmodalsumardocumento()" style="color:#47A1A8; cursor:pointer;">Cerrar</p>
        </div>
    </div>
    <div id="modaleliminardocumento" style="display:none; position:relative; width:150vw; height:150vh; background-color:rgba(50, 50, 50, 0.8); position:fixed; padding:0; margin:0; z-index: 99999; margin-left:-18.4%; align-items:center; justify-content:center;">
        <div style="position:relative; Width:50vw;height:50vh;;background-color:#ffffff; margin:0;padding:0;border-radius:12px; display:flex; flex-direction:column; align-items:center; justify-content:center;">
            <img src="img/logo.svg" alt="logo" style="width:30%;">
            <p style="width:50%;text-align:center; font-size:.9vw;">Para eliminar de manera <b>permanente</b> este usuario por favor escriba <b>la palabra "eliminar"</b></p>
            <input id="palabraeliminardocumento" type="nombre" placeholder="Escriba la palabra eliminar" style=" text-align:center;width:50%;height:30px;border-radius:12px;border:2px solid #47A1A8;">
            <div onclick="confirmareliminardocumento()" style="background-color:#47A1A8; margin-top:10px; width:200px; height:35px; border-radius:9px; display:flex; align-items:center; justify-content:center; cursor:pointer;"><p style="color:#ffffff; width:100%;height:50%;text-align:center;padding:0;">Eliminar</p></div>
            <p onclick="cerrarmodaleliminardocumento()" style="color:#47A1A8; cursor:pointer;">Cerrar</p>
        </div> 
    </div>

    <!--slide-->
    <div id="slideDivmmmodulo" style="padding:2%; box-sizing: border-box;">

            <div style="height:100%; overflow-y: auto; overflow-x: hidden; padding:3%; padding-top:0; padding-bottom:0;">
                <p style="margin:0; padding:0; color:#47A1A8; font-size:1.3vw; font-weight:700;">Crea un nuevo Modulo</p>
                <p style="font-size:.7vw;  padding:0;">A continuación se muestra la información del usuario seleccionado. Por favor, no realices modificaciones a menos que sea estrictamente necesario.</p>

                <div style="height:15%; width:100%; display:flex; justify-content:center; align-items:center;">
                   
                    <img onclick="moveSlide('left')" src="img/izquierda.svg" alt="antes" style="height:25%; cursor:pointer; padding:10%;">
                    <div id="fondoicono" style="display:flex; justify-content:center; align-items:center; height:100%; aspect-ratio:1/1; background-color:#47a1a8; border-radius: 10px;">
                        <img id="iconoseleccionado" src="img/12.svg" alt="icono" style="width:90%;">
                    </div>
                    <img onclick="moveSlide('right')" src="img/derecha.svg" alt="antes" style="height:25%;cursor:pointer; padding:10%;">
                    
                </div>

                <div style="width:60%; margin-left:20%; margin-top:20px; margin-bottom:20px; display: grid; grid-template-columns: repeat(5, 1fr); grid-template-rows: repeat(2, auto); gap: 10px; ">
                    <div onclick="seleccionarcolor('#f9af40')" class="colores" style="background-color: #f9af40;"></div>
                    <div onclick="seleccionarcolor('#ff5055')" class="colores" style="background-color: #ff5055;"></div>
                    <div onclick="seleccionarcolor('#7bd2cd')" class="colores" style="background-color: #7bd2cd;"></div>
                    <div onclick="seleccionarcolor('#1c203e')" class="colores" style="background-color: #1c203e;"></div>
                    <div onclick="seleccionarcolor('#47a1a8')" class="colores" style="background-color: #47a1a8;"></div>
                    <div onclick="seleccionarcolor('#5fd079')" class="colores" style="background-color: #5fd079;"></div>
                    <div onclick="seleccionarcolor('#154854')" class="colores" style="background-color: #154854;"></div>
                    <div onclick="seleccionarcolor('#7b6cc9')" class="colores" style="background-color: #7b6cc9;"></div>
                    <div onclick="seleccionarcolor('#868686')" class="colores" style="background-color: #868686;"></div>
                    <div onclick="seleccionarcolor('#fd7377')" class="colores" style="background-color: #fd7377;"></div>
                    
                </div>

                <div style="margin-bottom: 16px; position: relative;">
                    <input id="nombredelnuevomodulo" type="text" name="mmodulo" value="" placeholder="Nombre del modulo" style="width: calc(99% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                    <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                        <img src="https://img.icons8.com/material-outlined/24/cccccc/building.png" alt="Company Icon">
                    </span>
                </div>

                <div style="margin-bottom: 10px; position: relative;">
                    <textarea id="descripciondelnuevomodulo" name="descripciondelnuevomodulo" placeholder="Descripcion de la mmodulo" rows="3" style="width: 98%; aspect-ratio:1/.5; padding: 6px 6px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 16px; background-color: #FAFBFE; color: #333; resize: none;"></textarea>
                </div>

                <div style="width:100%; display:flex; flex-direction:row; justify-content:space-between;">
                    <div style="margin-bottom: 16px; position: relative; width:50%;"> 
                        <button onclick="cerrarmmmodulomodificado()" style="cursor:pointer; background-color:#ffffff; color:#47A1A8; border-radius:10px; border: 2px solid #47A1A8; width:100%;height:35px;font-weight:600;">Cerrar</button>
                    </div>
                    <div style="margin-bottom: 16px; position: relative; width:50%; margin-left:2%;">
                        <button onclick="guradrmmmodulomodificado()" style="cursor:pointer; background-color:#47A1A8; color:#ffffff; border-radius:10px; border:none; width:100%;height:35px;font-weight:600;">Guardar</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="slideDivmmmodulo" style="padding:2%; box-sizing: border-box;">
            <p style="margin:0; padding:0; color:#47A1A8; font-size:1.3vw; font-weight:700;">Informacion del colaborador</p>
            <p style="font-size:.7vw;  padding:0;">Este es un email transaccional, por tanto, debe ser de caracter informativo. No se espera que el usuario responda y no existe un historial.</p>
            <div style="margin-bottom: 16px; position: relative;">
                <input id="asuntoemailcolaborador" type="text" name="mmoduloc" placeholder="Asunto" style="width: calc(99% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
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
        
        var modulos = <?php echo json_encode($msdemmodulo); ?>;
        var usuarioaeliminar = "";

        function filtrarmmoduloss() {
            const inputbuscarempresa = document.getElementById('buscarmoduloss').value.toLowerCase(); 
            const estadoFiltrosc = document.getElementById('filtrarporestadomoduloss').value; 
            const mmodulosscs = document.querySelectorAll('.mmodulossc'); 

            mmodulosscs.forEach(mmodulo => {
                const nombremmodulo = mmodulo.querySelector('.nombremmodulo').textContent.toLowerCase(); // Cambiado a 'nombremmodulo'
                const estadommodulo = mmodulo.getAttribute('data-estado'); 
                const coincideEstado = (estadoFiltrosc === "Todos" || (estadoFiltrosc === "Activos" && parseInt(estadommodulo) === 1) || (estadoFiltrosc === "Inactivos" && parseInt(estadommodulo) === 0)); 
                const coincideNombre = nombremmodulo.includes(inputbuscarempresa);
                
                if (coincideNombre && coincideEstado) {
                    mmodulo.style.display = 'flex';
                } else {
                    mmodulo.style.display = 'none';
                }
            });
        }


        function mostrarmodalsumarusuario(){
            document.getElementById('modalnuevommmodulo').style.display = "flex";
        }
        function ocultarmodalsumarusuario(){
            document.getElementById('modalnuevommmodulo').style.display = "none";
        }
        function eliminarmmmodulo(id){
            usuarioaeliminar = id;
            document.getElementById('modaleliminarmmmodulo').style.display = "flex";
        }
        function confirmareliminarmmmodulo(){
            let palabraeliminarmodulo = document.getElementById('palabraeliminarmodulo').value;
            if(palabraeliminarmodulo === 'eliminar'){
                document.getElementById('modaleliminarmmmodulo').style.display = "none";
                const mmoduloDiv = document.getElementById('mmodulo' + usuarioaeliminar);
                if (mmoduloDiv) {
                    mmoduloDiv.style.display = 'none';
                }                   
            }else{
                alert('La palabra '+palabraeliminarmodulo+' no coincide');
            }
        }
        

        function editarmmmodulo(id) {
            const slideDivmmmodulo = document.getElementById('slideDivmmmodulo');
            if (slideDivmmmodulo.classList.contains('active')) {
                slideDivmmmodulo.classList.remove('active'); 
            } else {
                slideDivmmmodulo.classList.add('active');  
            }
        }

        
        function guradrmmmodulomodificado(){

            let nombredelnuevomodulo = document.getElementById('nombredelnuevomodulo').value;
            let divcolor = document.getElementById('fondoicono');
            let colorFondo = window.getComputedStyle(divcolor).backgroundColor;
            let imgElemento = document.getElementById('iconoseleccionado');
            let rutaImagen = imgElemento.src; 
            let nombreImagen = rutaImagen.substring(rutaImagen.lastIndexOf('/') + 1);
            let siguienteId = obtenerSiguienteId();
            let descripcion = document.getElementById('descripciondelnuevomodulo').value;

            if(nombredelnuevomodulo){

                if(descripcion){

                    mostrarnuevomodulo(siguienteId,nombredelnuevomodulo,colorFondo,nombreImagen);

                    showAlert("Se ha creado un nuevo modulo","success");
                    const slideDivmmmodulo = document.getElementById('slideDivmmmodulo');
                    slideDivmmmodulo.classList.remove('active');
                }else{
                    showAlert("La *descripcion* del modulo no es valida","error");
                }

            }else{
                showAlert("El *nombre* del modulo no es valido","error");
            }

            
        }

        function cerrarmmmodulomodificado(){
            const slideDivmmmodulo = document.getElementById('slideDivmmmodulo');
            slideDivmmmodulo.classList.remove('active'); 
            showAlert("NO se ha creado un nuevo modulo","alerta");
        }

         
        function cerrareliminarmmmodulo(){
            document.getElementById('modaleliminarmmmodulo').style.display = "none";
        }


        function toggleswitchmmmodulo(usuarioId) {
            var switchmmmoduloElement = document.getElementById("switchmmmodulo" + usuarioId);
            var estado = switchmmmoduloElement.checked ? 1 : 0;  
            var slider = switchmmmoduloElement.nextElementSibling;
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

        function toggleswitchmmmoduloclientes(userId) {
            var checkbox = document.getElementById('switchmmmodulo' + userId);
            var estado = checkbox.checked ? 1 : 0; 
            var slider = document.querySelector('#switchmmmodulo' + userId + ' + .slideres');
            var circle = slider.querySelector('span');
            if (estado === 1) {
                slider.style.backgroundColor = '#47A1A8';
                circle.style.transform = 'translateX(100%)';
            } else {
                slider.style.backgroundColor = '#FD7377'; 
                circle.style.transform = 'translateX(0px)';
            }
        }



        let moduloseleccionado = "";
        

        function seleccionarmmodulo(id) {

            mostrardocumentos(id);
            moduloseleccionado = id;

            const mmoduloss = document.querySelectorAll('.mmodulossc'); 
            const nombremmoduloss = document.querySelectorAll('.nombremmodulo');
            const eliminarmmodulo = document.querySelectorAll('.eliminarmmodulo');
            const editarmmodulo = document.querySelectorAll('.editarmmodulo');

            mmoduloss.forEach(emp => {
                emp.style.backgroundColor = '#F2F3F6';
            });

            nombremmoduloss.forEach(emp => {
                emp.style.color = '#868686';
            });

            eliminarmmodulo.forEach(emp => {
                emp.src = 'https://img.icons8.com/material-outlined/24/47A1A8/delete.png';
            });

            editarmmodulo.forEach(emp => {
                emp.src = 'https://img.icons8.com/material-outlined/24/47A1A8/edit.png';
            });

            const mmodulosseleccionada = document.getElementById('mmodulo' + id);
            let nombremmodulosseleccionada = document.getElementById('nombremmodulo' + id);
            let eliminarmmodulosseleccionada = document.getElementById('eliminarmmodulo' + id);
            let editarmmodulosseleccionada = document.getElementById('editarmmodulo' + id);
            mmodulosseleccionada.style.backgroundColor = 'RGBA(71, 161, 168, .8)';
            nombremmodulosseleccionada.style.color = '#ffffff';
            eliminarmmodulosseleccionada.src = 'https://img.icons8.com/material-outlined/24/ffffff/delete.png';
            editarmmodulosseleccionada.src = 'https://img.icons8.com/material-outlined/24/ffffff/edit.png';


        }

        function movermoduloss(modulossAMover, zonaDestino) {
            const zonaOrigen = document.getElementById('moduloss');
            const zonaDestinoElement = document.getElementById(zonaDestino);
            if (!zonaDestinoElement) {
                console.error('Zona de destino no encontrada:', zonaDestino);
                return;
            }
            zonaOrigen.querySelectorAll('.modulossarrastrar').forEach(item => {
                const moduloId = item.id;
                if (modulossAMover.includes(moduloId)) {
                    zonaDestinoElement.appendChild(item);
                }
            });
        }

        var acordeones = document.querySelectorAll('.abriracordion');  // Seleccionamos solo los elementos <p>

        acordeones.forEach(function(acordeon) {
            acordeon.addEventListener('click', function() {
                // Al hacer clic en el <p>, obtenemos el siguiente elemento hermano (el panel)
                var panel = acordeon.closest('.acordeon-item').querySelector('.panel');
                
                // Verifica si el panel está visible o no
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        });


        // Habilitar arrastrar y soltar
        const acordeonItems = document.querySelectorAll('.acordeon-item');
        acordeonItems.forEach(item => {
            item.addEventListener('dragstart', dragStart);
            item.addEventListener('dragover', dragOver);
            item.addEventListener('drop', drop);
            item.addEventListener('dragleave', dragLeave);
        });

        let draggedItem = null;

        function dragStart(e) {
            draggedItem = this;
            setTimeout(() => {
            this.style.visibility = "hidden"; 
            }, 0);
        }

        function dragOver(e) {
            e.preventDefault();
        }

        function drop(e) {
            e.preventDefault();
            if (draggedItem !== this) {
            this.parentNode.insertBefore(draggedItem, this.nextSibling);
            }
            draggedItem.style.visibility = "visible"; 
            draggedItem = null;
        }

        function dragLeave() {
            if (draggedItem) {
            draggedItem.style.visibility = "visible";
            }
        }

        const images = ["img/1.svg", "img/2.svg","img/3.svg","img/4.svg","img/5.svg","img/6.svg","img/7.svg","img/8.svg","img/9.svg","img/10.svg","img/11.svg","img/12.svg","img/13.svg","img/14.svg","img/15.svg","img/16.svg","img/17.svg","img/18.svg","img/19.svg",];
        let currentIndex = 0; 
        function moveSlide(direction) {
            if (direction === 'left') {
                currentIndex = (currentIndex - 1 + images.length) % images.length; 
            } else if (direction === 'right') {
                currentIndex = (currentIndex + 1) % images.length; 
            }
            document.getElementById("iconoseleccionado").src = images[currentIndex];
        }

        function seleccionarcolor(color) {
            document.getElementById('fondoicono').style.backgroundColor = color;
        }

        function guardartodo(){
            showAlert("Se han guardado los cambios","success");
        }



        /////////////////////////////
        

        function mostrarnuevomodulo(id, nombre, color, icono) {
            const listaModulo = document.getElementById('listammmodulo');
            const nuevoModulo = document.createElement('div');
            nuevoModulo.id = `mmodulo${id}`;
            nuevoModulo.className = 'mmodulossc';
            nuevoModulo.style.cssText = `
                width: 100%; 
                aspect-ratio: 25/1; 
                margin-bottom: .6%; 
                background-color: #F2F3F6; 
                border-radius: .5vw; 
                display: flex; 
                flex-direction: row; 
                align-items: center; 
                cursor: pointer;
            `;
            nuevoModulo.onclick = () => seleccionarmmodulo(id);

            // Crear el sub-div para el icono
            const iconDiv = document.createElement('div');
            iconDiv.style.cssText = `
                height: 150%; 
                border-radius: 5px; 
                aspect-ratio: 1/1; 
                background-color: ${color}; 
                margin-left: 1%;
            `;

            // Crear la imagen del icono
            const iconImg = document.createElement('img');
            iconImg.src = `img/${icono}`;
            iconImg.alt = 'icono';
            iconImg.style.height = '100%';
            iconDiv.appendChild(iconImg);

            // Crear el párrafo del nombre
            const nombreParrafo = document.createElement('p');
            nombreParrafo.id = `nombremmodulo${id}`;
            nombreParrafo.className = 'nombremmodulo';
            nombreParrafo.style.cssText = `
                margin-left: 2%; 
                width: 80%; 
                font-size: .9vw;
            `;
            nombreParrafo.textContent = nombre;

            // Crear el contenedor de los botones
            const botonesDiv = document.createElement('div');
            botonesDiv.style.cssText = `
                width: 10%; 
                height: 100%; 
                display: flex; 
                flex-direction: row; 
                justify-content: flex-end; 
                align-items: center;
            `;

            // Crear el botón de eliminar
            const eliminarImg = document.createElement('img');
            eliminarImg.id = `eliminarmmodulo${id}`;
            eliminarImg.className = 'eliminarmmodulo';
            eliminarImg.src = 'https://img.icons8.com/material-outlined/24/47A1A8/delete.png';
            eliminarImg.alt = 'Delete Icon';
            eliminarImg.style.cssText = `
                height: 80%; 
                margin-right: 8%; 
                cursor: pointer;
            `;
            eliminarImg.onclick = () => eliminarmmmodulo(id);

            // Crear el botón de editar
            const editarImg = document.createElement('img');
            editarImg.id = `editarmmodulo${id}`;
            editarImg.className = 'editarmmodulo';
            editarImg.src = 'https://img.icons8.com/material-outlined/24/47A1A8/edit.png';
            editarImg.alt = 'Edit Icon';
            editarImg.style.cssText = `
                height: 80%; 
                margin-right: 8%; 
                cursor: pointer;
            `;
            editarImg.onclick = () => editarmmmodulo(id);

            // Añadir los botones al contenedor
            botonesDiv.appendChild(eliminarImg);
            botonesDiv.appendChild(editarImg);

            // Crear el contenedor del interruptor
            const switchLabel = document.createElement('label');
            switchLabel.className = 'switchmmmodulo';
            switchLabel.style.cssText = `
                margin-right: 2%; 
                position: relative; 
                display: inline-block; 
                height: 100%; 
                aspect-ratio: 1.8/1;
            `;

            // Crear el checkbox del interruptor
            const switchInput = document.createElement('input');
            switchInput.type = 'checkbox';
            switchInput.id = `switchmmmodulo${id}`;
            switchInput.checked = true;
            switchInput.style.opacity = '0';
            switchInput.style.width = '0';
            switchInput.onchange = () => toggleswitchmmmoduloclientes(id);

            // Crear el span del interruptor
            const switchSpan = document.createElement('span');
            switchSpan.className = 'slideres on';
            switchSpan.style.cssText = `
                display: flex; 
                align-items: center; 
                position: absolute; 
                cursor: pointer; 
                top: 10%; 
                left: 10%; 
                right: 0; 
                bottom: 0; 
                transition: 0.4s; 
                border-radius: 100vw;
            `;

            // Crear el círculo interior del interruptor
            const switchCircle = document.createElement('span');
            switchCircle.style.cssText = `
                position: absolute; 
                content: ''; 
                height: 75%; 
                aspect-ratio: 1/1; 
                border-radius: 50%; 
                left: 8%; 
                background-color: white; 
                transition: 0.4s;
            `;

            // Añadir los elementos del interruptor
            switchSpan.appendChild(switchCircle);
            switchLabel.appendChild(switchInput);
            switchLabel.appendChild(switchSpan);

            // Añadir todos los elementos al nuevo módulo
            nuevoModulo.appendChild(iconDiv);
            nuevoModulo.appendChild(nombreParrafo);
            nuevoModulo.appendChild(botonesDiv);
            //nuevoModulo.appendChild(switchLabel);

            // Añadir el nuevo módulo al contenedor
            listaModulo.appendChild(nuevoModulo);
        }

        function obtenerSiguienteId() {
            const divs = document.querySelectorAll('#listammmodulo .mmodulossc');
            let maxId = 0;
            divs.forEach(div => {
                const match = div.id.match(/^mmodulo(\d+)$/);
                if (match) {
                    maxId = Math.max(maxId, parseInt(match[1], 10));
                }
            });
            return maxId + 1;
        }


        /////////////////////////////

        function mostrardocumentos(idmodulo) {
            let documento = getModuloDocuments(idmodulo);
            const acordeonContainer = document.querySelector('.acordeon-container');
            acordeonContainer.replaceChildren();
            if (Array.isArray(documento) && documento.length > 0) {
                documento.forEach(doc => {
                    agregarDocumento(doc.nombre, doc.url, 'formularioSeleccionado', doc.urlvideo, doc.descripcion);
                });
            } else {
                alert('No se encontraron documentos para este módulo.');
            }
        }


        function getModuloDocuments(moduloId) {
        var msdemmodulo = <?php echo json_encode($msdemmodulo); ?>;
        var modulo = msdemmodulo.find(function(modulo) {
            return modulo.id === moduloId;
        });
        if (modulo) {
            return modulo.documentos;
        } else {
            return [];
        }
        }


        let contadorId = 0;
        let documento = 0;
        function agregarDocumento(titulo, urlDocumento, urlVideo, descripcion) {
            contadorId++;

            // Obtener el contenedor donde se agregarán los nuevos documentos
            const acordeonContainer = document.querySelector('.acordeon-container');

            // Crear la estructura del nuevo documento
            const listadedocumentos = document.createElement('div');
            listadedocumentos.style.width = '100%';
            listadedocumentos.style.display = 'flex';
            listadedocumentos.style.flexDirection = 'column';
            listadedocumentos.id = 'documento'+contadorId;

            const acordeonItem = document.createElement('div');
            acordeonItem.classList.add('acordeon-item');
            acordeonItem.setAttribute('draggable', 'true');
            acordeonItem.id = `acordeon-item-${contadorId}`; // Asignar un ID único al acordeón

            const acordeon = document.createElement('div');
            acordeon.classList.add('acordeon');
            acordeon.style.display = 'flex';
            acordeon.style.flexDirection = 'row';
            acordeon.style.paddingLeft = '3%';
            acordeon.style.boxSizing = 'border-box';
            acordeon.style.alignItems = 'center';
            acordeon.style.justifyContent = 'space-between';
            acordeon.style.cursor = 'pointer'; // Para permitir que sea clickeable y abra/cierre el panel

            const pTitulo = document.createElement('p');
            pTitulo.classList.add('abriracordion');
            pTitulo.style.width = '70%';
            pTitulo.textContent = titulo;

            const imgEliminar = document.createElement('img');
            imgEliminar.id = `eliminar-${contadorId}`;
            imgEliminar.src = 'https://img.icons8.com/material-outlined/24/47A1A8/delete.png';
            imgEliminar.alt = 'eliminar';
            imgEliminar.style.height = '50%';
            imgEliminar.style.marginRight = '3%';

            imgEliminar.addEventListener('click', function() {
                event.stopPropagation();
                const numero = imgEliminar.id.match(/\d+$/)[0];
                documento = numero;
                document.getElementById('modaleliminardocumento').style.display = "flex";
            });

            acordeon.appendChild(pTitulo);
            acordeon.appendChild(imgEliminar);

            // Crear el panel del acordeón (el contenido que se mostrará/ocultará)
            const panel = document.createElement('div');
            panel.classList.add('panel'); // Asegurarnos de tener un estilo para los paneles en el acordeón
            panel.style.display = 'none'; // Inicialmente oculto
            panel.style.marginTop = '-10px'; // Separar del título

            // Contenedor de los inputs y el formulario
            const contenedorFormulario = document.createElement('div');
            //contenedorFormulario.style.marginBottom = '16px';

            // Input para URL del documento
            const contenedorInputDocumento = document.createElement('div');
            //contenedorInputDocumento.style.marginBottom = '16px';
            contenedorInputDocumento.style.display = 'flex';
            contenedorInputDocumento.style.justifyContent = 'space-between';
            contenedorInputDocumento.style.alignItems = 'center';

            const inputDocumento = document.createElement('input');
            inputDocumento.id = `ulrdelfile-${contadorId}`; // ID único para el input
            inputDocumento.type = 'text';
            inputDocumento.name = 'mmodulo';
            inputDocumento.value = urlDocumento || '';
            inputDocumento.placeholder = 'URL de documento ejemplo';
            inputDocumento.style.width = '67%';
            inputDocumento.style.padding = '8px';
            inputDocumento.style.border = '2px solid #F6F8FB';
            inputDocumento.style.borderRadius = '8px';
            inputDocumento.style.fontSize = '14px';
            inputDocumento.style.backgroundColor = '#FAFBFE';
            inputDocumento.style.color = '#333';

            // Botón para subir un archivo
            const labelSubir = document.createElement('label');
            labelSubir.setAttribute('for', `fileInput-${contadorId}`); // ID único para el input de archivo
            labelSubir.style.cursor = 'pointer';
            labelSubir.style.width = '28%';
            labelSubir.style.height = '36px';
            labelSubir.style.backgroundColor = '#47A1A8';
            labelSubir.style.borderRadius = '10px';
            labelSubir.style.display = 'flex';
            labelSubir.style.alignItems = 'center';
            labelSubir.style.justifyContent = 'center';
            labelSubir.style.border = '2px solid #47A1A8';

            const pSubir = document.createElement('p');
            pSubir.style.color = '#ffffff';
            pSubir.style.fontSize = '14px';
            pSubir.style.margin = '0';
            pSubir.textContent = 'Subir ejemplo';
            labelSubir.appendChild(pSubir);

            const inputFile = document.createElement('input');
            inputFile.type = 'file';
            inputFile.id = `fileInput-${contadorId}`;
            inputFile.style.display = 'none';
            inputFile.addEventListener('change', function() {
                inputDocumento.value = this.files[0]?.name || '';
            });

            contenedorInputDocumento.appendChild(inputDocumento);
            contenedorInputDocumento.appendChild(labelSubir);
            contenedorInputDocumento.appendChild(inputFile);

            // Agregar el input para URL del documento al formulario
            contenedorFormulario.appendChild(contenedorInputDocumento);

            // Select de formulario
            const selectFormulario = document.createElement('select');
            selectFormulario.name = '';
            selectFormulario.id = `selectFormulario-${contadorId}`; // ID único para el select
            selectFormulario.style.width = '100%';
            selectFormulario.style.height = '36px';
            selectFormulario.style.marginTop = '10px';
            selectFormulario.style.border = '2px solid #F6F8FB';
            selectFormulario.style.borderRadius = '8px';
            selectFormulario.style.fontSize = '14px';
            selectFormulario.style.backgroundColor = '#FAFBFE';
            selectFormulario.style.color = '#333';

            const optionDefault = document.createElement('option');
            optionDefault.value = '';
            optionDefault.selected = true;
            optionDefault.disabled = true;
            optionDefault.textContent = 'Seleccione un formulario si es necesario';

            const optionFormulario = document.createElement('option');
            optionFormulario.value = 'formulario1';
            optionFormulario.textContent = 'Formulario 1';

            selectFormulario.appendChild(optionDefault);
            selectFormulario.appendChild(optionFormulario);

            // Agregar el select al formulario
            //contenedorFormulario.appendChild(selectFormulario);

            // Input para URL de video explicativo
            const inputVideo = document.createElement('input');
            inputVideo.type = 'text';
            inputVideo.value = urlVideo || '';
            inputVideo.placeholder = 'URL de video explicativo';
            inputVideo.style.marginTop = '10px';
            inputVideo.style.width = '98%';
            inputVideo.style.padding = '8px';
            inputVideo.style.border = '2px solid #F6F8FB';
            inputVideo.style.borderRadius = '8px';
            inputVideo.style.fontSize = '14px';
            inputVideo.style.backgroundColor = '#FAFBFE';
            inputVideo.style.color = '#333';

            // Agregar el input de video al formulario
            contenedorFormulario.appendChild(inputVideo);

            // Textarea para descripción del módulo
            const textareaDescripcion = document.createElement('textarea');
            textareaDescripcion.placeholder = 'Descripción del módulo';
            textareaDescripcion.rows = 3;
            textareaDescripcion.style.width = '98%';
            textareaDescripcion.style.marginTop = '10px';
            textareaDescripcion.style.padding = '8px';
            textareaDescripcion.style.border = '2px solid #F6F8FB';
            textareaDescripcion.style.borderRadius = '8px';
            textareaDescripcion.style.fontSize = '14px';
            textareaDescripcion.style.backgroundColor = '#FAFBFE';
            textareaDescripcion.style.color = '#333';
            textareaDescripcion.style.resize = 'none';
            textareaDescripcion.value = descripcion || '';

            // Agregar el textarea al formulario
            contenedorFormulario.appendChild(textareaDescripcion);

            // Botón para guardar
            const botonGuardar = document.createElement('div');
            botonGuardar.style.cursor = 'pointer';
            botonGuardar.style.width = '30%';
            botonGuardar.style.height = '36px';
            botonGuardar.style.marginTop = '10px';
            botonGuardar.style.backgroundColor = '#47A1A8';
            botonGuardar.style.borderRadius = '10px';
            botonGuardar.style.display = 'flex';
            botonGuardar.style.alignItems = 'center';
            botonGuardar.style.justifyContent = 'center';
            botonGuardar.style.border = '2px solid #47A1A8';
            botonGuardar.addEventListener('click', function() {
                // Aquí puedes agregar la lógica para guardar el documento
                console.log('Guardar documento');
                showAlert("Documento guardado","success");
            });

            const pGuardar = document.createElement('p');
            pGuardar.style.color = '#ffffff';
            pGuardar.style.fontSize = '14px';
            pGuardar.textContent = 'Guardar documento';

            botonGuardar.appendChild(pGuardar);

            // Agregar el botón de guardar al formulario
            contenedorFormulario.appendChild(botonGuardar);

            // Agregar el contenedor del formulario al panel
            panel.appendChild(contenedorFormulario);

            // Agregar acordeon y panel al item
            acordeonItem.appendChild(acordeon);
            acordeonItem.appendChild(panel);

            // Agregar item al acordeón
            listadedocumentos.appendChild(acordeonItem);

            // Agregar documento a contenedor de acordeón
            acordeonContainer.appendChild(listadedocumentos);

            // Añadir funcionalidad de abrir/cerrar el acordeón
            acordeon.addEventListener('click', function() {
                panel.style.display = panel.style.display === 'none' ? 'block' : 'none';
            });
        }

        function eliminardocuemnto(id) {
            
            const elemento = document.getElementById('documento'+ id);
            if (elemento) {
                elemento.remove(); // Elimina el elemento del DOM
                console.log(`Elemento con ID ${id} eliminado.`);
            } else {
                console.warn(`Elemento con ID ${id} no encontrado.`);
            }
        }



        function nuevodocumento(){
            if(moduloseleccionado){
                document.getElementById('modalnuevodocumento').style.display = "flex"
            }else{
                showAlert("No hay un modulo seleccionado","alerta");
            }
        }

        function ocultarmodalsumardocumento(){
            document.getElementById('modalnuevodocumento').style.display = "none"
        }

        function crearnuevodocumento(){
            let nombre = document.getElementById('nombredelnuevodocumento').value;
            agregarDocumento(nombre, '', '', '','');
            ocultarmodalsumardocumento();
        }

        function confirmareliminardocumento(){
            let palabraeliminardocumento = document.getElementById('palabraeliminardocumento').value;
            if(palabraeliminardocumento === 'eliminar'){
                eliminardocuemnto(documento);
                document.getElementById('modaleliminardocumento').style.display = "none";
                showAlert("El documento fue eliminado","success");
            }else{
                showAlert("La palabra *error* no coincide","error");
            }
        }

        function cerrarmodaleliminardocumento(){
            document.getElementById('modaleliminardocumento').style.display = "none";
        }


    </script>
</body>
</html>
