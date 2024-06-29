<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Contacto</title>
</head>
<body>
    <h1>Nuevo Contacto desde el formulario</h1>
    <p><strong>Nombre:</strong> {{ $contacto->nombre }}</p>
    <p><strong>Email:</strong> {{ $contacto->email }}</p>
    <p><strong>Mensaje:</strong> {{ $contacto->mensaje }}</p>
</body>
</html>
