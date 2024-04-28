<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <main>
            <div class="contenedor">
                <div class="caja-trasera">
                    <div class="caja-trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Iniciar secion para entrar en la página</p>
                        <button id="btn_iniciar_sesion">Iniciar Sesion</button>
                    </div>
                    <div class="caja-trasera-registro">
                        <h3>¿Aun no tienes una cuenta?</h3>
                        <p>Registrate para que puedas iniciar sesion</p>
                        <button id="btn_registro">Registrarse</button>
                    </div>
                </div>
                <!--Formulario de login y registro-->
                <div class="contenedor_registro">
                    <!--Login-->
                    <form action="" class="formulario_login">
                        <h2>Iniciar Sesion</h2>
                        <input type="text" placeholder="Correo Electronico">
                        <input type="password" placeholder="Contraseña">
                        <button>Entrar</button>
                    </form>
                    <!--Registro-->
                    <form action="php/registro_usuario_be.php" method="POST" class="formulario_registro">
                        <h2>Registrarse</h2>
                        <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                        <input type="text" placeholder="Correo Electronico" name="correo">
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Registrarse</button>
                    </form>
                </div>
            </div>
        </main>
    </body>

    <script src="assets/js/script.js"></script>
</html>