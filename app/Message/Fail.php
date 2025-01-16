<?php

namespace App\Message;

enum Fail : string
{
    case failUserRegister = "No se pudo crear el usuario ";
    case failReviewRegister = "No se pudo crear el revisor";
    case failUserLogin = "Email o password incorrecto";
    case failModelException = "Datos incorrectos";
    case failAuthorizationLogin = "Contacte al administrador del sitio";

    case failModelUpdateUser = 'Verifique los valores ingresados';
    case failExceptionUpdateUser = 'No se pudo actualizar el usuario';
}
