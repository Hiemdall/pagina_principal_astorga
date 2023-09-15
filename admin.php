<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

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

<div class="container">
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="logo.png">
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">


                <a></a>

                <a href="#" class="active">
                    <span class="material-icons-sharp">
                        add
                    </span>
                    <h3>Intranet</h3>
                </a>
    
                
                <a href="#">
                    <span class="material-icons-sharp">
                        settings
                    </span>
                    <h3>Settings</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <main>
            <h1>INTRANET</h1>
            <!-- Analyses -->
            <div class="analyse">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="bg-white p-4 rounded shadow">
                    <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Subir archivo PDF</h4>
                    <form action="upload.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="selectTitle" class="form-label">Selecciona un título:</label>
                            <select class="form-select" name="selectTitle" id="selectTitle" required>
                                <option value="">Selecciona un título</option>
                                <option value="acuerdo de Reorganizacion">Acuerdo de Reorganización</option>
                                <option value="Auto Admite Reorganización">Auto Admite Reorganización</option>
                                <option value="Informes del Promotor">Informes del Promotor</option>
                                <option value="Informes a la Superintendencia de Sociedades">Informes a la Superintendencia de Sociedades</option>
                                <option value="Estados Financieros">Estados Financieros</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="pdfFile" class="form-label">Selecciona un archivo PDF:</label>
                            <input class="form-control" type="file" name="pdfFile" id="pdfFile" accept=".pdf" required>
                        </div>
                        <div class="mb-3 text-center">
                            <!-- Cambio del color del botón a verde -->
                            <input class="btn btn-primary" type="submit" value="Subir">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>


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
            </div>
            <!-- End of Analyses -->


        </main>
        <!-- End of Main Content -->

        <!-- Right Section -->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>
                <div class="dark-mode">
                    <span class="material-icons-sharp active">
                        light_mode
                    </span>
                    <span class="material-icons-sharp">
                        dark_mode
                    </span>
                </div>

                <div class="profile">
                    <div class="info">
                        <p>Hey, <b>Reza</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="img/team-4.jpg">
                    </div>
                </div>

            </div>
            <!-- End of Nav -->

            <div class="user-profile">
                <div class="status">
                    <div class="info">
                        <h3>Total Productividad</h3>
                        <h1>$65,024</h1>
                    </div>
        
                    <div class="progresss">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="percentage">
                            <p>+81%</p>
                        </div>
                    </div>
                </div>               
            </div>

            <div class="reminders">
                <div class="header">
                    <h2>Reminders</h2>
                </div>

                <div class="notification">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            volume_up
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Workshop</h3>
                            <small class="text_muted">
                                08:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification deactive">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            edit
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Workshop</h3>
                            <small class="text_muted">
                                08:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification add-reminder">
                    <div>
                        <span class="material-icons-sharp">
                            add
                        </span>
                        <h3>Add Reminder</h3>
                    </div>
                </div>

            </div>

        </div>


    </div>

    <script src="js/orders.js"></script>
    <script src="js/index.js"></script>


</body>
</html>