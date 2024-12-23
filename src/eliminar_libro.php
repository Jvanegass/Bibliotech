<?php
require_once 'Libro.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $libro = new Libro();
    $libro->eliminarLibro($id);
    header('Location: ../public/index.php');
}
?>
