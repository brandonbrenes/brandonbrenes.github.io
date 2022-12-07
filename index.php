<?php
include_once("links_head.php");
include_once("modal_ver.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgs/Gusticos.ico" type="image/x-icon" />
    <title>Proyecto</title>
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

    <section class="container m-auto">
        <section class="mt-5 mb-5 align-items-center p-5 pb-2  pe-lg-5 bg-black bg-opacity-25 rounded-4 container">
            <h2 class="text-center text-top">Mejor valoradas</h2>

            <!--Swiper-->
            <div class="swiper">
                <div class="slide-content">

                    <!--Cards-->
                    <div class="card-wrapper swiper-wrapper">
                        <!--Editar-->
                        <?php for ($i = 0; $i <= 10; $i++) { ?>
                            <div class="card swiper-slide active">
                                <div class="card-header text-center">
                                    <img src="imgs/1.jpg" class="card-img-top" style="object-fit:cover;" alt="1">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">
                                        Some quick example text to build on
                                        the card title and make up the bulk
                                        of the card's content.
                                    </p>
                                </div>
                                <div class="card-footer d-md-flex pb-2 me-0 justify-content-between">
                                    <div class="text-start">
                                        <div class="ms-3 d-flex text-dark pt-3">
                                            <i class=" p-1 fa-solid fa-heart likes"></i>
                                            <span class="pt-1 ps-2">10k</span>
                                        </div>
                                    </div>
                                    <div class="text-end pt-2">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn-br" data-bs-toggle="modal" data-bs-target="#modal-ver">
                                            ver mas
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <!--Fin Editar-->
                    </div>
                    <!--End Cards-->

                    <div class="p-0 mt-5">
                        <div class="swiper-button-next swiper-navBtn pt-5"></div>
                        <div class="swiper-button-prev swiper-navBtn pt-5"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <script src="js/swiper-bundle.min.js"></script>
                <script src="js/script.js"></script>
                <script src="js/nav.js"></script>
            </div>
            <!--End Swiper-->
        </section>
    </section>

    <!--Filtros?-->
    <section class="mt-5 bg-black bg-opacity-25 rounded-4 m-5">
        <h2 class="text-center text-top">Filtre segun sus necesidades:</h2>
        <section class="container text-center bg-dark bg-opacity-75 rounded-3 p-2 pb-3">
            <form action="index.php" method="GET">
                <div class="row text-light link-color-dark">

                    <div class="col-md ">
                        <h4 for="categoria" class="form-label"> Categoria</h4>
                        <select class="form-select" name="categoria" aria-label="Default select example">
                            <option value="none" selected disabled>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-md">
                        <h4 for="categoria" class="form-label"> Complejidad</h4>
                        <select class="form-select" aria-label="Default select example">
                            <option value="none" selected disabled>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-md">
                        <h4 for="categoria" class="form-label"> Ocasión</h4>
                        <select class="form-select" name="ocasion" aria-label="Default select example">
                            <option value="none" selected disabled>Open this select menu</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <div class="mt-3 p-0">
                            <div class="text-center">
                                <input type="button" class="pe-4 ps-4 btn-br" value="Filtrar" name="filtros" data-bs-toggle="collapse" href="#filtros" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"></input>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>

        <section class="container-sm">
            <div class="collapse multi-collapse" id="filtros">
                <div class="mt-3 bg-dark bg-opacity-75 rounded-3">
                    <!--Swiper-->
                    <div class="swiper">
                        <div class="slide-content">
                            <!--Cards-->
                            <div class="card-wrapper swiper-wrapper">
                                <!--Editar-->
                                <?php
                                    if (isset($_POST['Filtrar'])) {
                                        $name="si";
                                    }
                                ?>
                                <?php for ($i = 0; $i <= 10; $i++) { ?>
                                    <div class="card swiper-slide">
                                        <div class="card-body">
                                            This is some text within a card <?php $name."-".$i ?> body.
                                        </div>
                                    </div>
                                <?php } ?>
                                <!--Fin Editar-->
                            </div>
                            <!--End Cards-->

                            <div class="p-0 mt-3">
                                <div class="swiper-button-next swiper-navBtn pt-1"></div>
                                <div class="swiper-button-prev swiper-navBtn pt-1"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>

                        <script src="js/swiper-bundle.min.js"></script>
                        <script src="js/script.js"></script>
                        <script src="js/nav.js"></script>
                    </div>
                    <!--End Swiper-->
                </div>
            </div>
        </section>
        <br>
        <!--Por agregar funciones--></br>
    </section>
    <!--Fin filtros?-->

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