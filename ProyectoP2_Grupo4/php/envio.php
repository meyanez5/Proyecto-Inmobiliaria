<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos enviados por el formulario
    $email_username = $_POST["email_username"];
    $password = $_POST["password"];

    // Verificar las credenciales (usuario: root, contraseña: rootroot)
    if ($email_username == "root" && $password == "rootroot") {
        // Las credenciales son válidas, redirigir al usuario a la página de inicio o a otro lugar deseado
        header("Location: inicio.php");
        exit();
    } else {
        // Las credenciales son inválidas, mostrar un mensaje de error o realizar alguna otra acción
        echo "Credenciales inválidas. Por favor, inténtalo de nuevo.";
    }
}
?>