<?php

namespace App\Message;

enum ModuleDocumentMessage : string
{
    case createModuleDocumentSuccess = "Se creo la relacion de modulo y documento";
    case createModuleDocumentModelFail = "No se pudo crear la relación entre el modulo y el documento";
    case createModuleDocumentModelException = "Intente crear la relación mas tarde";

    case findModuleDocumentSuccess = "Se encontro la relación entre el modulo y documento";
    case findModuleDocumentModelFail = "No se encontro una relación de documentos, verifique sus datos";
    case findModuleDocumentModelException = "Intente mas tarde, no se ha encontrado la relación";

    case updateModuleDocumentSuccess = "Se ha actualizado correctamente";
    case updateModuleDocumentModelFail = "No se ha podido actualizar";
    case updateModuleDocumentModelException = "Intente mas tarde realizar la actualización";

    case deleteModuleDocumentSuccess = "Se ha eliminado correctamente la relación";
    case deleteModuleDocumentModelFail = "No se hapodido eliminar la relación";
    case deleteModuleDocumentModalException = "Intente mas tarde eliminar la relación";
}
