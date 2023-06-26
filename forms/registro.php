<?php

function registrarUsuario($nombres, $apellidos, $correo, $contrasena, $fechaNacimiento, $rol) {
    // Realizar las operaciones de registro aquí, como guardar los datos en la base de datos
    
    // Ejemplo: Guardar los datos en un archivo de texto
    $registro = "Nombres: $nombres\nApellidos: $apellidos\nCorreo: $correo\nContraseña: $contrasena\nFecha de Nacimiento: $fechaNacimiento\nRol: $rol\n\n";
    file_put_contents("usuarios.txt", $registro, FILE_APPEND);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $correo = $_POST["username"];
    $contrasena = $_POST["password"];
    $fechaNacimiento = $_POST["trip-start"];
    $rol = $_POST["rol"];

    // Registrar al usuario
    registrarUsuario($nombres, $apellidos, $correo, $contrasena, $fechaNacimiento, $rol);

    // Mostrar un mensaje de éxito
    echo "Registro exitoso. Gracias por registrarte!";
}

?>