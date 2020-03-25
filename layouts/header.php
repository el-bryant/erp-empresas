<!doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!--Scroll de barra de navegación-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

        <link rel="stylesheet" href="css/estilos.css">

        <title>ERP - Empresas</title>
    </head>
    <body style="overflow-x: hidden;">
        <div class="container-fluid">
            <div class="row">

                <!--Barra de navegación izquierda-->
                <div id="sidebar" class="col-md-3 col-xl-2 bg-azul pr-0 mr-0 w-100 vh-100" style="overflow-y: scroll;">
                    <nav class="nav flex-column nav-pills mt-5 pt-4 w-100 mr-0 pr-0">
                        <div class="sidebar-header">
                            <h3 class="bold text-white">ERP Empresas</h3>
                        </div>
                        <?php include_once('admin_menu.php'); ?>
                    </nav>
                </div>
                <!--Barra de navegación izquierda-->
                
                <div class="col-md-9 col-lg-10 panel panel-default pr-0 mr-0">

                    <!--Barra superior de nombre-->
                    <div class="row justify-content-end">
                        <div class="col-auto">
                            <nav class="navbar navbar-expand-md navbar-light bg-white mt-4 py-0">
                                <ul class="navbar-nav ml-auto mr-4">
                                    <li class="nav-item">
                                        <a class="nav-link p-2 my-0" href="#">
                                            <hr class="rounded-circle ic-cumple m-0">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <p class="nav-link my-0" href="#">Nombre de usuario</p>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link p-2 my-0" href="#">
                                            <hr class="rounded-circle ic-perfil m-0">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link p-2 my-0" href="#">
                                            <hr class="rounded-circle ic-opciones m-0">
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--Barra superior de nombre-->