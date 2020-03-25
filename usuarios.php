<?php
$page_title = 'Usuarios';
include_once('layouts/header.php');
?>

<!--Contenido de usuarios-->
<div class="tab-pane fade show active" role="tabpanel">
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto">

                <!--Título de sección-->
                <div class="bold bg-white text-azul sombra rounded-pill mt-3 mb-4 d-flex align-items-center justify-content-between text-azul py-2 pl-3">Usuario</div>
                <!--Título de sección-->

            </div>
            <div class="col-11 mt-5 mx-auto">
                <div class="card card-dashboard border-0 sombra mt-2 pb-3" style="position: relative;">

                    <!--Tabla de datos-->
                    <table class="table table-sm table-hover bg-white card-dashboard">
                        <thead class="bg-turquesa border-0 bold">
                            <tr class="text-white">
                                <th scope="col" class="border-0 pl-4 pt-5 pb-3" style="border-radius: 15px 0 0 0;">DNI</th>
                                <th scope="col" class="border-0 pt-5 pb-3">Nombre</th>
                                <th scope="col" class="border-0 pt-5 pb-3">Celular</th>
                                <th scope="col" class="border-0 pt-5 pb-3">Rol</th>
                                <th scope="col" class="border-0 pr-2 pt-5 pb-3 text-center" style="border-radius: 0 15px 0 0;">Detalles</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="pl-4">75482151</td>
                                <td>Juan Carlos Severino Ordoñez</td>
                                <td>965 256 487</td>
                                <td>Gerente</td>
                                <td class="pr-2 text-center">
                                    <button class="btn rounded-circle border-0 p-0">
                                        <hr class="rounded-circle ic-cumple m-0">
                                    </button>
                                    <button class="btn rounded-circle border-0 p-0">
                                        <hr class="rounded-circle ic-perfil m-0">
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="pl-4">75482151</td>
                                <td>Juan Carlos Severino Ordoñez</td>
                                <td>965 256 487</td>
                                <td>Administrador</td>
                                <td class="pr-2 text-center">
                                    <button class="btn rounded-circle border-0 p-0">
                                        <hr class="rounded-circle ic-cumple m-0">
                                    </button>
                                    <button class="btn rounded-circle border-0 p-0">
                                        <hr class="rounded-circle ic-perfil m-0">
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="pl-4">75482151</td>
                                <td>Juan Carlos Severino Ordoñez</td>
                                <td>965 256 487</td>
                                <td>Secretaria</td>
                                <td class="pr-2 text-center">
                                    <button class="btn rounded-circle border-0 p-0">
                                        <hr class="rounded-circle ic-cumple m-0">
                                    </button>
                                    <button class="btn rounded-circle border-0 p-0">
                                        <hr class="rounded-circle ic-perfil m-0">
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="pl-4">75482151</td>
                                <td>Juan Carlos Severino Ordoñez</td>
                                <td>965 256 487</td>
                                <td>Administrador</td>
                                <td class="pr-2 text-center">
                                    <button class="btn rounded-circle border-0 p-0">
                                        <hr class="rounded-circle ic-cumple m-0">
                                    </button>
                                    <button class="btn rounded-circle border-0 p-0">
                                        <hr class="rounded-circle ic-perfil m-0">
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="pl-4">75482151</td>
                                <td>Juan Carlos Severino Ordoñez</td>
                                <td>965 256 487</td>
                                <td>Administrador</td>
                                <td class="pr-2 text-center">
                                    <button class="btn rounded-circle border-0 p-0">
                                        <hr class="rounded-circle ic-cumple m-0">
                                    </button>
                                    <button class="btn rounded-circle border-0 p-0">
                                        <hr class="rounded-circle ic-perfil m-0">
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!--Tabla de datos-->

                    <!--Título de tabla lista de usuarios-->
                    <div class="col-3" style="position: absolute; top: -5%; left: 7.5%;">
                        <div class="card rounded-pill border-0 bg-white">
                            <div class="row d-flex justify-content-between text-turquesa">
                                <h5 class="bold my-1 mx-auto">Lista de usuarios</h5>
                            </div>
                        </div>
                    </div>
                    <!--Título de tabla lista de usuarios-->
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!--Contenido de usuarios-->

<?php
include_once('layouts/footer.php');
?>