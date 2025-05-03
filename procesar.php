<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $experiencia = $_POST['experiencia'];

    echo "<h1>Perfil creado exitosamente</h1>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Edad:</strong> $edad</p>";
    echo "<p><strong>Correo Electrónico:</strong> $email</p>";
    echo "<p><strong>Teléfono:</strong> $telefono</p>";
    echo "<p><strong>Fecha de Nacimiento:</strong> $fecha_nacimiento</p>";
    echo "<p><strong>Experiencia:</strong> $experiencia</p>";
} else {
    echo "No se recibieron datos.";
}
?>
