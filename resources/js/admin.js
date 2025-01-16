
function saveMemory(component,item,texto,icono){
    
     ['clientes', 'permisos', 'colaboradores', 'normatividad', 'facturacion', 'alertas'].forEach(id => document.getElementById(id).style.display = 'none');
     ['item1', 'item2', 'item3', 'item4', 'item5', 'item6'].forEach(id => document.getElementById(id).style.backgroundColor = '#ffffff');
     ['p1', 'p2', 'p3', 'p4', 'p5', 'p6'].forEach(id => (document.getElementById(id).style.color = '#333333', document.getElementById(id).style.fontWeight = 'normal'));
     ['icono1', 'icono2', 'icono3', 'icono4', 'icono5', 'icono6'].forEach(id => document.getElementById(id).style.fill = '#868686');
         
   
    document.getElementById(item).style.backgroundColor = '#47A1A8';
    document.getElementById(texto).style.color = '#ffffff';
    document.getElementById(icono).style.fill = '#ffffff';
    document.getElementById(component).style.display = 'flex';

 }

