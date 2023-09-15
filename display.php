<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "archivos";

// Función para guardar el nombre del archivo en la base de datos
function savePDF($fileName, $title) {
    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    $sql = "INSERT INTO pdfs (filename, title) VALUES ('$fileName', '$title')";
    $conn->query($sql);
    $conn->close();
}

// Función para mostrar los enlaces a los archivos PDF para el Título 2
function displayPDFsTitulo1() {
    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    $sql = "SELECT filename FROM pdfs WHERE title = 'Acuerdo de Reorganización'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $fileName = $row["filename"];
            //echo "<a href='download.php?file=$fileName'>$fileName</a><br>";
            
            echo "<div class='file-container'>";
            echo "<img src='hoja.png' alt='Icono de papel' class='pdf-icon' width='30' height='30'>"; // Cambia 'hoja.png' por la ruta correcta a tu ícono
            echo "<a class='ml-5' href='pdfs/$fileName' download>  $fileName</a>";
            echo "<button class='btn btn-primary py-1 ml-5' onclick=\"window.location.href='download.php?file=$fileName'\">Descargar</button>";
            //echo "<button onclick=\"confirmDelete('$fileName')\">Eliminar</button>";
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
    $sql = "SELECT filename FROM pdfs WHERE title = 'Auto Admite Reorganización'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $fileName = $row["filename"];
            echo "<div class='file-container'>";

            echo "<img src='hoja.png' alt='Icono de papel' class='pdf-icon' width='30' height='30'>"; // Cambia 'hoja.png' por la ruta correcta a tu ícono
           
            echo "<a href='pdfs/$fileName' download> $fileName --> </a>";

            echo "<button class='btn btn-primary py-1' onclick=\"window.location.href='download.php?file=$fileName'\">Descargar</button>";
            //echo "<button onclick=\"confirmDelete('$fileName')\">Eliminar</button>";
            echo "</div>";
        }
    } else {
        echo "No se encontraron archivos PDF para Auto Admite Reorganización.";
    }
    $conn->close();
}


// Función para mostrar los enlaces a los archivos PDF para el Título 3
function displayPDFsTitulo3() {
    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    $sql = "SELECT filename FROM pdfs WHERE title = 'Promotor'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $fileName = $row["filename"];
            echo "<div class='file-container'>";
            echo "<img src='hoja.png' alt='Icono de papel' class='pdf-icon' width='30' height='30'>"; // Cambia 'hoja.png' por la ruta correcta a tu ícono
            echo "<a href='pdfs/$fileName' download>  $fileName</a>";
            echo "<button class='btn btn-primary py-1' onclick=\"window.location.href='download.php?file=$fileName'\">Descargar</button>";
            //echo "<button onclick=\"confirmDelete('$fileName')\">Eliminar</button>";
            echo "</div>";
        }
    } else {
        echo "No se encontraron archivos PDF para Informes del Promotor.";
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
            $fileName = $row["filename"];
            echo "<div class='file-container'>";
            echo "<img src='hoja.png' alt='Icono de papel' class='pdf-icon' width='30' height='30'>"; // Cambia 'hoja.png' por la ruta correcta a tu ícono
            echo "<a href='pdfs/$fileName' download>  $fileName</a>";
            echo "<button class='btn btn-primary py-1' onclick=\"window.location.href='download.php?file=$fileName'\">Descargar</button>";
            // echo "<button onclick=\"confirmDelete('$fileName')\">Eliminar</button>";
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
            $fileName = $row["filename"];
            echo "<div class='file-container'>";
            echo "<img src='hoja.png' alt='Icono de papel' class='pdf-icon' width='30' height='30'>"; // Cambia 'hoja.png' por la ruta correcta a tu ícono
            echo "<a href='pdfs/$fileName' download>  $fileName</a>";
            echo "<button class='btn btn-primary py-1' onclick=\"window.location.href='download.php?file=$fileName'\">Descargar</button>";
            //echo "<button onclick=\"confirmDelete('$fileName')\">Eliminar</button>";
            echo "</div>";
        }
    } else {
        echo "No se encontraron archivos PDF para Estados Financieros.";
    }
    $conn->close();
}


