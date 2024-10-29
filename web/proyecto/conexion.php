<?php

$host = "db";
$dbname = "docker_db";
$username = "angel";
$password = "1234";

try {
    
    $conexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['nombre'], $_POST['apellido'], $_POST['telefono'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];

        $stmt = $conexion->prepare("INSERT INTO contacto (nombre, apellido, telefono) VALUES (:nombre, :apellido, :telefono)");
        
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':telefono', $telefono);

        $stmt->execute();

        echo "Contacto guardado correctamente.";
    } else {
        echo "Por favor, complete todos los campos del formulario.";
    }
} catch (PDOException $e) {
    echo "Error de conexión o inserción: " . $e->getMessage();
}
?>
