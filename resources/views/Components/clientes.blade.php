
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuarios</title>
   
    <style>
        .slideDiv { width: 500px; height: 100vh; background-color: #ffffff; position: fixed; top: 0; right: -600px; border-radius: 14px 0 0 14px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); transition: right 0.5s ease; } 
        .slideDiv.active { right: 0; } @keyframes floating { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } } 
        @keyframes growWidth { from { width: 0; } to { width: 60%; } } #porcentajetotal div { animation: growWidth 3s ease forwards; }
        .switch input{opacity:0;width:0}.slideres{display:flex;align-items:center;position:absolute;cursor:pointer;top:10%;left:10%;right:0;bottom:0;background-color:#FD7377;transition:0.4s;border-radius:100vw}.slideres span{position:absolute;content:'';height:75%;aspect-ratio:1/1;border-radius:50%;left:8%;background-color:white;transition:0.4s}.slideres.on{background-color:#47A1A8}.slideres.off{background-color:#FD7377}.slideres.on span{transform:translateX(100%)}.slideres.off span{transform:translateX(0)}
        .slideDivcdclientes { width: 500px; height: 100vh; background-color: #ffffff; position: fixed; top: 0; right: -600px; border-radius: 14px 0 0 14px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); transition: right 0.5s ease; } 
        .slideDivcdclientes.active { right: 0; } @keyframes floating { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-10px); } } 
    </style>
</head>
<body style="overflow:hidden;">

