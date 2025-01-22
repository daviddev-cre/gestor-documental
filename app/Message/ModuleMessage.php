<?php

namespace App\Message;

enum ModuleMessage :string
{
    case createModulSuccess = 'Se creo el nuevo modulo';
    case createModulFail = 'No se puede crear el modulo, verifique los datos';
    case createModulException = 'Intente crear el modulo mas tarde';

    case findModuleSuccess = 'Se encontro el modulo';
    case findModuleFail = 'No se pudo encontrar el modulo';
    case findModulException = 'Intente buscar el modulo mas tarde';

    case updateModulSuccess = 'Se actualizo el modulo, correctamente';
    case updateModulFail = 'No se pudo actualizar el modulo, verifique los valores ingresados';
    case updateModulException = 'Intente modificar el modulo mas tarde';

    case deleteModulSuccess = 'Se elimino el modulo correctamente';
    case deleteModulFail = 'No se pudo eliminar el modulo, verifique el id';
    case deleteModulException = 'No se puede eliminar el modulo';

}
