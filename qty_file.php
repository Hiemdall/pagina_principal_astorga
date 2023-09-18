<?php

//ALTER TABLE mi_tabla
//MODIFY COLUMN mi_campo INT DEFAULT 1;

// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "archivos";

// Función para obtener el total de qty por title
function getTotalQtyByTitle($conn) {
    $sql = "SELECT title, SUM(qty) as total_qty FROM pdfs GROUP BY title";
    $result = $conn->query($sql);
    
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    return $data;
}

// Función para obtener los enlaces a los archivos PDF para un título dado
function getPDFsByTitle($conn, $title) {
    $sql = "SELECT filename FROM pdfs WHERE title = '$title'";
    $result = $conn->query($sql);
    
    $pdfs = array();
    while ($row = $result->fetch_assoc()) {
        $pdfs[] = $row["filename"];
    }

    return $pdfs;
}

// Función para mostrar la suma total de qty de todos los documentos
function displayTotalQty($conn) {
    $sql = "SELECT SUM(qty) as total_qty FROM pdfs";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $total_qty = $row["total_qty"];
        echo "<div class='total-container'>";
        echo "<p class='total-number fw-bold fs-4'>Total de Archivos: $total_qty</p>"; // Agregar clases de Bootstrap 5
        echo "</div>";
    } else {
        echo "<div class='alert alert-warning' role='alert'>No se encontraron documentos.</div>"; // Agregar una alerta de Bootstrap 5
    }
}


// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// ... Tu código PHP existente ...

// Obtener y mostrar el total de qty por title
$totalQtyData = getTotalQtyByTitle($conn);
if (!empty($totalQtyData)) {
    foreach ($totalQtyData as $row) {
        $titulo = $row["title"];
        $total_qty = $row["total_qty"];
        echo "<li class='mb-3 d-flex justify-content-between align-items-center'>";
        echo "<a class='text-dark' href='#'><i class='fa fa-angle-right text-primary mr-2'></i>$titulo</a>";
        echo "<span class='badge badge-primary badge-pill'>$total_qty</span>";
        echo "</li>";

        // Obtener y mostrar los enlaces a los archivos PDF para este título
        $pdfs = getPDFsByTitle($conn, $titulo);
        if (!empty($pdfs)) {
            foreach ($pdfs as $fileName) {
                echo "<div class='file-container'>";
                //echo "<a href='pdfs/$fileName' download>$fileName</a>";
                echo "</div>";
            }
        } else {
            echo "No se encontraron archivos PDF para $titulo.";
        }
    }
} else {
    echo "No se encontraron archivos PDF.";
}

// Mostrar la suma total de qty de todos los documentos
$total_qty = displayTotalQty($conn);

// Cerrar la conexión a la base de datos
$conn->close();
?>
