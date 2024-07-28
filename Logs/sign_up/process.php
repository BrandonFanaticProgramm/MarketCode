
<?php

$servidor = "localhost:3306";
$usuario = "root";
$contraseña = "123456";
$baseDatos = "registromc";

$conexion = new mysqli($servidor,$usuario,$contraseña,$baseDatos);

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
} else {
    echo "<h1>Conexión exitosa</h1>";
}

if(isset($_POST["boton_registro"])) {

    $nombre = $_POST["Nombre_Usuario"];
    $apellido = $_POST["Apellido_Usuario"];
    $email = $_POST["Email_Usuario"];
    $contraseña = $_POST["Contraseña_Usuario1"];
    $contraseña_confirmar = $_POST["Contraseña_Usuario2"];

    $insertarDatos = $conexion->prepare("INSERT INTO usuarios(Nombre_Usuario,Apellido_Usuario,Email_Usuario,Contraseña_Usuario1,Contraseña_Usuario2) VALUES ('$nombre','$apellido',$email,$contraseña,$contraseña_confirmar)");

}

?> 