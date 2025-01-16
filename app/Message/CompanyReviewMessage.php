<?php

namespace App\Message;

enum CompanyReviewMessage : string
{
    case createCompanyReviewSucess = 'Se creo la relacion';
    case createCompanyReviewFailModel = 'Verifique los valore ingresados';
    case createCompanyReviewFailException = 'Intente mas tarde';

    case updateCompanyReviewSuccess = 'Se actualizo la relación';
    case updateCompanyReviewFailModel = 'verifique los datos la actualización del formulario';
    case updateCompanyReviewFailException = 'Intente actualizar mas tarde';
}

