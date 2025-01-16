<?php

namespace App\Message;

enum Success : string
{
    case successUserRegister = "Se envio la solucitud de creacion de usuario ";
    case successReviewRegister = "Se envio la solicitud de creacion del revisor";
    case successUserLogin = "Bienvenido";
    case updateUserSuccess = 'Se actualizo el usuario';
        
}
