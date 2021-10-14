<?php
require 'database.php';
$message = "";

if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['correo']) && !empty($_POST['usuario']) && !empty($_POST['contrasena'])){
    $sql = "INSERT INTO datos (nombre, apellido, correo, usuario, contrasena) VALUES (:nombre, :apellido, :correo, :usuario, :contrasena)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre',$_POST['nombre']);
    $stmt->bindParam(':apellido',$_POST['apellido']);
    $stmt->bindParam(':correo',$_POST['correo']);
    $stmt->bindParam(':usuario',$_POST['usuario']);
    $contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);
    $stmt->bindParam(':contrasena',$contrasena);

    if($stmt->execute()){
        $message = "USUARIO CREADO EXITOSAMENTE. Por favor inicie sesión";
    }else{
        $message = "Error";
    }

}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="css/registro.css" rel="stylesheet">

    <title>Registro</title>
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
                        <div class = "registroExitoso">
                            <p><?= $message ?></p>
                        </div>
                    <?php endif ?>
                    <h1 class="font-weight-bold mb-3 text-light">Crea tu cuenta</h1>
                    <p class="mb-5 text-light">¿Ya tienes una cuenta? <a href="iniciar.php">Inicia sesión</a></p>
                    <p class="mb-5 text-light">Ingresa la siguiente información para registrarte.</p>

                    <form action = "registro.php" method="post">
                        <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold text-light">Nombre <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nombre" placeholder="Tu nombre">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold text-light">Apellido <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="apellido" placeholder="Tu apellido">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold text-light">Correo electrónico <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="correo" placeholder="Ingresa tu correo electrónico">
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold text-light">Usuario <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="usuario"  id="in_usuario" placeholder="Ingresa un usuario">
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold text-light" >Contraseña <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="contrasena" id="in_contrasena" placeholder="Ingresa una contraseña">
                        </div>
                        <button type="submit" class="btn btn-primary width-100" id="btn_enviar_registro" onclick="agregarRegistro()">Regístrate</button>
                    </form>
                    <small class="d-inline-block text-muted mt-5">Todos los derechos reservados | © 2019 Templune</small>
                </div>
            </div>
        </div>
    </section>
    <script src="registro.js"></script>
</body>
</html>