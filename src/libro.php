<?php
require_once '../config/config.php';

class Libro {
    private $db;

    public function __construct() {
        $conexion = new Conexion();
        $this->db = $conexion->conectar();
    }

    public function agregarLibro($titulo, $autor, $categoria) {
        $sql = "INSERT INTO libros (titulo, autor, categoria, estado) VALUES (:titulo, :autor, :categoria, 'disponible')";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':autor', $autor);
        $stmt->bindParam(':categoria', $categoria);
        return $stmt->execute();
    }

    public function listarLibros() {
        $sql = "SELECT * FROM libros";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function eliminarLibro($id) {
        $sql = "DELETE FROM libros WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function buscarLibros($criterio) {
        $sql = "SELECT * FROM libros WHERE titulo LIKE :criterio OR autor LIKE :criterio OR categoria LIKE :criterio";
        $stmt = $this->db->prepare($sql);
        $criterio = "%$criterio%";
        $stmt->bindParam(':criterio', $criterio);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