<div style="width:100%; height:100%; box-sizing: border-box; padding-left:3%;">
        <h1 style="color:#47A1A8;">Lista de Usuarios</h1>
        <p style="font-size:1vw;">En esta sección puedes gestionar cada uno de los usuarios de la plataforma, sus datos, estados y permisos.</p>
        <div style="width:96%; aspect-ratio:35/1; display:flex; flex-direction:row; justify-content: space-between;">
            <div style="width:50%; height:95%; position: relative;">
                <input id="buscar" type="text" placeholder="Buscar" style="padding-left:40px; font-size:.9vw; width:calc(99% - 40px); height:100%; border:2px solid #47A1A8; border-radius:12px;" oninput="filtrarEmpresas()">
                <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-30%); color: #ccc;">
                    <img src="https://img.icons8.com/material-outlined/24/cccccc/search.png" alt="Search Icon">
                </span>
            </div>
            <select id="filtrarporestado" style="padding-left:1%; font-size:.9vw; width:22%; height:115%; background-color:#ffffff; border: 2px solid #47A1A8; border-radius:12px;" onchange="filtrarEmpresas()">
                <option value="Todos">Todos</option>
                <option value="Activos">Activos</option>
                <option value="Inactivos">Inactivos</option>
            </select>

            <div onclick="descargarCSVclientes()" style="cursor:pointer; width:13%; height:100%; background-color:#ffffff; border-radius:10px; display:flex; align-items:center; justify-content:center; border: 2px solid #47A1A8;">
                <p style="color:#47A1A8; font-size:.9vw;">Exportar</p>
            </div>
            <div onclick="mostrarmodalsumarusuarios()" style="cursor:pointer; width:13%; height:100%; background-color:#47A1A8; border-radius:10px; display:flex; align-items:center; justify-content:center; border: 2px solid #47A1A8;">
                <p style="color:#ffffff; font-size:.9vw;">+ Nuevo usuario</p>
            </div>
        </div>
        <div id="lista" style="width:96%; height:calc(70% + 10px); margin-top:20px; overflow-y: auto;">
            @foreach ($Companies as $Company)
                <div id="compañia{{$Company['id']}}" class="empresa" data-estado="{{$Company['state']}}" style="width:100%; aspect-ratio:25/1; margin-bottom:.6%; background-color:#F2F3F6; border-radius:.5vw; display:flex; flex-direction:row; align-items:center;">
                    <p class="nombre-empresa" style="margin-left:2%; width:40%; font-size:.9vw; cursor:pointer;">{{$Company['nameCompany']}} </p>
                    <p style="font-size:.9vw; margin-left:2%;">{{$Company['percent']}}%</p>
                    <div style="margin-left:1%; width:20%; height:20%; background-color:#ffffff; border-radius:12px;">
                        <div style="width:{{$Company['percent']}}%; height:100%; background-color:#47A1A8; border-radius:12px;"></div>
                    </div>
                    <p style="width:20%; font-size:.9vw; margin-left:1%; text-align:center; color:#47A1A8; font-weight:600;">{{$Typologies[$Company['typology_foreigner']-1]['typologyName']}}</p>
                    
                    <label class="switch" style="position: relative; display: inline-block; height: 60%; aspect-ratio:1.8/1;">
                        <form id="updateDataCustomerState{{$Company['id']}}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" id="idUpdateState" value="{{$Company['id']}}">
                            <input type="hidden" name="userId" value="{{$Company['userId']}}">
                            <input type="hidden" name="nameCompany" value="{{$Company['nameCompany']}}">
                            <input type="hidden" name="nit" value="{{$Company['nit']}}">
                            <input type="hidden" name="numberEmployees" value="{{$Company['numberEmployees']}}">
                            <input type="hidden" name="address" value="{{$Company['address']}}">
                            <input type="hidden" name="cellphone" value="{{$Company['cellphone']}}">
                            <input type="hidden" name="whatsapp" value="{{$Company['whatsapp']}}">
                            <input type="hidden" name="legalRepresentative" value="{{$Company['legalRepresentative']}}">
                            <input type="hidden" name="webSite" value="{{$Company['webSite']}}">
                            <input type="hidden" name="typology_foreigner" value="{{$Company['typology_foreigner']}}">
                            <input type="hidden" name="companyDescription" value="{{$Company['companyDescription']}}">
                            <input type="hidden" name="contactEmail" value="{{$Company['contactEmail']}}">
                            <input type="hidden" name="typePerson_foreigner" value="{{$Company['typePerson_foreigner']}}">
                            <input type="hidden" name="sector_foreigner" value="{{$Company['sector_foreigner']}}">
                            <input type="hidden" name="department_foreigner" value="{{$Company['department_foreigner']}}">
                            <input type="hidden" name="percent" value="{{$Company['percent']}}">
                            <input type="hidden" name="state" value="{{$Company['state']}}">
                            <input type="checkbox" id="switch{{$Company['id']}}" onchange="toggleSwitchclientes({{$Company['id']}})" style="opacity: 0; width: 0;"  @if($Company['state'] == 1) checked @endif >
                            <span class="slideres {{$Company['state'] == 1 ? 'on' : 'off'}}" style="display:flex; align-items:center; position: absolute; cursor: pointer; top: 10%; left: 10%; right: 0; bottom: 0; transition: 0.4s; border-radius:100vw;">
                                <span style="position: absolute; content: ''; height: 75%; aspect-ratio:1/1; border-radius: 50%; left: 8%; background-color: white; transition: 0.4s;"></span>
                            </span>
                        </form>
                    </label>
                    <div style="width:10%; height:100%; display:flex; flex-direction:row; justify-content: flex-end; align-items:center;">
                        <img onclick="enviaremailclientes({{$Company['id']}},event)" style="height:50%; margin-right:8%; cursor:pointer;" src="https://img.icons8.com/material-outlined/24/47A1A8/mail.png" alt="Edit Icon">
                            <div class="slideDivcdclientes" id="slideDivcdclientes{{$Company['id']}}" style="padding:2%; box-sizing: border-box;z-index:9999999"> 
                                <p style="margin:0; padding:0; color:#47A1A8; font-size:1.3vw; font-weight:700;">Informacion del colaborador</p>
                                <p style="font-size:.7vw;  padding:0;">Este es un email transaccional, por tanto, debe ser de caracter informativo. No se espera que el usuario responda y no existe un historial.</p>
                                <form id='emailAdminForUserInfo{{$Company['id']}}'>
                                    @csrf
                                    <div style="margin-bottom: 16px; position: relative;">
                                        <input id="asuntoemailcolaborador" type="text" name="companyEmail" value="{{$Company['contactEmail']}}" placeholder="Asunto" style="width: calc(99% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                                            <img src="https://img.icons8.com/material-outlined/24/cccccc/mail.png" alt="Company Icon">
                                        </span>
                                    </div>
                                    <div style="margin-bottom: 10px; position: relative;">
                                        <textarea name="descriptionEmail" placeholder="Escribe aqui el mensaje que deseas enviar a este usuario" rows="3" style="height:60vh; width: 98%; padding: 4%; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 1vw; background-color: #FAFBFE; color: #333; resize: none;"></textarea>
                                    </div>
                                    <div style="width:100%; display:flex; flex-direction:row; justify-content:space-between;">
                                        <div style="margin-bottom: 16px; position: relative; width:50%; "> 
                                            <button onclick="enviaremailclientes({{$Company['id']}},event)" style="cursor:pointer; background-color:#ffffff; color:#47A1A8; border-radius:10px; border:2px solid #47A1A8; width:100%;height:35px;font-weight:600;">Cerrar</button>
                                        </div>
                                        <div style="margin-bottom: 16px; position: relative; width:50%; margin-left:2%;">
                                            <button onclick="sendEmailForAdmin({{$Company['id']}})" style="cursor:pointer; background-color:#47A1A8; color:#ffffff; border-radius:10px; border:none; width:100%;height:35px;font-weight:600;">Enviar</button>
                                        </div>
                                    </div>
                                </form>    
                            </div>
                        <img onclick="eliminarusuario({{$Company['id']}})" style=" height:50%; margin-right:8%; cursor:pointer;" src="https://img.icons8.com/material-outlined/24/47A1A8/delete.png" alt="Delete Icon">
                            <div id="modaleliminarusuario" style="display:none; position:relative; width:100vw; height:100vh; top:0; left:0; background-color:rgba(50, 50, 50, 0.8); position:fixed; padding:0; margin:0; z-index: 99999; align-items:center; justify-content:center;">
                                <div style="position:relative; Width:50vw;height:50vh;;background-color:#ffffff; margin:0;padding:0;border-radius:12px; display:flex; flex-direction:column; align-items:center; justify-content:center;">
                                    <form id="deleteCustomerForAdmin" style="display:flex; flex-direction:column; justify-content:center; align-items:center;">
                                        @csrf
                                        <img src="img/logo.svg" alt="logo" style="width:30%;">
                                        <p style="width:50%;text-align:center; font-size:.9vw;">Para eliminar de manera <b>permanente</b> este usuario por favor escriba <b>la palabra "eliminar"</b></p>
                                        <input id="palabraeliminar" type="nombre" placeholder="Escriba la palabra eliminar" style=" text-align:center;width:50%;height:30px;border-radius:12px;border:2px solid #47A1A8;">
                                        <div onclick="confirmareliminarusuario({{$Company['id']}})" style="background-color:#47A1A8; margin-top:10px; width:200px; height:35px; border-radius:9px; display:flex; align-items:center; justify-content:center; cursor:pointer;"><p style="color:#ffffff; width:100%;height:50%;text-align:center;padding:0;">Eliminar</p></div>
                                        <p onclick="cerrareliminarusuario()" style="color:#47A1A8; cursor:pointer;">Cerrar</p>
                                    </form>
                                </div> 
                            </div>      
                        <img  onclick="editarusuario({{$Company['id']}})" style="height:50%; margin-right:8%; cursor:pointer;" src="https://img.icons8.com/material-outlined/24/47A1A8/edit.png" alt="Edit Icon">
                    </div>  
                </div>
            @endforeach 
        </div>
    </div> 

    @foreach ($Companies as $Company)
        <div id="{{'slideDiv'.$Company['id']}}" class="slideDiv" style="padding:2%; box-sizing: border-box;">
            <div style="height:100%; overflow-y: auto; overflow-x: hidden; padding:3%; padding-top:0; padding-bottom:0;">
                <p style="margin:0; padding:0; color:#47A1A8; font-size:1.3vw; font-weight:700;">Informacion del usuario</p>
                <p style="font-size:.7vw;  padding:0;">A continuación se muestra la información del usuario seleccionado. Por favor, no realices modificaciones a menos que sea estrictamente necesario.</p>
                <form method="post" action="{{route('compañias.update',$Company['id'])}}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="userId" value="{{$Company['userId']}}">
                    <input type="hidden" name="percent" value="{{$Company['percent']}}">
                    <input type="hidden" name="typePerson_foreigner" value="{{$Company['typePerson_foreigner']}}">
                    <input type="hidden" name="sector_foreigner" value="{{$Company['sector_foreigner']}}">
                    <div style="width:100%; display:flex; flex-direction:row; justify-content:space-between;">
                        <div style="margin-bottom: 16px; position: relative; width:49%;">
                            <select type="text" name="department_foreigner" value="{{$Departments[$Company['department_foreigner']]['departmentName']}}" placeholder="Ciudad" style="width: calc(99% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                                <option value="" disabled {{$Company['typologies_foreigner'] ? 'selected' : '' }}>Departamento</option>
                                @foreach ($Departments as $Department)
                                    <option value="{{$Department['id']}}" {{ $Department['id'] == $Company['department_foreigner'] ? 'selected' : '' }}>
                                        {{ $Department['departmentName'] }}
                                    </option>
                                @endforeach
                            </select>
                            <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                                <img src="https://img.icons8.com/material-outlined/24/cccccc/building.png" alt="Company Icon">
                            </span>
                        </div>
                        <div style="margin-bottom: 16px; position: relative; width:49%;">
                            <input readonly type="text" value="{{$Company['created_at']}}" name="created_at" placeholder="Suscripción" style="width: 100%; padding: 6px; padding-left:40px; width:calc(98% - 40px); border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                            <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                                <img src="https://img.icons8.com/material-outlined/24/cccccc/calendar.png" alt="User Icon">
                            </span>
                        </div>
                    </div>
                    <div style="margin-bottom: 16px; position: relative;">
                        <input type="text" name="nameCompany" value="{{$Company['nameCompany']}}" placeholder="Nombre de la empresa o razón social" style="width: calc(99% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/building.png" alt="Company Icon">
                        </span>
                    </div>
                    <div style="margin-bottom: 16px; position: relative;">
                        <input type="text" name="contactEmail" value="{{$Company['contactEmail']}}" placeholder="Nombre de la empresa o razón social" style="width: calc(99% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/building.png" alt="Company Icon">
                        </span>
                    </div>
                    <div style="width:100%; display:flex; flex-direction:row; justify-content:space-between;">
                        <div style="margin-bottom: 16px; position: relative; width:49%;">
                            <input type="text" name="nit" value="{{$Company['nit']}}" placeholder="Nit" style="width: 100%; padding: 6px; padding-left:40px; width:calc(96% - 40px); border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                            <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                                <img src="https://img.icons8.com/material-outlined/24/cccccc/identification-documents.png" alt="Identification Icon">
                            </span>
                        </div>
                        <div style="margin-bottom: 16px; position: relative; width:49%;">
                            <input type="number" name="numberEmployees" value="{{$Company['numberEmployees']}}" placeholder="No. Empleados" style="width: 100%; padding: 6px; padding-left:40px; width:calc(98% - 40px); border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                            <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                                <img src="https://img.icons8.com/material-outlined/24/cccccc/user.png" alt="User Icon">
                            </span>
                        </div>
                    </div>
                    <div style="margin-bottom: 16px; position: relative;">
                        <select  name="typology_foreigner" style="padding: 6px; padding-left:40px; width:101.5%; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333; appearance: none;">
                            <option value=""  disabled {{ $Company['typologies_foreigner'] ? 'selected' : '' }}>Tipo de empresa</option>
                            @foreach ($Typologies as $Typology)
                                <option value="{{ $Typology['id'] }}" {{ $Typology['id'] == $Company['typology_foreigner'] ? 'selected' : '' }}>
                                    {{ $Typology['typologyName'] }}
                                </option>
                            @endforeach
                        </select>                    
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/stethoscope.png" alt="Company Type Icon">
                        </span>
                    </div>
                    <div style="margin-bottom: 16px; position: relative;">
                        <input type="text" name="address" value="{{$Company['address']}}" placeholder="Dirección de la sede principal" style="width: calc(99% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/marker.png" alt="Location Icon">
                        </span>
                    </div>
                    <div style="width:100%; display:flex; flex-direction:row; justify-content:space-between;">
                        <div style="margin-bottom: 16px; position: relative; width:49%;">
                            <input type="number" value="{{$Company['cellphone']}}" name="cellphone" placeholder="Teléfono" style="width: 100%; padding: 6px; padding-left:40px; width:calc(96% - 40px); border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                            <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                                <img src="https://img.icons8.com/material-outlined/24/cccccc/phone.png" alt="Identification Icon">
                            </span>
                        </div>
                        <div style="margin-bottom: 16px; position: relative; width:49%;">
                            <input type="number" value="{{$Company['whatsapp']}}" name="whatsapp" placeholder="WhatsApp" style="width: 100%; padding: 6px; padding-left:40px; width:calc(98% - 40px); border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                            <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                                <img src="https://img.icons8.com/material-outlined/24/cccccc/whatsapp.png" alt="User Icon">
                            </span>
                        </div>
                    </div>
                    <div style="margin-bottom: 16px; position: relative;">
                        <input type="text" value="{{$Company['legalRepresentative']}}" name="legalRepresentative" placeholder="Representante legal" style="width: calc(100% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/businessman.png" alt="Representative Icon">
                        </span>
                    </div>
                    <div style="margin-bottom: 16px; position: relative;">
                        <input type="text" value="{{$Company['webSite']}}" name="webSite" placeholder="Sitio web" style="width: calc(100% - 40px); padding: 6px; padding-left:40px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333;">
                        <span style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #ccc;">
                            <img src="https://img.icons8.com/material-outlined/24/cccccc/internet.png" alt="Website Icon">
                        </span>
                    </div>
                    <div style="margin-bottom: 10px; position: relative;">
                        <textarea name="companyDescription" placeholder="Descripcion de la empresa" rows="3" style="width: 98%; padding: 6px 6px; border: 3px solid #F6F8FB; border-radius: 8px; font-size: 14px; background-color: #FAFBFE; color: #333; resize: none;">{{$Company['companyDescription']   }}</textarea>
                    </div>
                    <div style="width:100%; display:flex; flex-direction:row; justify-content:space-between;">
                        <div style="margin-bottom: 16px; position: relative; width:50%;"> 
                            <button type="button" onclick="guradrusuariosmodificado({{$Company['id']}})" style="cursor:pointer; background-color:#ffffff; color:#47A1A8; border-radius:10px; border: 2px solid #47A1A8; width:100%;height:35px;font-weight:600;">Cerrar</button>
                        </div>
                        <div style="margin-bottom: 16px; position: relative; width:50%; margin-left:2%;">
                            <button type="submit" style="cursor:pointer; background-color:#47A1A8; color:#ffffff; border-radius:10px; border:none; width:100%;height:35px;font-weight:600;">Guardar</button>
                        </div>
                    </div>  
                </form>
            </div>
        </div> 
    @endforeach    
    
    <div id="modalnuevousuarioclientes" style="z-index:9999999; display:none; position:relative; width:150vw; height:150vh; background-color:rgba(50, 50, 50, 0.8); position:fixed; padding:0; margin:0; z-index: 99999; margin-left:-18.4%; align-items:center; justify-content:center;">
        <div style="position:relative; Width:50vw;height:50vh;;background-color:#ffffff; margin:0;padding:0;border-radius:12px; display:flex; flex-direction:column; align-items:center; justify-content:center;">
            <img src="img/logo.svg" alt="logo" style="width:30%;">
            <p style="width:70%;text-align:center; font-size:.9vw;">No es posible agregar a un nuevo usuario de forma directa, ya que es necesario que el usuario realice su registro. Sin embargo, puedes utilizar este formulario para enviar una invitación por correo electrónico, permitiendo que la persona se una a la comunidad.</p>
            <input id="nombreinvitacion" type="text" autocomplete="off" placeholder="Nombre" style=" text-align:center;width:50%;height:30px;border-radius:12px;border:2px solid #47A1A8;">
            <input id="emailinvitacion" type="email" autocomplete="off" placeholder="Email" style=" text-align:center;width:50%;height:30px;margin-top:10px;border-radius:12px;border:2px solid #47A1A8;">
            <div onclick="enviarinvitacionnuevocliente()" style="background-color:#47A1A8; margin-top:10px; width:200px; height:35px; border-radius:9px; display:flex; align-items:center; justify-content:center; cursor:pointer;"><p style="color:#ffffff; width:100%;height:50%;text-align:center;padding:0;">Enviar invitación</p></div>
            <p onclick="ocultarmodalsumarusuarios()" style="color:#47A1A8; cursor:pointer;">Cerrar</p>
        </div>
    </div>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif  





    <script>
        //var usuarios = <?php echo json_encode($Companies); ?>;
        var usuarioaeliminar = "";

        function filtrarEmpresas() {
            const input = document.getElementById('buscar').value.toLowerCase(); 
            const estadoFiltro = document.getElementById('filtrarporestado').value; 
            const empresas = document.querySelectorAll('.empresa'); 
            empresas.forEach(empresa => {
                const nombreEmpresa = empresa.querySelector('.nombre-empresa').textContent.toLowerCase(); 
                const estadoEmpresa = empresa.getAttribute('data-estado'); 
                const coincideEstado = (estadoFiltro === "Todos" || (estadoFiltro === "Activos" && estadoEmpresa == 1) || (estadoFiltro === "Inactivos" && estadoEmpresa == 0));
                const coincideNombre = nombreEmpresa.includes(input);
                if (coincideNombre && coincideEstado) {
                    empresa.style.display = 'flex';
                } else {
                    empresa.style.display = 'none';
                }
            });
        }

        const empresasclientes = @json($Companies);

        function descargarCSVclientes() {

            const encabezados = [
                'ID', 'Nombre', 'Estado', 'Porcentaje Completado', 'Tipología', 
                'NIT', 'Número de Empleados', 'Dirección', 'Celular', 
                'WhatsApp', 'Representante Legal', 'Sitio Web', 'Tipología Extranjero', 
                'Descripción de la Empresa', 'Correo de Contacto'
            ];
            let contenidoCSV = encabezados.join(',') + '\n';

            empresasclientes.forEach(company => {
                contenidoCSV += [
                    company.id,
                    company.nameCompany,
                    company.state === 1 ? 'Activo' : 'Inactivo',
                    company.percent + '%',
                    company.tipologia,
                    company.nit,
                    company.numberEmployees,
                    company.address,
                    company.cellphone,
                    company.whatsapp,
                    company.legalRepresentative,
                    company.webSite,
                    company.typology_foreigner,
                    company.companyDescription,
                    company.contactEmail,
                ].join(',') + '\n';
            });

            const blob = new Blob(["\ufeff" + contenidoCSV], { type: 'text/csv; charset=utf-8' });
            const enlace = document.createElement('a');
            enlace.href = URL.createObjectURL(blob);
            enlace.download = 'companies.csv';
            enlace.click();
        }



        function mostrarmodalsumarusuarios(){
            document.getElementById('modalnuevousuarioclientes').style.display = "flex";
        }
        function ocultarmodalsumarusuarios(){
            document.getElementById('modalnuevousuarioclientes').style.display = "none";
        }


        async function eliminarusuario(id){

            document.getElementById('modaleliminarusuario').style.display = "flex";          
        }

        async function confirmareliminarusuario(id){
            let palabraeliminar = document.getElementById('palabraeliminar').value;
            if(palabraeliminar === 'eliminar'){
                try{
                    const token = sessionStorage.getItem('token_bearer');
                    const url = `/compañias/${id}`;
                    let form = document.getElementById('deleteCustomerForAdmin');
                    let formData =  new FormData(form);
                    const data = Object.fromEntries(formData.entries());
                    const response = await fetch(url, {
                        method : 'DELETE',
                        headers : {
                            'Content-Type' : 'application/json',
                            'Authorization' : `Bearer ${token}`
                        },
                        body : JSON.stringify(data)
                        });
                    if(response.ok){
                        alert('Usuario Eliminado');
                        location.reload();
                    }else{
                        alert('no se eleimino');
                    }
                }catch(err){
                    alert('El error es: ' + err);
                }

                /*
                document.getElementById('modaleliminarusuario').style.display = "none";
                const empresaDiv = document.getElementById('empresa' + usuarioaeliminar);
                if (empresaDiv) {
                    empresaDiv.style.display = 'none';
                }
                //alert('USUARIO ELIMINADO');
                */
                    
            }else{
                alert('La palabra '+palabraeliminar+' no coincide');
            }
        }
        
        function enviarinvitacionnuevocliente(){
            let nombre = document.getElementById('nombreinvitacion').value;
            let email = document.getElementById('emailinvitacion').value;
            if(nombre && email){
                alert('Enviando invitacion a '+nombre+' al correo electronico '+email);
                ocultarmodalsumarusuarios()
            }else{
                alert('Los campos no pueden estar vacios');
            }
        }

        function editarusuario(id) {

            const slideDiv = document.getElementById('slideDiv'+id);
            if (slideDiv.classList.contains('active')) {
                slideDiv.classList.remove('active'); 
            } else {
                slideDiv.classList.add('active');  
            }
        }

        
