<?php

namespace App\Message;

enum DocumentMessage : string
{
    case createDocumentSuccess = 'Se creo el documento';
    case createDocumentModelFail = 'No se pudo crear el documento, verifique los datos';
    case createDocumentModelException = 'Intente crear el documento mas tarde';

    case findDocumentSuccess = 'Se encontro el documento';
    case findDocumentModelFail = 'Verifique el id del documento';
    case findDocumentModelException = 'Intente buscar el documento mas tarde';

    case findDocumentModuleModelSuccess = 'Documentos encontrados';
    case findDocumentModuleFail = 'No se encontraron documentos';
    case finddocumentModuleException = 'No se pudo buscar los documentos';


    case updateDocumentSuccess = 'Se actualizo el documento';
    case updateDocumentModelFail = 'Verifique los datos a actualizar';
    case updateDocumentModelException = 'Intente actualizar el documento mas tarde';

    case deleteDocumentSuccess = 'Se elimino el documento';
    case deleteDocumentModelFail = 'verifique el id del documento a eliminar';
    case deleteDocumentModelException = 'Intente eliminar mas tarde el documento';
}
