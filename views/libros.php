<?php
require_once '../src/Libro.php';

$libro = new Libro();
$libros = $libro->listarLibros();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Bibliotech</title>
</head>
<body>
    <div class="container">
        <h1>Gestión de Libros</h1>
        <button onclick="window.location.href='../views/agregar_libro.php'">Agregar Libro</button>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Categoría</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($libros as $libro): ?>
                <tr>
                    <td><?= $libro['id']; ?></td>
                    <td><?= $libro['titulo']; ?></td>
                    <td><?= $libro['autor']; ?></td>
                    <td><?= $libro['categoria']; ?></td>
                    <td><?= $libro['estado']; ?></td>
                    <td>
                        <button onclick="window.location.href='../src/eliminar_libro.php?id=<?= $libro['id']; ?>'">Eliminar</button>
                        <button onclick="window.location.href='../views/editar_libro.php?id=<?= $libro['id']; ?>'">Editar</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
