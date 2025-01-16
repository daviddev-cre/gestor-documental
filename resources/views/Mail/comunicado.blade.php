<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $asunto }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333333;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #47A1A8;
            padding: 20px;
            text-align: center;
            color: white;
        }
        .header img {
            max-width: 150px;
        }
        .content {
            padding: 20px;
            line-height: 1.6;
        }
        .content p {
            margin: 0 0 10px;

        }
        .signature {
            margin-top: 30px;
        }
        .footer {
            background-color: #f2f2f2;
            text-align: center;
            padding: 10px;
            font-size: 12px;
            color: #666666;
            border-top: 1px solid #dddddd;
        }
        .footer a {
            color: #47A1A8;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Encabezado con logo -->
        <div class="header" style="background-color:#ffffff;">
            <img src="https://c4ff32c718.imgdist.com/pub/bfra/mm5abqut/py4/vmy/khv/HABILITA%20LOGO.png" alt="Logo de Habilita Pro">
        </div>

        <div class="header">
            <h1>{{ $asunto }}</h1>
        </div>

        <!-- Contenido del mensaje -->
        <div class="content">
            <p>Estimado equipo de {{ $nombre }},</p>
            <p>{{ $mensaje }}</p><br><br>
            <p class="signature">Saludos cordiales,</p>
            <p><strong>Carolina Pachón</strong></p>
            <p>Representante legal de Habilita.Pro</p>
        </div>

        <!-- Pie de página -->
        <div class="footer">
            <p>Este correo es un comunicado oficial de Habilita Pro.
            <p>Por favor, no responda a este correo.</p>
            <p> Si necesita asistencia, contáctenos en 
                <a href="mailto:soporte@habilitapro.com">soporte@habilitapro.com</a>.
            </p>
        </div>
    </div>
</body>
</html>
