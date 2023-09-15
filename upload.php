<?php
// Ruta de almacenamiento para los archivos PDF
$targetDir = "pdfs/";

// Verificar si se ha seleccionado un archivo PDF
if (isset($_FILES["pdfFile"]) && $_FILES["pdfFile"]["error"] == 0) {
    $targetFile = $targetDir . basename($_FILES["pdfFile"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Verificar si el archivo es un PDF válido
    if ($fileType == "pdf") {
        // Recupera el título seleccionado del formulario
        $title = $_POST["selectTitle"];

        // Mover el archivo PDF a la carpeta de almacenamiento
        if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $targetFile)) {
            // Guardar el nombre del archivo y el título en la base de datos
            include 'display.php';
            savePDF(basename($_FILES["pdfFile"]["name"]), $title);
            header("Location: admin.php");
            exit;
        } else {
            echo "Hubo un error al subir el archivo.";
        }
    } else {
        echo "El archivo debe ser un PDF.";
    }
}
?>
