<?php
require_once '../config/config.php';

class Prestamo {
    private $db;

    public function __construct() {
        $conexion = new Conexion();
        $this->db = $conexion->conectar();
    }

    public function registrarPrestamo($idLibro, $usuario) {
        $sql = "INSERT INTO prestamos (id_libro, usuario, fecha_prestamo) VALUES (:id_libro, :usuario, NOW())";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id_libro', $idLibro);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->execute();

        // Actualizar el estado del libro
        $sql = "UPDATE libros SET estado = 'prestado' WHERE id = :id_libro";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id_libro', $idLibro);
        return $stmt->execute();
    }
}
?>