function enviaremailclientes(id,event) {
    event.preventDefault(); 
    const slideDiv = document.getElementById('slideDivcdclientes'+id);
    if (slideDiv.classList.contains('active')) {
        slideDiv.classList.remove('active'); 
    } else {
        slideDiv.classList.add('active');   
    }
}

function guradrusuariosmodificado(id){
    const slideDiv = document.getElementById('slideDiv'+id);
    slideDiv.classList.remove('active'); 
}

function solicitardatosusuarioseleccionado(){

}
function cambiarEstadoIcono() {
    var estado = document.getElementById("estado").value;
    var icono = document.getElementById("estadoIcono");
    if (estado == "1") {
        icono.src = "https://img.icons8.com/material-outlined/24/47A1A8/filled-circle.png";
    } else {
        icono.src = "https://img.icons8.com/material-outlined/24/FD7377/filled-circle.png";
    }
}
window.onload = function() {
    cambiarEstadoIcono();
}

         
function cerrareliminarusuario(){
    document.getElementById('modaleliminarusuario').style.display = "none";
}


function toggleSwitch(usuarioId) {
    var switchElement = document.getElementById("switch" + usuarioId);
    var estado = switchElement.checked ? 1 : 0;  
                var slider = switchElement.nextElementSibling;
    var color = estado === 1 ? '#47A1A8' : '#FD7377';  
    slider.style.backgroundColor = color;
    actualizarEstado(usuarioId, estado);
}

