<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar | Pelicula</title>
</head>
<body>
    <form action="/pelicula/update/<?= $pelicula['id'] ?>" method="post">
        <?= view('dashboard/pelicula/_form',['op'=>'Actualizar']) ?>
    </form>
</body>
</html>