<?php
// Obtener los datos de conexión del formulario HTML
$host = $_POST['host'];
$username = $_POST[''];
$password = $_POST[''];
$database = $_POST[''];

// Establecer la conexión con MySQL
$conn = mysqli_connect($host, $username, $password, $database);

// Verificar si la conexión fue exitosa
if (!$conn) {
die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Realizar una consulta a la base de datos
$query = "SELECT * FROM tabla";
$result = mysqli_query($conn, $query);

// Verificar si la consulta fue exitosa
if ($result) {
  // Obtener los datos de la consulta
while ($row = mysqli_fetch_assoc($result)) {
    // Hacer algo con los datos obtenidos
    echo "ID: " . $row['id'] . "<br>";
    echo "Nombre: " . $row['nombre'] . "<br>";
}

  // Liberar el resultado de la consulta
mysqli_free_result($result);
} else {
echo "Error al ejecutar la consulta: " . mysqli_error($conn);
}

// Cerrar la conexión con MySQL
mysqli_close($conn);
?>
