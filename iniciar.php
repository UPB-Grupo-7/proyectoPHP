<?php
session_start();
require 'database.php';
if(!empty($_POST['usuario']) && !empty ($_POST['contrasena'])){
    $records = $conn->prepare('SELECT id, usuario, contrasena FROM datos WHERE usuario=:usuario');
    $records->bindParam(':usuario', $_POST['usuario']);
    $records->execute();
    $results = $records-> fetch(PDO::FETCH_ASSOC);
    $message = '';
    var_dump($results);


    if(count($results)> 0 && password_verify($_POST['contrasena'], $results['contrasena'])){
        $_SESSION['user_id'] = $results['id'];
        header('Location: /registro/inicio.php');
    }else{
        $message = "Datos incorrectos";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="css/registro.css" rel="stylesheet">
</head>
<body>
<section class="contact-box">
        <div class="row no-gutters bg-dark" id="divisor">
            <div class="col-xl-5 col-lg-12 register-bg">
            <div class="position-absolute testiomonial p-4">
            </div>
            </div>
            <div class="col-xl-7 col-lg-12 d-flex">
                <div class="container align-self-center p-6">
                    <?php if(!empty($message)): ?>
                        <div class = "datosIncorrectos">
                            <p><?= $message ?></p>
                        </div>
                    <?php endif ?>
                    <h1 class="font-weight-bold mb-3 text-light">Inicia sesión</h1>
                    <p class="mb-5 text-light">¿No tienes una cuenta? <a href="registro.php">Regístrate</a></p>
                    <p class="mb-5 text-light">Ingresa la siguiente información para iniciar sesión.</p>

                    <form action = "iniciar.php" method="post">
                        <div class="form-group mb-3">
                            <label class="font-weight-bold text-light">Usuario <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="usuario"  id="in_usuario" placeholder="Ingresa un usuario">
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold text-light" >Contraseña <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="contrasena" id="in_contrasena" placeholder="Ingresa una contraseña">
                        </div>
                        <button type="submit" class="btn btn-primary width-100" id="btn_enviar_registro" onclick="agregarRegistro()">Iniciar Sesión</button>
                    </form>
                    <small class="d-inline-block text-muted mt-5">Todos los derechos reservados | © 2019 Templune</small>
                </div>
            </div>
        </div>
    </section>
</body>
</html>