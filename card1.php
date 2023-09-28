<?php
// Configuración de la base de datos
include("./procesos/conexion.php");

// Función para obtener el último documento subido por título
function getLastPDFByTitle($conn, $title) {
    $sql = "SELECT * FROM pdfs WHERE title = '$title' ORDER BY fecha DESC, hora DESC LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row;
    } else {
        return null; // No se encontraron documentos para este título.
    }
}

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");
// Lista de 5 títulos
$titulos = array("Acuerdo de Reorganización", "Auto Admite Reorganización", "Promotor", "Superintendencia de Sociedades", "Estados Financieros");

// Envolver todas las tarjetas en un contenedor

foreach ($titulos as $titulo) {
    echo "<div class='card mb-3'>";
    echo "<div class='card-body'>";
    echo "<h6 class='card-title text-center'><strong>$titulo</strong></h6>";

    // Obtener y mostrar el último documento subido para este título
    $lastPDF = getLastPDFByTitle($conn, $titulo);
    if ($lastPDF !== null) {
        echo "<div class='card'>";
        echo "<div class='card-body text-center'>";
        echo "<p class='card-text text-center'>Último Archivo Subido:</p>";
        echo "<a href='pdfs/{$lastPDF['filename']}' download class='btn btn-primary text-center'>";
        echo "Descargar";
        echo "</a>";
        echo "<br>";

        echo "</div>";
        echo "<div class='d-flex justify-content-between w-100 px-2'>";
        echo "<p class='card-text text-muted mb-2'>";
        echo "<i class='fas fa-user'></i>  {$lastPDF['username']} ";
        echo "</p>";
        echo "<p class='card-text text-muted mb-2'>";
        echo "<i class='fas fa-calendar'></i> {$lastPDF['fecha']}";
        echo "</p>";
        echo "</div>";
        echo "</div>";
    } else {
        echo "<p class='card-text'>No se encontraron archivos PDF para $titulo.</p>";
    }

    echo "</div>";
    echo "</div>";
}



// Cerrar el contenedor de tarjetas
echo "</div>";

// Cerrar la conexión a la base de datos
$conn->close();
?>
