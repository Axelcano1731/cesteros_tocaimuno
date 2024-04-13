<?php
require_once ('../config/conexion.php');
require_once("../models/Inicio.php");

class UsuarioModel extends Conectar {
    public function guardarCorreo($correo) {
        $conectar = parent::Conexion();

        try {
            $sql = "INSERT INTO usuarios (usu_correo) VALUES (?)";
            $stmt = $conectar->prepare($sql);
            $stmt->bind_param('s', $correo);
            
            $stmt->execute();
            return true;
        } catch (Exception $e) {

            return array('status' => 'error', 'message' => 'Error al guardar el correo: ' . $e->getMessage());
        }
    }
}

?>

