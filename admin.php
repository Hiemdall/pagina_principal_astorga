<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Agregar Productos</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">

    <!-- Favicon -->
    <link href="logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="css/admin.css">

<body>
   

   <div class="container">
    <!-- Sidebar Section -->
    <aside>
        <div class="toggle">
        <a href="" class="navbar-brand">
                    <h2 class="m-0 text-primary" style="display: flex; align-items: center;">
                        <img src="img/logo de astorga.png" alt="" style="width: 4rem; height: auto; margin-bottom: 10px;">
                        <span class="text-dark" style="font-family: 'Noto Serif Telugu', serif;">ASTORGA</span>
                      </h1>
                </a>
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

            <a href="visor.php">
                <span class="material-icons-sharp">
                    add
                </span>
                <h3>Ir al Visor</h3>
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

<h1>Subir archivo PDF</h1>
<div class="mt-3">
    <form action="upload.php" method="POST" enctype="multipart/form-data" class="row g-3">

        <div class="col-sm-10">
            <div class="form-floating">
                <select class="form-select" name="selectTitle" id="selectTitle">
                    <option value="">Selecciona un título</option>
                    <option value="acuerdo de Reorganizacion">Acuerdo de Reorganización</option>
                    <option value="Auto Admite Reorganización">Auto Admite Reorganización</option>
                    <option value="Informes del Promotor">Informes del Promotor</option>
                    <option value="Informes a la Superintendencia de Sociedades">Informes a la Superintendencia de Sociedades</option>
                    <option value="Estados Financieros">Estados Financieros</option>
                </select>
                <label for="selectTitle">Título</label>
            </div>
        </div>

        <!-- Campo de fecha oculto para enviar la fecha actual -->
        <input type="hidden" name="fecha" value="<?php echo date("Y-m-d"); ?>">

        <div class="col-sm-10">
            <div class="form-floating">
                <input type="file" class="form-control" name="pdfFile" accept=".pdf">
                <label for="pdfFile">Archivo PDF</label>
            </div>
        </div>

        <div class="col-sm-6">
            <button type="submit" class="btn btn-primary" style="width: 100%;">Subir</button>
        </div>
    </form>
</div>

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

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>