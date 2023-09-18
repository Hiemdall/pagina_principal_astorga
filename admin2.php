<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* Personalización del color principal (verde) */
        .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
        }

        /* Personalización del color de texto del botón */
        .btn-primary:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
    </style>
</head>
<body>
     <h1>Subir archivo PDF</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="pdfFile" accept=".pdf">
        <br>
        <label for="selectTitle">Selecciona un título:</label>
        <select name="selectTitle" id="selectTitle">
        <option value="">Selecciona un título</option>
        <option value="acuerdo de Reorganizacion">Acuerdo de Reorganización</option>
        <option value="Auto Admite Reorganización">Auto Admite Reorganización</option>
        <option value="Informes del Promotor">Informes del Promotor</option>
        <option value="Informes a la Superintendencia de Sociedades">Informes a la Superintendencia de Sociedades</option>
        <option value="Estados Financieros">Estados Financieros</option>
        </select>
        <br>
        <!-- Campo de fecha oculto para enviar la fecha actual -->
        <input type="hidden" name="fecha" value="<?php echo date("Y-m-d"); ?>">
        <input type="submit" value="Subir">
    </form>
       <h2>Acuerdo de Reorganización:</h2>
    <?php
         //Mostrar los enlaces a los archivos PDF subidos
         include 'display.php';
         displayPDFsTitulo_1_eliminar()
    ?>
      <h2>Auto Admite Reorganización:</h2>
    <?php
         //Mostrar los enlaces a los archivos PDF subidos
         
         displayPDFsTitulo_2_eliminar();
    ?>

    <h2>Informes del Promotor:</h2>
    <?php
         //Mostrar los enlaces a los archivos PDF subidos
         displayPDFsTitulo_3_eliminar()
         
    ?>

    <h2>Informes a la Superintendencia de Sociedades:</h2>
    <?php
         //Mostrar los enlaces a los archivos PDF subidos
         displayPDFsTitulo_4_eliminar()
         
    ?>

    <h2>Estados Financieros:</h2>
    <?php
         //Mostrar los enlaces a los archivos PDF subidos
         displayPDFsTitulo_5_eliminar()
         
    ?>
    <script src="script.js"></script>

</body>
</html>