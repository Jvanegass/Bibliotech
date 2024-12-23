<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/styles.css">
    <title>Agregar Libro</title>
</head>
<body>
    <div class="container">
        <h1>Agregar Libro</h1>
        <form action="../src/guardar_libro.php" method="POST">
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" required>
            
            <label for="autor">Autor:</label>
            <input type="text" id="autor" name="autor" required>
            
            <label for="categoria">Categoría:</label>
            <select id="categoria" name="categoria" required>
                <option value="Ficción">Ficción</option>
                <option value="Ciencia">Ciencia</option>
                <option value="Historia">Historia</option>
                <!-- Más categorías -->
            </select>
            
            <button type="submit">Guardar</button>
        </form>
    </div>
</body>
</html>
