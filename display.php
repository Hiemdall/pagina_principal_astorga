<?php
include("./procesos/conexion.php");


// Función para guardar el nombre del archivo en la base de datos
//function savePDF($fileName, $title) {
    function savePDF($fileName, $title, $date, $user_table, $current_time) {
        global $servername, $username, $password, $dbname;
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }
        // Configurar la codificación de caracteres a UTF-8
        $conn->set_charset("utf8mb4");
        //$sql = "INSERT INTO pdfs (filename, title) VALUES ('$fileName', '$title')";
        $sql = "INSERT INTO pdfs (filename, title, fecha, username, hora) VALUES ('$fileName', '$title', '$date', '$user_table' , '$current_time')";
        $conn->query($sql);
        $conn->close();
    }

// Función para mostrar los enlaces a los archivos PDF para el Título 1
function displayPDFsTitulo1() {
    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    $conn->set_charset("utf8mb4");
    $sql = "SELECT filename FROM pdfs WHERE title = 'Acuerdo de Reorganización'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $fileName = utf8_encode($row["filename"]);
            echo "<div class='my-2' style='display: flex; align-items: center;'>";
            echo "<i class='bx bxs-file-pdf' style='color:#309F54; font-size: 1.7rem;'></i>";
            echo "<a href='pdfs/$fileName' download style='font-size: 18px;'>  $fileName</a>";
            echo "</div>";
        }
    } else {
        echo "No se encontraron archivos PDF para Acuerdo de Reorganización.";
    }
    $conn->close();
}


// Función para mostrar los enlaces a los archivos PDF para el Título 2
function displayPDFsTitulo2() {
    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    $conn->set_charset("utf8mb4");
    $sql = "SELECT filename FROM pdfs WHERE title = 'Auto Admite Reorganización'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $fileName = utf8_encode($row["filename"]);
            echo "<div class='my-2' style='display: flex; align-items: center;'>";
            echo "<i class='bx bxs-file-pdf' style='color:#309F54; font-size: 24px;'></i>";
            echo "<a href='pdfs/$fileName' download style='font-size: 18px;'>  $fileName</a>";
            echo "</div>";
        }
    } else {
        echo "No se encontraron archivos PDF para Auto Admite Reorganización.";
    }
    $conn->close();
}

function getAvailableYearsForTitle($title) {
    global $servername, $username, $password, $dbname;
    $years = array();
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    
    $sql = "SELECT DISTINCT YEAR(fecha) AS year FROM pdfs WHERE title = '$title' ORDER BY year DESC";
    $yearResult = $conn->query($sql);
    
    if ($yearResult->num_rows > 0) {
        while ($yearRow = $yearResult->fetch_assoc()) {
            $years[] = $yearRow["year"];
        }
    }
    
    $conn->close();
    
    return $years;
}

function displayPDFsTitulo3ByYear($year) {
    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    
    echo "<h5 class=''>Año $year</h5>"; // Agrega la clase 'display-4' de Bootstrap para encabezados grandes

    $pdfSql = "SELECT filename FROM pdfs WHERE title = 'Promotor' AND YEAR(fecha) = '$year'";
    $pdfResult = $conn->query($pdfSql);
    
    if ($pdfResult->num_rows > 0) {
        while ($row = $pdfResult->fetch_assoc()) {
            $fileName = $row["filename"];
            echo "<div class='my-2' style='display: flex; align-items: center;'>";
            echo "<i class='bx bxs-file-pdf' style='color:#309F54; font-size: 24px;'></i>";
            echo "<a href='pdfs/$fileName' download style='font-size: 18px;'>  $fileName</a>";
            echo "</div>";
        }
    } else {
        echo "<p class='alert alert-warning'>No se encontraron archivos PDF para Informes del Promotor en el año $year.</p>"; // Agrega la clase 'alert alert-warning' de Bootstrap para mensajes de advertencia
    }
    
    $conn->close();
}


// Función para mostrar los enlaces a los archivos PDF para el Título 4
function displayPDFsTitulo4() {
    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    $sql = "SELECT filename FROM pdfs WHERE title = 'Superintendencia de Sociedades'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $fileName =  ($row['filename']);
            echo "<div class='my-2' style='display: flex; align-items: center;'>";
            echo "<i class='bx bxs-file-pdf' style='color:#309F54; font-size: 24px;'></i>";
            echo "<a href='pdfs/$fileName' download style='font-size: 18px;'>  $fileName</a>";
            echo "</div>";
        }
    } else {
        echo "No se encontraron archivos PDF para Informes a la Superintendencia de Sociedades.";
    }
    $conn->close();
}

