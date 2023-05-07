<?php 

    if(!isset($_SESSION)){
        session_start();
    }

    $auth = $_SESSION['login'] ?? false;

    if(!isset($inicio)){
        $inicio = false;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>

    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/index.php">
                    <!-- <img src="build/img/logo.svg" alt="Logotipo de Bienes Raices"> -->
                    <h2>Real<span>Estate</span></h2>
                </a>

                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="icono menu responsive">
                </div>

                <div class="derecha">
                    <img class="dark-mode-boton" src="/build/img/dark-mode.svg" alt="dark mode">
                    <nav class="navegacion">
                        <a href="nosotros.php">Us</a>
                        <a href="anuncios.php">Advertisements</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contact</a>
                        <?php if($auth): ?>
                            <a href="cerrar-sesion.php">Log Out</a>
                        <?php endif; ?>    
                    </nav>
                </div>
                
            </div> <!--.barra-->

            <?php if($inicio) {?>
                <h1>Sale of Exclusive Luxury Houses and Apartments</h1>
            <?php }?>        
        </div>
    </header>