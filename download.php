<?php
// Ruta de almacenamiento de los archivos PDF
$targetDir = "pdfs/";

// Verificar si se ha especificado el archivo a descargar
if (isset($_GET["file"])) {
    $fileName = $_GET["file"];
    $filePath = $targetDir . $fileName;

    // Verificar si el archivo existe
    if (file_exists($filePath)) {
        // Descargar el archivo
        header("Content-Type: application/pdf");
        header("Content-Disposition: attachment; filename=$fileName");
        readfile($filePath);
        exit;
    } else {
        echo "El archivo no existe.";
    }
}
?>
