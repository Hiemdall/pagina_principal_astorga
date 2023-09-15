<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "archivos";

// Obtener el nombre del archivo a eliminar
$fileName = $_GET["file"];

// Eliminar el archivo de la carpeta "pdfs"
$filePath = "pdfs/" . $fileName;
if (file_exists($filePath)) {
    unlink($filePath);
}

// Eliminar el registro del archivo de la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
$sql = "DELETE FROM pdfs WHERE filename = '$fileName'";
$conn->query($sql);
$conn->close();

// Redirigir a la página principal
header("Location: admin.php");
exit;
?>
