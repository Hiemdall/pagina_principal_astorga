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
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-primary"><span class="text-dark">ASTOR</span>GA</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Inicio</a>
                        <a href="Index.php" class="nav-item nav-link">Acerca de</a>
                         <!--<a href="package.html" class="nav-item nav-link">Intranet</a>-->
                        <a href="single.php" class="nav-item nav-link">INFORMES DE REORGANIZACION LEY 1116</a>
                        <a href="Index.php" class="nav-item nav-link">Contacto</a>
                            
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
                <h3 class="display-4 text-white text-uppercase">Informes</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Informes</p>
                </div>
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
                        <div class="bg-white mb-3" style="padding: 30px;">
                            <div class="d-flex mb-3">
                                <a class="text-primary text-uppercase text-decoration-none" href="">Archivo de la categoría:</a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href=""> Astorga</a>
                            </div>
                        </div>
                    </div>
    
    <div class="container py-4 bg-white mb-3">
    <h4 class="mb-3">Acuerdo de Reorganización</h4>
    <div class="mb-3">
    <?php
    // Mostrar los enlaces a los archivos PDF subidos
    include 'display.php';
    displayPDFsTitulo1();
    ?>
    </div>
    </div>

    <div class="container py-4 bg-white mb-3">
    <h4 class="mb-3">Auto Admite Reorganización</h4>
    <div class="mb-3">
    <?php
    // Mostrar los enlaces a los archivos PDF subidos
    displayPDFsTitulo2();
    ?>
    </div>
    </div>

    <div class="container py-4 bg-white mb-3">
    <h4 class="mb-3">Informes del Promotor</h4>
    <div class="mb-3">
    <?php
    // Mostrar los enlaces a los archivos PDF subidos
    displayPDFsTitulo3();
    ?>
    </div>
    </div>

<div class="container py-4 bg-white mb-3">
    <h4 class="mb-3">Informes a la Superintendencia de Sociedades</h4>
    <div class="mb-3">
    <?php
    // Mostrar los enlaces a los archivos PDF subidos
    displayPDFsTitulo4();
    ?>
</div> 
</div>

<div class="container py-4 bg-white mb-3">
    <h4 class="mb-3">Estados Financieros</h4>
    <?php
    // Mostrar los enlaces a los archivos PDF subidos
    displayPDFsTitulo5();
    ?>
 </div>

</div>

    
                <div class="col-lg-4 mt-5 mt-lg-0">

                    <!-- Category List -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Categorias</h4>
                        <div class="bg-white" style="padding: 30px;">
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
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Acerca de</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Destinos</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Servicios</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Paquetes</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Guías</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Testimonios</a>
                    <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Blog</a>
                </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contáctenos</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Ubicación</p>
                <p><i class="fa fa-phone-alt mr-2"></i>(+57) 3975670</p>
                <p><i class="fa fa-envelope mr-2"></i>promotor@astorga.com.co</p>
                </div>

                <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Calendario</h5>
                <div class="col-md-3 col-sm-6 enigma_footer_widget_column widget_calendar">
                    <div class="enigma_footer_widget_title"><div class="enigma-footer-separator"></div></div><div id="calendar_wrap" class="calendar_wrap"><table id="wp-calendar" class="wp-calendar-table">
                    <caption>septiembre 2023</caption>
                    <thead>
                    <tr>
                        <th scope="col" title="lunes">L</th>
                        <th scope="col" title="martes">M</th>
                        <th scope="col" title="miércoles">X</th>
                        <th scope="col" title="jueves">J</th>
                        <th scope="col" title="viernes">V</th>
                        <th scope="col" title="sábado">S</th>
                        <th scope="col" title="domingo">D</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="4" class="pad">&nbsp;</td><td>1</td><td>2</td><td>3</td>
                    </tr>
                    <tr>
                        <td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td>
                    </tr>
                    <tr>
                        <td id="today">11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td>
                    </tr>
                    <tr>
                        <td>18</td><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td><td>24</td>
                    </tr>
                    <tr>
                        <td>25</td><td>26</td><td>27</td><td>28</td><td>29</td><td>30</td>
                        <td class="pad" colspan="1">&nbsp;</td>
                    </tr>
                    </tbody>
                    </table><nav aria-label="Meses anteriores y posteriores" class="wp-calendar-nav">
                        <span class="wp-calendar-nav-prev"><a href="https://astorga.com.co/2023/05/">&laquo; May</a></span>
                        <span class="pad">&nbsp;</span>
                        <span class="wp-calendar-nav-next">&nbsp;</span>
                    </nav></div></div>		</div>		
                    </div>
                </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">Copyright &copy; <a href="#">Integratic sas</a>. All Rights Reserved.</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <p class="m-0 text-white-50">Designed by <a href="https://htmlcodex.com">Integratic sas</a>
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