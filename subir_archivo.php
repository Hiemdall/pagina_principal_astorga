<?php
        session_start(); // Iniciar la sesión
        
        // Obtener los valores de la sesión
        $username = $_SESSION['username'];
        $access_level = $_SESSION['access_level'];
        $email = $_SESSION['email'];
        $archivo = $_SESSION['archivo'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/style.css">
    
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Telugu:wght@500&display=swap" rel="stylesheet">
    
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    
        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
        

    
    <title>Subir archivo PDF</title>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
    <a href="login.php" class="navbar-brand mx-2">
        <h2 class="m-0 text-primary">
            <img src="img/logo de astorga.png" alt="logo astorga" class="logo-img">
            <span class="text-dark" style="font-family: sans-serif;">STORGA</span>
        </h2>
    </a>
    <ul class="side-menu" style="height: 70vh;">
    <li><a href="admin.php"><i class='bx bx-message-square-dots'></i>Intranet</a></li>
    <li class="active"><a href="subir_archivo.php"><i class='bx bx-analyse'></i>Subir archivo PDF</a></li>
    </ul>
    <ul class="side-menu" style="height: 20vh;">
        <li>
        <a href="index.php" class="logout">
                <i class='bx bx-log-out-circle'></i>
                Logout
            </a>
        </li>
    </ul>
</div>

    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <nav>
        <i class='bx bx-menu' id="menu-icon"></i>
        <form action="#">
            <div class="form-input">
                <!-- Agrega aquí los campos del formulario si es necesario -->
            </div>
        </form>
        <div class="profile">
            <div class="img">
                <?php echo "<img src='img/$archivo' alt='Imagen de usuario'>"; ?>
            </div>
            <div class="usuario">
                <?php echo $username; ?>
            </div>
        </div>
    </nav>
        <!-- End of Navbar -->

        <!-- End of Navbar -->

        <main>

            <div class="bottom-data">
                <div class="orders">
                    <div class="header">
                        <i class='bx bx-receipt'></i>
                        <h3>Subir archivo PDF</h3>
                    </div>
                    <table>
<!-- Formulario de Subida de Archivos -->

<form action="upload.php" method="POST" enctype="multipart/form-data" novalidate="novalidate">
    <div class="mb-3">
        <label for="pdfFile" class="form-label">Selecciona un archivo PDF:</label>
        <input type="file" class="form-control" id="pdfFile" name="pdfFile" accept=".pdf" required>
        <small class="form-text text-muted">Por favor, elige un archivo PDF (tamaño máximo: 10MB).</small>
    </div>
    <div class="mb-3">
        <label for="selectTitle" class="form-label">Selecciona un título:</label>
        <select class="form-select" id="selectTitle" name="selectTitle" required>
            <option value="">Selecciona un título</option>
            <option value="Acuerdo de Reorganización">Acuerdo de Reorganización</option>
            <option value="Auto Admite Reorganización">Auto Admite Reorganización</option>
            <option value="Promotor">Promotor</option>
            <option value="Superintendencia de Sociedades">Superintendencia de Sociedades</option>
            <option value="Estados Financieros">Estados Financieros</option>
        </select>
    </div>
    <!-- Campo de fecha oculto para enviar la fecha actual -->
    <input type="hidden" name="fecha" value="<?php echo date("Y-m-d"); ?>">
    <input type="hidden" name="current_time" id="current_time">
    <input type="hidden" name="user_table" value="<?php echo $username; ?>">  
    <div class="text-center">
        <button class="btn btn-primary px-4" type="submit" id="uploadButton">Subir PDF</button>
    </div>
</form>
                    </table>
                </div>

                <!-- Reminders -->
                <div class="reminders">
                    <div class="header">
                        <i class='bx bx-note'></i>
                        <h3>Archivos Subidos</h3>
                    </div>
                    <ul class="task-list">
                    <h5>Acuerdo de Reorganización:</h2>
    <?php
         //Mostrar los enlaces a los archivos PDF subidos
         include 'display.php';
         displayPDFsTitulo_1_eliminar()
    ?>
      <h5>Auto Admite Reorganización:</h2>
    <?php
         //Mostrar los enlaces a los archivos PDF subidos
         
         displayPDFsTitulo_2_eliminar();
    ?>

    <h5>Superintendencia de Sociedades:</h2>
    <?php
         //Mostrar los enlaces a los archivos PDF subidos
         displayPDFsTitulo_4_eliminar()
         
    ?>

    <h5>Estados Financieros:</h2>
    <?php
         //Mostrar los enlaces a los archivos PDF subidos
         displayPDFsTitulo_5_eliminar()
         
    ?>

    <h5>Promotor:</h2>
    <?php
         //Mostrar los enlaces a los archivos PDF subidos
         displayPDFsTitulo_3_eliminar()
         
    ?>
                    </ul>
                </div>

                <!-- End of Reminders-->

            </div>

        </main>

    </div>
    <script src="js/script.js"></script>
    <script>
        // Función para actualizar la hora actual en tiempo real
        function updateCurrentTime() {
            const currentTimeElement = document.getElementById("current_time");
            const updateInterval = 1000; // Actualizar cada segundo (1000 ms)

            // Función para obtener la hora actual y actualizar el campo
            function setCurrentTime() {
                const now = new Date();
                const currentTime = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: true });
                currentTimeElement.value = currentTime;
            }

            // Actualizar la hora actual inicialmente
            setCurrentTime();

            // Configurar una actualización periódica
            setInterval(setCurrentTime, updateInterval);
        }

        // Llamar a la función para iniciar la actualización en tiempo real
        updateCurrentTime();
    </script>

</body>

</html>