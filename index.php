<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login PHP con Roles de Usuario</title>

    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">


    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-image: url("./2a.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            overflow: hidden;
            height: 100vh;
        }

        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.4);
            height: 100vh;
            transform: translateY(20px);
            /* Agregado */
        }

        @media (max-width: 768px) {
            .main {
                transform: translateY(50px);
                /* Ajustado */
            }
        }

        .login-container,
        .registration-container {
            width: 500px;
            box-shadow: rgba(255, 255, 255, 0.24) 0px 3px 8px;
            border-radius: 10px;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 30px;
            color: rgb(255, 255, 255);
        }

        .title-container>h1 {
            font-size: 90px !important;
            color: rgb(255, 255, 255);
            text-shadow: 2px 4px 2px rgba(200, 200, 200, 0.6);
        }

        .show-form {
            color: rgb(100, 100, 200);
            text-decoration: underline;
            cursor: pointer;
        }

        .show-form:hover {
            color: rgb(100, 100, 255);
        }
    </style>
</head>

<body>

    <div class="main row">

        <div class="title-container col-6">
            <h1>Sistema de Login PHP con Roles de Usuario</h1>
        </div>

        <div class="main-container col-4">
            <!-- Login Form -->
            <div class="login-container" id="loginForm">
                <h2 class="text-center">Hola de nuevo!</h2>
                <p class="text-center">Ingresa tus credenciales</p>
                <div class="login-form">
                    <form action="./endpoint/login.php" method="POST">
                        <div class="form-group">
                            <label for="username">Usuario:</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña:</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>

                        <div class="row m-auto">
                            <div class="form-group form-check col-6">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Recordar Contraseña</label>
                            </div>
                            <small class="show-form col-6 text-center pl-4" onclick="showForm()">Aún no tienes cuenta? Regístrate aquí</small>
                        </div>

                        <button type="submit" class="btn btn-primary login-btn form-control">Acceder</button>
                    </form>
                </div>
            </div>


            <!-- Registration Area -->
            <div class="registration-container" id="registrationForm" style="display:none;">
                <h2 class="text-center">Regstra tu cuenta!</h2>
                <p class="text-center">Ingresa la información de tu cuenta</p>
                <div class="registration-form">
                    <form action="./endpoint/add-user.php" method="POST">
                        <div class="form-group">
                            <label for="name">Nombre Completo:</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="role">Rol:</label>
                            <select class="form-control" id="role" name="role">
                                <option>-seleccionar-</option>
                                <option value="admin">Admin</option>
                                <option value="user">Usuari@</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="registerUsername">Usuario:</label>
                            <input type="text" class="form-control" id="registerUsername" name="username">
                        </div>
                        <div class="form-group">
                            <label for="registerPassword">Contraseña:</label>
                            <input type="password" class="form-control" id="registerPassword" name="password">
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Confirmar contraseña:</label>
                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
                        </div>
                        <div class="form-group float-right">
                            <small class="show-form" onclick="showForm()">Ya tienes una cuenta? Ingresa aquí</small>
                        </div>
                        <button type="submit" class="btn btn-primary login-register form-control">Registro</button>
                    </form>

                </div>

            </div>
        </div>


    </div>

    <!-- Bootstrap 4 JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

    <script>
        function showForm() {
            const loginForm = document.getElementById('loginForm');
            const registrationForm = document.getElementById('registrationForm');

            if (registrationForm.style.display == 'none') {
                loginForm.style.display = 'none';
                registrationForm.style.display = '';
            } else {
                loginForm.style.display = '';
                registrationForm.style.display = 'none';
            }
        }
    </script>
</body>

</html>