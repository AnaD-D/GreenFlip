<?php
$servidor = "localhost";
$usuario = "usuario_de_base_de_datos";
$contraseña = "contraseña_de_base_de_datos";
$base_de_datos = "GreenFlip";

$conn = new mysqli($servidor, $usuario, $contraseña, $base_de_datos);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$tipoVoluntario = $_POST['tipoVoluntario'];
$fechaRegistro = date("Y-m-d");

$stmt = $conn->prepare("INSERT INTO Voluntarios (nombre, apellido, correo_electronico, telefono, direccion, fecha_registro, tipo_de_voluntario) 
                        VALUES (?, '', ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $nombre, $email, $telefono, $direccion, $fechaRegistro, $tipoVoluntario);

if ($stmt->execute()) {
    echo "¡Gracias por unirte al cambio! Tu registro ha sido exitoso.";
} else {
    echo "Error al registrar: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
