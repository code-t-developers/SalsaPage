<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <p>Salsas Don Diego: Ha recibidio un nuevo correo de {{$contacto->nombre}} </p>
    <p>
        Correo electrónico: {{$contacto->correo}}<br>
        Tema a tratar: {{$contacto->asunto}}<br>
            
    </p>
    <p>
        Mensaje: {{$contacto->mensaje}}
    </p>
    
</ul>
</body>
</html>