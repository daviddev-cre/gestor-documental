<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ComunicadoEmail extends Mailable
{
    public $asunto;
    public $mensaje;
    public $nombre;

    public function __construct($asunto, $mensaje, $nombre)
    {
        $this->asunto = $asunto;
        $this->mensaje = $mensaje;
        $this->nombre = $nombre;
    }

    public function build()
    {
        return $this->view('Mail.comunicado') // Aquí se indica la vista que usaremos para el correo
                    ->with([
                        'asunto' => $this->asunto,
                        'mensaje' => $this->mensaje,
                        'nombre' => $this->nombre,
                    ])
                    ->subject($this->asunto);
    }
}
