<?php
$pagos = [
    ['id' => 1, 'nombre' => 'Nombre de la empresapagos numero uno', 'estado' => 0, 'fechapago'=> '25-11-2024', 'fechavence' => '25-11-2024'],
    ['id' => 2, 'nombre' => 'Nombre de la empresapagos numero dos', 'estado' => 1, 'fechapago'=> '30-12-2025', 'fechavence' => '25-11-2024'],
    ['id' => 3, 'nombre' => 'Nombre de la empresapagos numero tres', 'estado' => 1, 'fechapago'=> '28-11-2024', 'fechavence' => '25-11-2024']
];

$datosdepago = [
    'id'                      => 1,
    'nombre_empresapagos'          => 'Nombre de la empresapagos numero uno',
    'nit'                     => '123456789',
    'numero_empleados'        => 150,
    'tipologia'               => 'Spa',
    'direccion'               => 'Calle Falsa 123, Ciudad',
    'telefono'                => '3102640456',
    'whatsapp'                => '573102640456',
    'representante_legal'     => 'Juan Pérez',
    'sitio_web'               => 'https://www.ejemplo.com',
    'descripcion_empresapagos'     => 'Descripción breve de la empresapagos y sus actividades.',
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
    'fechapago'               => '25-11-2024'
];


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pagos</title>
  
    <style>
        #slideDivpagos { width: 500px; height: 100vh; background-color: #ffffff; position: fixed; top: 0; right: -600px; border-radius: 14px 0 0 14px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); transition: right 0.5s ease; } 
        #slideDivpagos.active { right: 0; } @keyframes floating { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } } 
        @keyframes growWidth { from { width: 0; } to { width: 60%; } } #porcentajetotal div { animation: growWidth 3s ease forwards; }
        .switch input{opacity:0;width:0}.slideres{display:flex;align-items:center;position:absolute;cursor:pointer;top:10%;left:10%;right:0;bottom:0;background-color:#FD7377;transition:0.4s;border-radius:100vw}.slideres span{position:absolute;content:'';height:75%;aspect-ratio:1/1;border-radius:50%;left:8%;background-color:white;transition:0.4s}.slideres.on{background-color:#47A1A8}.slideres.off{background-color:#FD7377}.slideres.on span{transform:translateX(100%)}.slideres.off span{transform:translateX(0)}
        #slideDivpagoscdclientes { width: 500px; height: 100vh; background-color: #ffffff; position: fixed; top: 0; right: -600px; border-radius: 14px 0 0 14px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); transition: right 0.5s ease; } 
        #slideDivpagoscdclientes.active { right: 0; } @keyframes floating { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } } 
    </style>
</head>
<body style="overflow:hidden;">
    
    <div style="width:100%; height:100%; box-sizing: border-box; padding-left:3%;">
        <h1 style="color:#47A1A8;">Historial de pagos</h1>
        <p style="font-size:1vw;">En esta sección puedes gestionar cada uno de los pagos de la plataforma, sus datos, estados y permisos.</p>
        
        <div style="width:96%; aspect-ratio:35/1; display:flex; flex-direction:row; justify-content: space-between;">
            <div style="width:80%; height:95%; position: relative;">
                <input id="buscarpago" type="text" placeholder="buscarpago" style="padding-left:40px; font-size:.9vw; width:calc(99% - 40px); height:100%; border:2px solid #47A1A8; border-radius:12px;" oninput="filtrarempresapagoss()">
                <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-30%); color: #ccc;">
                    <img src="https://img.icons8.com/material-outlined/24/cccccc/search.png" alt="Search Icon">
                </span>
            </div>
            <select id="filtrarporestadopago" style="padding-left:1%; font-size:.9vw; width:22%; height:115%; background-color:#ffffff; border: 2px solid #47A1A8; border-radius:12px;" onchange="filtrarempresapagoss()">
                <option value="Todos">Todos</option>
                <option value="Activos">Pagos activos</option>
                <option value="Inactivos">Pagos vencidos</option>
            </select>
            <div onclick="descargarCSV()" style="margin-left:.5%; cursor:pointer; width:13%; height:100%; background-color:#ffffff; border-radius:10px; display:flex; align-items:center; justify-content:center; border: 2px solid #47A1A8;">
                <p style="color:#47A1A8; font-size:.9vw;">Exportar</p>
            </div>
           
        </div>

        <div id="listapagos" style="cursor:pointer; width:96%; height:calc(70% + 10px); margin-top:20px; overflow-y: auto;">
        <?php foreach ($pagos as $pagoss): ?>
            <div onclick="editarpago(<?php echo $pagoss['id']; ?>);" id="empresapagos<?php echo $pagoss['id']; ?>" class="empresapagos" data-estado="<?php echo $pagoss['estado']; ?>" style="width:100%; aspect-ratio:25/1; margin-bottom:.6%; background-color:#F2F3F6; border-radius:.5vw; display:flex; flex-direction:row; align-items:center;">
                
                <div style="cursor:pointer; height:50%; aspect-ratio:1/1; background-color:<?php echo $pagoss['estado'] == 0 ? '#FD7377' : '#47A1A8'; ?>; border-radius:9px; margin-left:1%;"></div>
                <p class="nombre-empresapagos" style="margin-left:2%; width:60%; font-size:.9vw; cursor:pointer;"><?php echo $pagoss['nombre']; ?></p>
                <p class="fechadepago" style="margin-left:2%; width:10%; font-size:.9vw; cursor:pointer;">Pago <?php echo $pagoss['fechapago']; ?></p>
                <p class="fechavence" style="margin-left:2%; width:10%; font-size:.9vw; cursor:pointer;">Vence <?php echo $pagoss['fechavence']; ?></p>
                <p class="estado" style="margin-left:2%; width:10%; font-size:.9vw; cursor:pointer;"><?php echo $pagoss['estado'] == 0 ? 'Pago Vencido' : 'Pago Activo'; ?></p>

            </div>
        <?php endforeach; ?>
 
        </div>
    </div>

    

    <!--slide-->
    <div id="slideDivpagos" style=" padding:2%; box-sizing: border-box;">

            <div style="height:100%; overflow-y: auto; overflow-x: hidden; padding:3%; padding-top:0; padding-bottom:0;">
                <p style="margin:0; padding:0; color:#47A1A8; font-size:1.3vw; font-weight:700;">Informacion del pago</p>
                <p style="font-size:.7vw;  padding:0;">A continuación se muestra la información del pago seleccionado. Por favor, no realices modificaciones a menos que sea estrictamente necesario.</p>

                <div style="width:100%; display:flex; flex-direction:row; justify-content:space-between;">
                <div style="margin-bottom: 16px; position: relative; width:49%;">
                    <input type="text" name="ciudad" value="<?php echo $datosdepago['ciudad']; ?>" placeholder="Ciudad" style="width: calc(99% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                    <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                        <img src="https://img.icons8.com/material-outlined/24/cccccc/building.png" alt="Company Icon">
                    </span>
                </div>
                    <div style="margin-bottom: 16px; position: relative; width:49%;">
                        <input readonly type="text" value="<?php echo $datosdepago['fecha_creacion'];?>" name="Suscripción" placeholder="Suscripción" style="width: 100%; padding: 6px; padding-left:40px; width:calc(98% - 40px); border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/calendar.png" alt="User Icon">
                        </span>
                    </div>
                </div>

                <div style="margin-bottom: 16px; position: relative;">
                    <input type="text" name="empresapagos" value="<?php echo $datosdepago['nombre_empresapagos']; ?>" placeholder="Nombre de la empresapagos o razón social" style="width: calc(99% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                    <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                        <img src="https://img.icons8.com/material-outlined/24/cccccc/building.png" alt="Company Icon">
                    </span>
                </div>

                <div style="width:100%; display:flex; flex-direction:row; justify-content:space-between;">
                    <div style="margin-bottom: 16px; position: relative; width:49%;">
                        <input type="number" name="identificacion" value="<?php echo $datosdepago['nit'];?>" placeholder="Nit" style="width: 100%; padding: 6px; padding-left:40px; width:calc(96% - 40px); border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/identification-documents.png" alt="Identification Icon">
                        </span>
                    </div>
                    <div style="margin-bottom: 16px; position: relative; width:49%;">
                        <input type="number" name="empleados" value="<?php echo $datosdepago['numero_empleados'];?>" placeholder="No. Empleados" style="width: 100%; padding: 6px; padding-left:40px; width:calc(98% - 40px); border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/user.png" alt="User Icon">
                        </span>
                    </div>
                </div>

                <div style="margin-bottom: 16px; position: relative;">
                    <input type="text" name="location" value="<?php echo $datosdepago['direccion'];?>" placeholder="Dirección de la sede principal" style="width: calc(99% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                    <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                        <img src="https://img.icons8.com/material-outlined/24/cccccc/marker.png" alt="Location Icon">
                    </span>
                </div>

                <div style="width:100%; display:flex; flex-direction:row; justify-content:space-between;">
                    <div style="margin-bottom: 16px; position: relative; width:49%;">
                        <input type="number" value="<?php echo $datosdepago['telefono'];?>" name="Teléfono" placeholder="Teléfono" style="width: 100%; padding: 6px; padding-left:40px; width:calc(96% - 40px); border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/phone.png" alt="Identification Icon">
                        </span>
                    </div>
                    <div style="margin-bottom: 16px; position: relative; width:49%;">
                        <input type="number" value="<?php echo $datosdepago['whatsapp'];?>" name="WhatsApp" placeholder="WhatsApp" style="width: 100%; padding: 6px; padding-left:40px; width:calc(98% - 40px); border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/whatsapp.png" alt="User Icon">
                        </span>
                    </div>
                </div>

                <div style="margin-bottom: 16px; position: relative;">
                    <input type="text" value="<?php echo $datosdepago['representante_legal'];?>" name="representante" placeholder="Representante legal" style="width: calc(100% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                    <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                        <img src="https://img.icons8.com/material-outlined/24/cccccc/businessman.png" alt="Representative Icon">
                    </span>
                </div>

                <div style="margin-bottom: 16px; position: relative;">
                    <input type="text" value="<?php echo $datosdepago['sitio_web'];?>" name="web" placeholder="Sitio web" style="width: calc(100% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                    <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                        <img src="https://img.icons8.com/material-outlined/24/cccccc/internet.png" alt="Website Icon">
                    </span>
                </div>

                <div style="margin-bottom: 10px; position: relative;">
                    <textarea name="descripcion" placeholder="Descripcion de la empresapagos" rows="3" style="width: 98%; padding: 6px 6px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333; resize: none;"><?php echo $datosdepago['descripcion_empresapagos'];?></textarea>
                </div>

                <div style="width:100%; display:flex; flex-direction:row; justify-content:space-between;">
                    <div style="margin-bottom: 16px; position: relative; width:50%;"> 
                        <button onclick="editarpago()" style="cursor:pointer; background-color:#ffffff; color:#47A1A8; border-radius:10px; border: 2px solid #47A1A8; width:100%;height:35px;font-weight:600;">Cerrar</button>
                    </div>
                    <div style="margin-bottom: 16px; position: relative; width:50%; margin-left:2%;">
                        <button onclick="editarpago()" style="cursor:pointer; background-color:#47A1A8; color:#ffffff; border-radius:10px; border:none; width:100%;height:35px;font-weight:600;">Guardar</button>
                    </div>
                </div>
            </div>
        </div>


    <script>
        var pagos = <?php echo json_encode($pagos); ?>;
        var pagoaeliminar = "";

        function filtrarempresapagoss() {
            const input = document.getElementById('buscarpago').value.toLowerCase(); 
            const estadoFiltro = document.getElementById('filtrarporestadopago').value; 
            const empresapagoss = document.querySelectorAll('.empresapagos'); 
            empresapagoss.forEach(empresapagos => {
                const nombreempresapagos = empresapagos.querySelector('.nombre-empresapagos').textContent.toLowerCase(); 
                const estadoempresapagos = empresapagos.getAttribute('data-estado'); 
                const coincideEstado = (estadoFiltro === "Todos" || (estadoFiltro === "Activos" && estadoempresapagos == 1) || (estadoFiltro === "Inactivos" && estadoempresapagos == 0));
                const coincideNombre = nombreempresapagos.includes(input);
                if (coincideNombre && coincideEstado) {
                    empresapagos.style.display = 'flex';
                } else {
                    empresapagos.style.display = 'none';
                }
            });
        }

        function descargarCSV() {
            const encabezados = ['ID', 'Nombre', 'Estado', 'Porcentaje Completado', 'Tipología'];
            let contenidoCSV = encabezados.join(',') + '\n'; 
            pagos.forEach(pago => {
                contenidoCSV += [
                    pago.id,
                    pago.nombre,
                    pago.estado === 1 ? 'Activo' : 'Inactivo',
                    pago.porcentajecompletado + '%',
                    pago.tipologia
                ].join(',') + '\n';
            });
            const blob = new Blob([ "\ufeff" + contenidoCSV ], { type: 'text/csv; charset=utf-8' });
            const enlace = document.createElement('a');
            enlace.href = URL.createObjectURL(blob);
            enlace.download = 'pagos.csv';
            enlace.click();
        }
        

        function editarpago(id) {
            const slideDivpagos = document.getElementById('slideDivpagos');
            if (slideDivpagos.classList.contains('active')) {
                slideDivpagos.classList.remove('active'); 
            } else {
                slideDivpagos.classList.add('active');  
            }
        }        
 

    </script>
</body>
</html>
