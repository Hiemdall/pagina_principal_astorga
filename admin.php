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
    <meta charset="UTF-8">
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
    
    <title>Intranet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    <style>
        /* Estilos personalizados */
        .card {
            transition: transform 0.2s;
        }

        .card:hover {
            transform: scale(1.05);
        }

    </style>
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
        <li class="active"><a href="#"><i class='bx bx-analyse'></i>Intranet</a></li>
        <li><a href="index.php"><i class='bx bx-message-square-dots'></i>Home</a></li>
        <li><a href="single.php"><i class='bx bx-message-square-dots'></i>Informes</a></li>
        
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

    <main>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/about.jpg" class="card-img-top" alt="Imagen de Opción 1">
                    <div class="card-body">
                        <h5 class="card-title">Administración</h5>
                        <p class="card-text">Modulos Administrativos</p>
                        <a href="subir_archivo.php" class="btn btn-primary">Ingresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Incluye Bootstrap JS (opcional, solo si necesitas funcionalidades JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/js/bootstrap.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+D4gkOtF5y5Iz6F5twxO7K1fjH6tuU8tizsTO5d2Au3U7q2N" crossorigin="anonymous"></script>

    </main>

    </div>
    <script src="js/script.js"></script>
</body>

</html>