<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria</title>
</head>

<body>
    <h1>Listado | Categoria </h1>


    <a href="/categoria/new">Crear</a>
    <table>

        <tr>
            <th>
                Id
            </th>
            <th>
                Título
            </th>
           
            <th>
                Opciones
            </th>
        </tr>
        <?php foreach ($categorias as $key => $c) : ?>
            <tr>
                <td><?= $c['id'] ?></td>
                <td><?= $c['titulo'] ?></td>
c                <td>
                    <a href="/categoria/show/<?= $c['id'] ?>">Show</a>
                    <a href="/categoria/edit/<?= $c['id'] ?>">Edit</a>

                    <form action="/categoria/delete/<?= $c['id'] ?>" method="post">
                        <button type="submit">Delete</button>
                    </form>

                </td>
            </tr>
        <?php endforeach ?>

    </table>
</body>

</html>