// Visor de archivo con el boton de eliminar
// Función para mostrar los enlaces a los archivos PDF para el Título 1 con opcion Eliminar
function displayPDFsTitulo_1_eliminar() {
    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    $sql = "SELECT filename FROM pdfs WHERE title = 'Acuerdo de Reorganización'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $fileName = $row["filename"];
            echo "<div class='file-container'>";
            echo "<img src='hoja.png' alt='Icono de papel' class='pdf-icon' width='30' height='30'>"; // Cambia 'hoja.png' por la ruta correcta a tu ícono
            echo "<a href='pdfs/$fileName' download>  $fileName</a>";
            echo "<button onclick=\"window.location.href='download.php?file=$fileName'\">Descargar</button>";
            echo "<button class='btn btn-primary py-1' onclick=\"confirmDelete('$fileName')\">Eliminar</button>";
            echo "</div>";
        }
    } else {
        echo "No se encontraron archivos PDF para Acuerdo de Reorganización.";
    }
    $conn->close();
}


// Función para mostrar los enlaces a los archivos PDF para el Título 2 con opcion Eliminar
function displayPDFsTitulo_2_eliminar() {
    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    $sql = "SELECT filename FROM pdfs WHERE title = 'Auto Admite Reorganización'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $fileName = $row["filename"];
            echo "<div class='file-container'>";
            echo "<img src='hoja.png' alt='Icono de papel' class='pdf-icon' width='30' height='30'>"; // Cambia 'hoja.png' por la ruta correcta a tu ícono
            echo "<a href='pdfs/$fileName' download>  $fileName</a>";
            echo "<button onclick=\"window.location.href='download.php?file=$fileName'\">Descargar</button>";
            echo "<button class='btn btn-primary py-1' onclick=\"confirmDelete('$fileName')\">Eliminar</button>";
            echo "</div>";
        }
    } else {
        echo "No se encontraron archivos PDF para Auto Admite Reorganización.";
    }
    $conn->close();
}

// Función para mostrar los enlaces a los archivos PDF para el Título 3 con opcion Eliminar
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
            $fileName = $row["filename"];
            echo "<div class='file-container'>";
            echo "<img src='hoja.png' alt='Icono de papel' class='pdf-icon' width='30' height='30'>"; // Cambia 'hoja.png' por la ruta correcta a tu ícono
            echo "<a href='pdfs/$fileName' download>  $fileName</a>";
            echo "<button onclick=\"window.location.href='download.php?file=$fileName'\">Descargar</button>";
            echo "<button class='btn btn-primary py-1' onclick=\"confirmDelete('$fileName')\">Eliminar</button>";
            echo "</div>";
        }
    } else {
        echo "No se encontraron archivos PDF para Informes del Promotor.";
    }
    $conn->close();
}

// Función para mostrar los enlaces a los archivos PDF para el Título 4 con opcion Eliminar
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
            $fileName = $row["filename"];
            echo "<div class='file-container'>";
            echo "<img src='hoja.png' alt='Icono de papel' class='pdf-icon' width='30' height='30'>"; // Cambia 'hoja.png' por la ruta correcta a tu ícono
            echo "<a href='pdfs/$fileName' download>  $fileName</a>";
            echo "<button onclick=\"window.location.href='download.php?file=$fileName'\">Descargar</button>";
            echo "<button class='btn btn-primary py-1' onclick=\"confirmDelete('$fileName')\">Eliminar</button>";
            echo "</div>";
        }
    } else {
        echo "No se encontraron archivos PDF para Informes a la Superintendencia de Sociedades.";
    }
    $conn->close();
}

// Función para mostrar los enlaces a los archivos PDF para el Título 5 con opcion Eliminar
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
            $fileName = $row["filename"];
            echo "<div class='file-container'>";
            echo "<img src='hoja.png' alt='Icono de papel' class='pdf-icon' width='30' height='30'>"; // Cambia 'hoja.png' por la ruta correcta a tu ícono
            echo "<a href='pdfs/$fileName' download>  $fileName</a>";
            echo "<button onclick=\"window.location.href='download.php?file=$fileName'\">Descargar</button>";
            echo "<button class='btn btn-primary py-1' onclick=\"confirmDelete('$fileName')\">Eliminar</button>";
            echo "</div>";
        }
    } else {
        echo "No se encontraron archivos PDF para Estados Financieros.";
    }
    $conn->close();
}
?>
