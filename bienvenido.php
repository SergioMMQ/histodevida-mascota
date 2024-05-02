<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
                alert("Porfavor inicia sesion");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histodevida</title>
</head>

<body>
    <header>
        <div class="profile-picture">
            <img src="" alt="Foto de la Mascota">
        </div>
        <div class="profile-details">
            <h1>Mi Mascota</h1>
            <p>¡Hola! Soy [Nombre de la Mascota], ¡bienvenidos a mi perfil!</p> 
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="bienvenido.php"><?php echo $usuario; ?></a></li>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Acerca de Mí</a></li>
            <li><a href="#">Fotos</a></li>
            <li><a href="#">Amigos</a></li>
            <li><a href="#">Mensajes</a></li>
            <li><a href="php/cerrar_sesion.php">cerrar_sesion</a></li>
        </ul>
    </nav>
    <main>
        <section class="post">
            <div class="post-header">
                <img src="mascota.jpg" alt="Foto de la Mascota">
                <div class="post-info">
                    <h2>[Nombre de la Mascota]</h2>
                    <p>[Fecha del Post]</p>
                </div>
            </div>
            <div class="post-content">
                <p>[Contenido del Post]</p>
            </div>
            <div class="post-actions">
                <button>Me gusta</button>
                <button>Comentar</button>
                <button>Compartir</button>
            </div>
        </section>
        <!-- Más secciones de publicaciones pueden ir aquí -->
    </main>
    <footer>
        <p>&copy; 2024 Perfil de Mi Mascota</p>
    </footer>
</body>
</html>