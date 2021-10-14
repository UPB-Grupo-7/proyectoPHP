<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleInicio.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <title>ClassPort</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class="fa fa-book" aria-hidden="true"></i>
            <div class="logo_name">ClassPort</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Buscar ClassPort">
                <span class="tooltip">Buscar</span>
            </li>
            <li>
                <a href="ingreso.html">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Inicio</span>
                </a>
                <span class="tooltip">Inicio</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Usuario</span>
                </a>
                <span class="tooltip">Usuario</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-chat'></i>
                    <span class="links_name">Mensajes</span>
                </a>
                <span class="tooltip">Mensajes</span>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span class="links_name">Contacto</span>
                </a>
                <span class="tooltip">Contacto</span>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-heartbeat" aria-hidden="true"></i>
                    <span class="links_name">Salud Mental</span>
                </a>
                <span class="tooltip">Salud Mental</span>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                    <span class="links_name">Tareas</span>
                </a>
                <span class="tooltip">Tareas</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Configuraciones</span>
                </a>
                <span class="tooltip">Configuraciones</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <img src="img/Perfil..png" alt="profileImg">
                    <div class="name_job">
                        <div class="name">Danna B</div>
                        <div class="job">Diseñadora Grafica</div>
                    </div>
                </div>
                <i class='bx bx-log-out' id="log_out"></i>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="text">¡Bienvenido!</div>
        <div class="parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit quo aliquam a illo, magnam vel ipsa, veniam tempore pariatur voluptate dolore vero ad ipsum suscipit ut itaque iure amet excepturi?</div>
        <div class="container">
            <div class="card">
                <div class="icon"></div>
                <div class="content"></div>
                <div class="conatainer">
                    <div class="serviceBox">
                        <a href="#">
                            <div class="icon" style="--i:#4eb7ff">
                                <ion-icon name="color-palette"></ion-icon>
                            </div>
                            <div class="content">
                                <h2>Pizarra</h2>
                            </div>
                        </a>
                    </div>
                    <div class="serviceBox">
                        <a href="diccionario.html">
                            <div class="icon" style="--i:#fd6494">
                                <ion-icon name="book"></ion-icon>
                            </div>
                            <div class="content">
                                <h2>Diccionario</h2>
                            </div>
                        </a>
                    </div>
                    <div class="serviceBox">
                        <a href="#">
                            <div class="icon" style="--i:#43f390">
                                <ion-icon name="calculator"></ion-icon>
                            </div>
                            <div class="content">
                                <h2>Calculadora</h2>
                            </div>
                        </a>
                    </div>
                    <div class="serviceBox">
                        <a href="#">
                            <div class="icon" style="--i:#ffb508">
                                <ion-icon name="images"></ion-icon>
                            </div>
                            <div class="content">
                                <h2>Imagenes</h2>
                            </div>
                        </a>
                    </div>
                    <div class="serviceBox">
                        <a href="#">
                            <div class="icon" style="--i:#37ba82">
                                <ion-icon name="videocam"></ion-icon>
                            </div>
                            <div class="content">
                                <h2>Videollamada</h2>
                            </div>
                        </a>
                    </div>
                    <div class="serviceBox">
                        <a href="#">
                            <div class="icon" style="--i:#cd57ff">
                                <ion-icon name="checkmark-circle"></ion-icon>
                            </div>
                            <div class="content">
                                <h2>Notas</h2>
                            </div>
                        </a>
                    </div>
                    <div class="gato">
                        <div class="sombra"></div>
                        <div class="cat">
                            <div class="oreja"></div>
                            <div class="ojo"></div>
                            <div class="boca"></div>
                            <div class="nariz"></div>
                            <div class="cola"></div>
                            <div class="cuerpo"></div>
                            <div class="burbuja"></div>
                        </div>
                    </div>
                    <section class="home-section_dos">
                        <div class="parrafo_dos">Gatito aun no tiene nuevos proyectos para ti.</div>
                </div>
            </div>
        </div>
        </section>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <script src="js/inicio.js"></script>
</body>

</html>