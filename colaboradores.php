<?php
$page_title = 'Colaboradores';
include_once('layouts/header.php');
?>

<!--Contenido de colaboradores-->
<div class="tab-pane fade show active" role="tabpanel">
    <div class="row justify-content-center"  style="position: relative;">
        <div class="col-10">
            
            <!--Botón para registrar nuevo colaborador-->
            <div class="row justify-content-end">
                <div class="btn btn-verde rounded-pill text-white sombra px-4 bold py-1 my-4 mr-3">Registrar Nuevo</div>
            </div>
            <!--Botón para registrar nuevo colaborador-->

            <div class="card card-dashboard sombra">

                <!--Tabla lista de colaboradores-->
                <table class="table">
                    <thead>
                        <tr class="thead-verde text-white">
                            <th scope="col" class="pl-4 pt-4">Usuarios</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Rol</th>
                            <th scope="col" class="text-center">Detalles</th>
                            <th scope="col" class="text-center pr-4">Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="pl-4 py-2">Juan Carlos Severino Ordoñez</th>
                            <td class="py-2">965 256 487</td>
                            <td class="py-2">Administrador</td>
                            <td class="py-2 text-center">
                                <button class="btn rounded-circle border-0 p-0">
                                    <hr class="rounded-circle ic-cumple m-0">
                                </button>
                            </td>
                            <td class="pr-4 py-2 text-center">
                                <button class="btn rounded-circle border-0 p-0">
                                    <hr class="rounded-circle ic-perfil m-0">
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="pl-4 py-2">Juan Carlos Severino Ordoñez</th>
                            <td class="py-2">965 256 487</td>
                            <td class="py-2">Administrador</td>
                            <td class="py-2 text-center">
                                <button class="btn rounded-circle border-0 p-0">
                                    <hr class="rounded-circle ic-cumple my-0">
                                </button>
                            </td>
                            <td class="pr-4 py-2 text-center">
                                <button class="btn rounded-circle border-0 p-0">
                                    <hr class="rounded-circle ic-perfil m-0">
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="pl-4 py-2">Juan Carlos Severino Ordoñez</th>
                            <td class="py-2">965 256 487</td>
                            <td class="py-2">Administrador</td>
                            <td class="py-2 text-center">
                                <button class="btn rounded-circle border-0 p-0">
                                    <hr class="rounded-circle ic-cumple my-0">
                                </button>
                            </td>
                            <td class="pr-4 py-2 text-center">
                                <button class="btn rounded-circle border-0 p-0">
                                    <hr class="rounded-circle ic-perfil m-0">
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="pl-4 py-2">Juan Carlos Severino Ordoñez</th>
                            <td class="py-2">965 256 487</td>
                            <td class="py-2">Administrador</td>
                            <td class="py-2 text-center">
                                <button class="btn rounded-circle border-0 p-0">
                                    <hr class="rounded-circle ic-cumple my-0">
                                </button>
                            </td>
                            <td class="pr-4 py-2 text-center">
                                <button class="btn rounded-circle border-0 p-0">
                                    <hr class="rounded-circle ic-perfil m-0">
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="pl-4 py-2">Juan Carlos Severino Ordoñez</th>
                            <td class="py-2">965 256 487</td>
                            <td class="py-2">Administrador</td>
                            <td class="py-2 text-center">
                                <button class="btn rounded-circle border-0 p-0">
                                    <hr class="rounded-circle ic-cumple my-0">
                                </button>
                            </td>
                            <td class="pr-4 py-2 text-center">
                                <button class="btn rounded-circle border-0 p-0">
                                    <hr class="rounded-circle ic-perfil m-0">
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="pl-4 py-2">Juan Carlos Severino Ordoñez</th>
                            <td class="py-2">965 256 487</td>
                            <td class="py-2">Administrador</td>
                            <td class="py-2 text-center">
                                <button class="btn rounded-circle border-0 p-0">
                                    <hr class="rounded-circle ic-cumple my-0">
                                </button>
                            </td>
                            <td class="pr-4 py-2 text-center">
                                <button class="btn rounded-circle border-0 p-0">
                                    <hr class="rounded-circle ic-perfil m-0">
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="pl-4 py-2">Juan Carlos Severino Ordoñez</th>
                            <td class="py-2">965 256 487</td>
                            <td class="py-2">Administrador</td>
                            <td class="py-2 text-center">
                                <button class="btn rounded-circle border-0 p-0">
                                    <hr class="rounded-circle ic-cumple my-0">
                                </button>
                            </td>
                            <td class="pr-4 py-2 text-center">
                                <button class="btn rounded-circle border-0 p-0">
                                    <hr class="rounded-circle ic-perfil m-0">
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!--Tabla lista de colaboradores-->

            </div>
        </div>
        
        <!--Título de tabla lista de colaboradores-->
        <div class="col-3" style="position: absolute; top: 15%; left: 15%;">
            <div class="card rounded-pill border-0 bg-white">
                <div class="row d-flex justify-content-between text-turquesa">
                    <h5 class="bold my-1 mx-auto">Lista de colaboradores</h5>
                </div>
            </div>
        </div>
        <!--Título de tabla lista de colaboradores-->

    </div>
</div>
<!--Contenido de colaboradores-->

<?php
include_once('layouts/footer.php');
?>