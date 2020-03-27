<!doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!--Fontawesome-->
        <script src="https://kit.fontawesome.com/45bf28af39.js" crossorigin="anonymous"></script>

        <!--Scroll de barra de navegación-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

        <link rel="stylesheet" href="css/estilos.css">

        <title>Vespro - ERP</title>
    </head>
    <body style="overflow-x: hidden;">
        <div class="container-fluid">
            <div class="row">

                <!--Barra de navegación izquierda-->
                <div id="sidebar" class="col-md-3 col-xl-2 bg-azul pr-0 mr-0 w-100 vh-100" style="overflow-y: scroll;">
                    <nav class="nav flex-column nav-pills mt-5 pt-4 w-100 mr-0 pr-0">
                        <div class="sidebar-header">
                            <h3 class="bold text-white">Vespro - ERP</h3>
                        </div>
                        <?php include_once('admin_menu.php'); ?>
                    </nav>
                </div>
                <!--Barra de navegación izquierda-->
                
                <div class="col-md-9 col-xl-10 panel panel-default pr-0 mr-0">

                    <!--Barra superior de nombre-->
                    <div class="row justify-content-end">
                            <div class="card border-0 barra-superior bg-white mt-4 pr-5">
                                <div class="row align-items-center m-1 p-1">
                                    <a class="ic-cumple mx-2" href="#">
                                        <i class="fas fa-birthday-cake fa-lg"></i>
                                    </a>
                                    <div class="t-15 mx-2 my-auto" href="#">Nombre de usuario</div>
                                    <a class="ic-perfil mx-2" href="#">
                                        <i class="fas fa-user-circle fa-lg m-0"></i>
                                    </a>
                                    <a class="ic-opciones mx-2" href="#">
                                        <i class="fas fa-ellipsis-v fa-lg"></i>
                                    </a>
                                </div>
                            </div>
                    </div>
                    <!--Barra superior de nombre-->