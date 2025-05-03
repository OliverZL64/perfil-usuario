<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
$nombre = htmlspecialchars($_POST["nombre"]); 
$edad = intval($_POST["edad"]); 
$correo = htmlspecialchars($_POST["correo"]); 
$experiencia = htmlspecialchars($_POST["experiencia"]); 

echo "<h1>Perfil de Usuario</h1>"; 
echo "<p><strong>Nombre:</strong> $nombre</p>"; 
echo "<p><strong>Edad:</strong> $edad años</p>"; 
echo "<p><strong>Correo:</strong> $correo</p>"; 
echo "<p><strong>Nivel de Experiencia:</strong> $experiencia</p>"; 
} else { 
echo "<h1>Error</h1><p>No se enviaron datos.</p>"; 
} 
?>
