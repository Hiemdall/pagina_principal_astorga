<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Astorga</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5 navbar-custom">
                <a href="login.php" class="navbar-brand">
                    <h2 class="m-0 text-primary">
                        <img src="img/logo de astorga.png" alt="" style="width: 2rem; height: auto;">
                        <span class="text-dark" style="font-family: sans-serif;">STORGA</span>
                    </h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Inicio</a>
                        <a href="#about" class="nav-item nav-link">Acerca de</a>
                        <a href="single.php" class="nav-item nav-link">INFORMES</a>
                        <a href="#Contactenos" class="nav-item nav-link">Contacto</a>
                        
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
             <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Archivos</h6>
             <h2 class="text-white" style="text-transform: uppercase;"><span class="text-primary">Informes</span> proceso de reorganizacion Ley 1116</h1>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Blog Start -->

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                <div class="pb-3">
                    <div class="bg-white p-4">
                        <div class="d-flex ">
                            <h4 class="text-uppercase text-decoration-none">Archivo de la categoría:</h4>
                        </div>
                    </div>
                </div>

                <!-- Section for Acuerdo de Reorganización -->
                <div class="container py-4 bg-white mb-3 bor">
                    <h4 class="mb-3">Acuerdo de Reorganización</h4>
                    <div class="mb-3">
                        <?php
                        include 'display.php';
                        displayPDFsTitulo1();
                        ?>
                    </div>
                </div>

                <!-- Section for Auto Admite Reorganización -->
                <div class="container py-4 bg-white mb-3 bor">
                    <h4 class="mb-3">Auto Admite Reorganización</h4>
                    <div class="mb-3">
                        <?php
                        displayPDFsTitulo2();
                        ?>
                    </div>
                </div>

                <!-- Section for Informes a la Superintendencia de Sociedades -->
                <div class="container py-4 bg-white mb-3 bor">
                    <h4 class="mb-3">Superintendencia de Sociedades</h4>
                    <div class="mb-3">
                        <?php
                        displayPDFsTitulo4();
                        ?>
                    </div>
                </div>

                <!-- Section for Estados Financieros -->
                <div class="container py-4 bg-white mb-3 bor">
                    <h4 class="mb-3">Estados Financieros</h4>
                    <?php
                    displayPDFsTitulo5();
                    ?>
                </div>

                <!-- Section for Informes del Promotor -->
                <div class="container py-4 bg-white mb-3 bor">
                    <h4 class="mb-3">Promotor</h4>
                    <div class="mb-3">
                        <form method="POST" class="mb-3">
                            <label for="year">Selecciona un año:</label>
                            <select class="form-select" style="width: auto;" name="year" id="year">
                                <?php
                                $years = getAvailableYearsForTitle('Promotor');
                                foreach ($years as $year) {
                                    echo "<option value='$year'>$year</option>";
                                }
                                ?>
                            </select>
                            <button type="submit" class="btn btn-primary mt-4">Mostrar documentos</button>
                        </form>

                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $selectedYear = $_POST["year"];
                            displayPDFsTitulo3ByYear($selectedYear);
                        }
                        ?>
                    </div>
                </div>
            </div>



    
            <div class="col-lg-4 mt-5 mt-lg-0">
    <div class="bg-white" style="padding: 30px;">
        <div class="d-flex mb-3 justify-content-center">
            <h4 class="text-uppercase" style="letter-spacing: 1px;">Categorías</h4>
        </div>
        <ul class="list-inline m-0">
            <?php
            // Mostrar los enlaces a los archivos PDF subidos
            include 'qty_file.php';
            ?>
        </ul>
    </div>
</div>

            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white">ASTOR</span>GA</h1>
                </a>
                <p>Sed ipsum clita tempor ipsum ipsum amet sit ipsum lorem amet labore rebum lorem ipsum dolor. No sed vero lorem dolor dolor.</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Síguenos</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Enlaces Útiles</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Acerca de</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>INFORMES</a>
                    <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Contacto</a>
                    
                </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contáctenos</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Ubicación</p>
                <p><i class="fa fa-phone-alt mr-2"></i>(+57) 3975670</p>
                <p><i class="fa fa-envelope mr-2"></i>promotor@astorga.com.co</p>
                </div>


        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">Copyright &copy; <a href="https://integratic.com.co/">Integratic sas</a>. All Rights Reserved.</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <p class="m-0 text-white-50">Designed by <a href="https://integratic.com.co/">Integratic sas</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>