// Función para mostrar los enlaces a los archivos PDF para el Título 5
function displayPDFsTitulo5() {
    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    $sql = "SELECT filename FROM pdfs WHERE title = 'Estados Financieros'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $fileName =  ($row['filename']);
            echo "<div class='my-2' style='display: flex; align-items: center;'>";
            echo "<i class='bx bxs-file-pdf' style='color:#309F54; font-size: 24px;'></i>";
            echo "<a href='pdfs/$fileName' download style='font-size: 18px;'>  $fileName</a>";
            echo "</div>";
        }
    } else {
        echo "No se encontraron archivos PDF para Estados Financieros.";
    }
    $conn->close();
}


// Visor de archivo con el boton de eliminar
// Función para mostrar los enlaces a los archivos PDF para el Título 1 con opción Eliminar
function displayPDFsTitulo_1_eliminar() {
    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    $conn->set_charset("utf8mb4");
    $sql = "SELECT filename FROM pdfs WHERE title = 'Acuerdo de Reorganización'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $fileName = $row["filename"];
            echo "<li class='completed'>";
            echo "<div class='task-title'>";
            echo "<i class='bx bxs-file-pdf' style='color:#309F54;'></i>";
            echo "<a href='pdfs/$fileName' download> $fileName</a>"; 
            echo "</div>";
            echo "<a class='bx bx-trash' style='color: red; cursor: pointer;' onclick=\"confirmDelete('$fileName')\"></a>";
            echo "</li>";
        }
    } else {
        echo "No se encontraron archivos PDF para Auto Admite Reorganización.";
    }
    $conn->close();
}



// Función para mostrar los enlaces a los archivos PDF para el Título 2 con opción Eliminar
function displayPDFsTitulo_2_eliminar() {
    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    $conn->set_charset("utf8mb4");
    $sql = "SELECT filename FROM pdfs WHERE title = 'Auto Admite Reorganización'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $fileName = utf8_encode($row["filename"]);
            echo "<li class='completed'>";
            echo "<div class='task-title'>";
            echo "<i class='bx bxs-file-pdf' style='color:#309F54;'></i>";
            echo "<a href='pdfs/$fileName' download> $fileName</a>"; 
            echo "</div>";
            echo "<a class='bx bx-trash' style='color: red; cursor: pointer;' onclick=\"confirmDelete('$fileName')\"></a>";
            echo "</li>";
        }
    } else {
        echo "No se encontraron archivos PDF para Auto Admite Reorganización.";
    }
    $conn->close();
}


// Función para mostrar los enlaces a los archivos PDF para el Título 3 con opción Eliminar
function displayPDFsTitulo_3_eliminar() {
    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    $sql = "SELECT filename FROM pdfs WHERE title = 'Promotor'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $fileName =  ($row['filename']);
            echo "<li class='completed'>";
            echo "<div class='task-title'>";
            echo "<i class='bx bxs-file-pdf' style='color:#309F54;'></i>";
            echo "<a href='pdfs/$fileName' download> $fileName</a>"; 
            echo "</div>";
            echo "<a class='bx bx-trash' style='color: red; cursor: pointer;' onclick=\"confirmDelete('$fileName')\"></a>";
            echo "</li>";
        }
    } else {
        echo "No se encontraron archivos PDF para Promotor.";
    }
    $conn->close();
}


// Función para mostrar los enlaces a los archivos PDF para el Título 4 con opción Eliminar
function displayPDFsTitulo_4_eliminar() {
    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    $sql = "SELECT filename FROM pdfs WHERE title = 'Superintendencia de Sociedades'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $fileName =  ($row['filename']);
            echo "<li class='completed'>";
            echo "<div class='task-title'>";
            echo "<i class='bx bxs-file-pdf' style='color:#309F54;'></i>";
              echo "<a href='pdfs/$fileName' download> $fileName</a>"; 
            echo "</div>";
            echo "<a class='bx bx-trash' style='color: red; cursor: pointer;' onclick=\"confirmDelete('$fileName')\"></a>";
            echo "</li>";
        }
    } else {
        echo "No se encontraron archivos PDF para Superintendencia de Sociedades.";
    }
    $conn->close();
}


// Función para mostrar los enlaces a los archivos PDF para el Título 5 con opción Eliminar
function displayPDFsTitulo_5_eliminar() {
    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    $sql = "SELECT filename FROM pdfs WHERE title = 'Estados Financieros'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $fileName =  ($row['filename']);
            echo "<li class='completed'>";
            echo "<div class='task-title'>";
            echo "<i class='bx bxs-file-pdf' style='color:#309F54;'></i>";
              echo "<a href='pdfs/$fileName' download> $fileName</a>"; 
            echo "</div>";
            echo "<a class='bx bx-trash' style='color: red; cursor: pointer;' onclick=\"confirmDelete('$fileName')\"></a>";
            echo "</li>";
        }
    } else {
        echo "No se encontraron archivos PDF para Estados Financieros.";
    }
    $conn->close();
}

?>
