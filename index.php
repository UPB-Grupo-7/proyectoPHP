<?php
    session_start();

    require 'database.php';

    if(isset($_SESSION['user_id'])){
        $records = $conn->prepare('SELECT id, nombre, apellido, correo, usuario, contrasena FROM datos WHERE id = :id');
        $records->bindParam(':id', $_SESSION['user_id']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
        $user = null;

        if(count($results)>0){
            $user = $results;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <title>ClassPort</title>
    <link rel="stylesheet" href="css/styleIndex.css">
</head>

<body>
    <div class="continer">
        <nav>
            <img src="img/ClassPort..png" class="logo">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
        <div class="text-box">
            <p>NOSOTROS SOMOS</p>
            <h1>CLASSPORT</h1>
            <h3>Una plataforma de Educación y Protección.</h3>
            <div class="row">
                <a href="registro.php">Registrarse</a>
                <a href="iniciar.php">Iniciar Sesión</a>
                <span>Puedes explorar nuestra <br>plataforma de aprendizaje.</span>
            </div>
        </div>
        <div class="social-icons">
            <a href="#">
                <img src="img/facebook.png" alt="">
            </a>
            <a href="#">
                <img src="img/Instagram.png" alt="">
            </a>
            <a href="#">
                <img src="img/Linked.png" alt="">
            </a>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>

</html>

</html>