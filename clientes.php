<?php
$page_title = 'Clientes';
include_once('layouts/header.php');
?>

<!--Contenido de clientes-->
<div class="tab-pane fade show active" role="tabpanel">
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto">

                <!--Título de sección-->
                <div class="bold bg-white text-azul sombra rounded-pill mt-3 mb-4 d-flex align-items-center justify-content-between text-azul py-2 pl-3">Cliente</div>
                <!--Título de sección-->

                <!--Botón para registrar nuevo colaborador-->
                <div class="row justify-content-start">
                    <button class="btn btn-verde rounded-pill text-white sombra px-4 bold py-0 mt-3 mb-5 ml-3">Registrar Cliente</button>
                </div>
                <!--Botón para registrar nuevo colaborador-->

            </div>
            <div class="col-11 mx-auto">
                <div class="card card-dashboard border-0 sombra pb-3" style="position: relative;">

                    <!--Tabla de datos-->
                    <table class="table table-sm table-hover bg-white card-dashboard">
                        <thead class="bg-turquesa border-0 bold">
                            <tr class="text-white">
                                <th scope="col" class="border-0 pl-4 pt-5 pb-3" style="border-radius: 15px 0 0 0;">Nombre y apellidos
                                </th>
                                <th scope="col" class="border-0 pt-5 pb-3">Celular</th>
                                <th scope="col" class="border-0 pr-2 pt-5 pb-3" style="border-radius: 0 15px 0 0;">E-mail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="pl-4">Corporación Vespro S. A. C.</td>
                                <td>965 256 487</td>
                                <td class="pr-2">ventas@corporacionvespro.com</td>
                            </tr>
                            <tr>
                                <td class="pl-4">Industrias y derivados S. A. C.</td>
                                <td>965 256 487</td>
                                <td class="pr-2">ventas@niagara.com.pe</td>
                            </tr>
                            <tr>
                                <td class="pl-4">Agricultores cafetales S. A. C.</td>
                                <td>965 256 487</td>
                                <td class="pr-2">ventas@cafesac.com</td>
                            </tr>
                        </tbody>
                    </table>
                    <!--Tabla de datos-->

                    <!--Título de tabla lista de usuarios-->
                    <div class="col-3" style="position: absolute; top: -5%; left: 7.5%;">
                        <div class="card rounded-pill border-0 bg-white">
                            <div class="row d-flex justify-content-between text-turquesa">
                                <h5 class="bold my-1 mx-auto">Lista de Clientes</h5>
                            </div>
                        </div>
                    </div>
                    <!--Título de tabla lista de usuarios-->

                </div>
            </div>
        </div>
    </div>
</div>
<!--Contenido de clientes-->

<?php
include_once('layouts/footer.php');
?>