function actualizarEstado(usuarioId, estado) {
    let xhr = new XMLHttpRequest();
    let url = "/compañias/{id}";
    let data = JSON.stringify({
        'state' : estado
    });
    xhr.open("PUT", url, true);  
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.setRequestHeader("Authorization", "Bearer token");
    xhr.onreadystatechange = function() {
        if (xhr.status >= 200 && xhr.status < 300) {
        console.log("Éxito:", xhr.responseText);
        } else {
        console.error("Error:", xhr.status, xhr.statusText);
        }
    };
    xhr.onerror = function () {
    console.error("Error de red.");
    };
    xhr.send(data);  // Enviar la solicitud con los datos
}


async function toggleSwitchclientes(userId){
    let form = document.getElementById('updateDataCustomerState'+userId);
    let formData =  new FormData(form);
    const data = Object.fromEntries(formData.entries());
    if(data.state == 1){
        data.state = 0
    }else{
        data.state = 1
    }
    const token = sessionStorage.getItem('token_bearer');
    try{
        const url = `/compañias/${userId}`;
        const response = await fetch(url, {
            method : 'POST',
            headers : {
                'Content-Type' : 'application/json',
                'Authorization' : `Bearer ${token}`
            },
            body : JSON.stringify(data)
        });
        if(response.ok){
        // alert('se actualizo el estado');
            let checkbox = document.getElementById('switch' + userId);
            let estado = checkbox.checked ? 1 : 0; 
            let slider = document.querySelector('#switch' + userId + ' + .slideres');
            let circle = slider.querySelector('span');
            if (estado === 1) {
                slider.style.backgroundColor = '#47A1A8';
                circle.style.transform = 'translateX(100%)';
            } else {
                slider.style.backgroundColor = '#FD7377'; 
                circle.style.transform = 'translateX(0px)';
            }
            location.reload();
        }else{
        // alert('no se pudo actualizar el estado');
        }
    }catch(err){
        alert('El error es: ' + err);
    }
}

async function sendEmailForAdmin(id, event) {
    try {
        const token = sessionStorage.getItem('token_bearer');
        //event.preventDefault(); 

        // Obtiene el formulario y los datos
        let form = document.getElementById('emailAdminForUserInfo' + id);
        let formData = new FormData(form);
        const data = Object.fromEntries(formData.entries());
        const url = "/enviarEmailUsuario";
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type' : 'application/json',
                'Authorization': `Bearer ${token}`,
            },
            body: JSON.stringify(data)
        });

        if (response.ok) {
            alert('El correo se envió correctamente.');
            window.location.reload(); // Puedes descomentar esto si deseas recargar
        } else {
            const errorText = await response.text();
            alert(`Error en la respuesta: ${errorText}`);
            console.error('Error en la respuesta:', errorText);
        }
    } catch (err) {
        console.error('Error en la solicitud:', err);
        alert('Ocurrió un error al enviar la solicitud: ' + err);
    }
}

    </script>



</body>
</html>
