<?php
require_once ('../config/conexion.php');
require_once("../models/Inicio.php");

class UsuarioController {
    public function guardarCorreo() {
        if ($_GET['opc'] === 'guardarCorreo' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $jsonData = json_decode(file_get_contents('php://input'), true);
            $correo = filter_var($jsonData['correo'], FILTER_SANITIZE_EMAIL);

            if ($correo) {
                $usuarioModel = new UsuarioModel();
                if ($usuarioModel->guardarCorreo($correo)) {
                    echo json_encode(array('status' => 'success', 'message' => 'Correo guardado correctamente'));
                } else {
                    echo json_encode(array('status' => 'error', 'message' => 'Error al guardar el correo'));
                }
            } else {
                echo json_encode(array('status' => 'error', 'message' => 'Correo electrónico no válido'));
            }
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'Método no permitido o opción incorrecta'));
        }
    }
}

$usuarioController = new UsuarioController();
$usuarioController->guardarCorreo();
?>
