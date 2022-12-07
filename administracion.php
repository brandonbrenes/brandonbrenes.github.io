<?php
include_once("conexion/bd.php");

$perfiles = $database->select("perfil", "*");
$usuarios = $database->select("usuario", "*");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <?php include("links_head.php") ?>
</head>

<body>
    <header>
        <section>
            <div class="hero">
                <nav>
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            <a href="index.html"><img src="imgs/logo.svg" class="logo"></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="registro-receta.html">Añadir receta</a>
                                    </li>
                                    <!--<li class="nav-item">
                                        <a class="nav-link active" href="#">Filtro</a>
                                    </li>-->
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <img src="imgs/usuario.svg" class="user-pic" onclick="toggleMenu()">
                    <?php include_once("menu.php") ?>
                </nav>
            </div>
        </section>

        <section class="container-fluid box-title">
            <div class="text-center">
                <img src="imgs/logo.svg" alt="Foto portada">
            </div>
            <h1 class="text-center">Tus recetas favoritas en un mismo sitio</h1>
        </section>

        <script src="js/swiper-bundle.min.js"></script>
        <script src="js/script.js"></script>
        <script src="js/nav.js"></script>
    </header>

    <!-- Lista usuarios -->
    <section class="container">
        <div>
            <div class="container m-4">
                <form class="d-flex container-admin" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar usuario" aria-label="Search">
                    <button class="btn-br" type="submit">Buscar</button>
                </form>
            </div>
            <div class="container bg-dark opacity-75 rounded-3">
                <div class="text-center text-light">
                    <h2 class="">Lista general de usuarios</h2>
                </div>
                <div class="container row d-inline">
                    <table class="table table-bordered text-light">
                        <!-- tr es table row o fila de la table, td es cabecera de la tabla-->
                        <!-- Sirve para agrupar contenido de la cabecera de la tabla tbody agrupa contenido de la tabla para que el explorador habilite un scroll-->
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Tipo</th>
                                <th width="74px" scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($i = 0; $i < count($usuarios); $i++) {   ?>
                                <?php
                                for ($f = 0; $f < count($perfiles); $f++) {
                                    if ($usuarios[$f]["id_usuario"] == $perfiles[$i]["id_perfil"]) {
                                        $tipo = $perfiles[$f]["tipo"];
                                        $correo = $perfiles[$f]["correo"];
                                    }
                                } ?>

                                <tr>
                                    <td><?php echo $usuarios[$i]["id_usuario"] ?></td>
                                    <td><?php echo $usuarios[$i]["nombre_completo"] ?></td>
                                    <td><?php echo $correo ?></td>
                                    <td><?php echo $tipo ?></td>
                                    <td>
                                        <div class="d-inline">
                                            <form action="editar_usuario.php" method="GET">
    
                                            </form>
                                            <a class="text-light p-1 me-2 bi bg-primary text-decoration-none rounded-2" href="#">
                                                <i class="fa-solid fa-square-pen"></i>
                                            </a>
                                            
                                            <form action="conexion/eliminar_usuario.php" method="GET">
                                                <a class="text-light p-1 bi bg-danger text-decoration-none rounded-2" href="#">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin Lista usuarios -->

    <section class="container">
        <div>
            <div class="container m-4">
                <form class="d-flex container-admin" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar receta" aria-label="Search">
                    <button class="btn-br" type="submit">Buscar</button>
                </form>
            </div>
            <div class="container bg-dark opacity-75 rounded-3">
                <div class="text-center text-light">
                    <h2 class="">Lista general de Recetas</h2>
                </div>
                <div class="container row d-inline">
                    <table class="table table-bordered text-light">
                        <!-- tr es table row o fila de la table, td es cabecera de la tabla-->
                        <!-- Sirve para agrupar contenido de la cabecera de la tabla tbody agrupa contenido de la tabla para que el explorador habilite un scroll-->
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Complejidad</th>
                                <th scope="col">Ocasión</th>
                                <th width="80px" scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td>Brandon</td>
                                <td>Kris</td>
                                <td>Juan</td>
                                <td>Otro</td>
                                <td>
                                    <a class="text-light p-1 me-2 bi bg-primary text-decoration-none rounded-2" href="#">
                                        <i class="fa-solid fa-square-pen"></i>
                                    </a>
                                    <a class="text-light p-1 bi bg-danger text-decoration-none rounded-2" href="#">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Brandon@gmail.com</td>
                                <td>Kris@gmail.com</td>
                                <td>Juan@gmail.com</td>
                                <td>Otro</td>
                                <td>
                                    <a class="text-light p-1 me-2 bi bg-primary text-decoration-none rounded-2" href="#">
                                        <i class="fa-solid fa-square-pen"></i>
                                    </a>
                                    <a class="text-light p-1 bi bg-danger text-decoration-none rounded-2" href="#">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>4844848</td>
                                <td>4848</td>
                                <td>J456465</td>
                                <td>Otro</td>
                                <td>
                                    <a class="text-light p-1 me-2 bi bg-primary text-decoration-none rounded-2" href="#">
                                        <i class="fa-solid fa-square-pen"></i>
                                    </a>
                                    <a class="text-light p-1 bi bg-danger text-decoration-none rounded-2" href="#">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer text-center text-lg-start pb-2 pt-3">
        <div class="container d-flex justify-content-center p-0">
            <a href="https://gitlab.com/krisarias/gusticos" type="button" class="btn-br mx-2 p-md-2 btn-footer">
                <i class="fab fa-facebook-f min-w-20 text-center"></i>
                </button></a>
            <a href="https://gitlab.com/krisarias/gusticos" type="button" class="btn-br mx-2 p-md-2 btn-footer">
                <i class="fab fa-youtube min-w-20 text-center"></i>
                </button></a>
            <a href="https://gitlab.com/krisarias/gusticos" type="button" class="btn-br mx-2 p-md-2 btn-footer">
                <i class="fab fa-instagram min-w-20 text-center"> </i>
                </button></a>
            <a href="https://gitlab.com/krisarias/gusticos" type="button" class="btn-br mx-2 p-md-2 btn-footer ">
                <i class="fab fa-twitter min-w-20 text-center"> </i>
                </button></a>
        </div>
        <div class="text-center text-white">
            ©2022 Copyright:
            <a class="text-white" href="https://gitlab.com/krisarias/gusticos">UCR Estudiantes</a>
        </div>
    </footer>
</body>

</html>