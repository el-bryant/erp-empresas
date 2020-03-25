<?php
$page_title = 'Proveedores';
include_once('layouts/header.php');
?>

<!--Contenido de proveedores-->
<div class="tab-pane fade show active" role="tabpanel">
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto">
    
                <!--Título de sección-->
                <div class="bold bg-white text-azul sombra rounded-pill mt-3 mb-4 d-flex align-items-center justify-content-between text-azul py-2 pl-3">Proveedores</div>
                <!--Título de sección-->
    
                <div class="row justify-content-between">
                    <div class="col-auto ml-3">
                        <div class="row">
                    
                            <!--Cuadro de búsqueda-->
                            <div class="card card-dashboard border-0 sombra p-0 mr-3">
                                <input type="text" class="form-control border-0 card-dashboard" placeholder="Buscar proveedor">
                            </div>
                            <!--Cuadro de búsqueda-->
                    
                            <!--Botón de búsqueda-->
                            <button class="btn bg-buscar rounded-circle text-white sombra">O</button>
                            <!--Botón de búsqueda-->
                    
                        </div>
                    </div>

                    <!--Botón para registrar nuevo colaborador-->
                    <div class="col-auto">
                        <button class="btn btn-verde rounded-pill text-white sombra px-4 bold py-0 mt-2 mb-5 ml-3">Registrar Proveedor</button>
                    </div>
                    <!--Botón para registrar nuevo colaborador-->

                </div>
            </div>
            <div class="col-11 mx-auto">
                <div class="card card-dashboard border-0 sombra pb-3" style="position: relative;">
    
                    <!--Tabla de datos-->
                    <table class="table table-sm table-hover bg-white card-dashboard">
                        <thead class="bg-turquesa border-0 bold">
                            <tr class="text-white">
                                <th scope="col" class="border-0 pl-4 pt-5 pb-3" style="border-radius: 15px 0 0 0;">RUC</th>
                                <th scope="col" class="border-0 pt-5 pb-3">Nombre</th>
                                <th scope="col" class="border-0 pt-5 pb-3">Celular</th>
                                <th scope="col" class="border-0 pr-2 pt-5 pb-3" style="border-radius: 0 15px 0 0;">E-mail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="pl-4">20601682762</td>
                                <td>Corporación Vespro S. A. C.</td>
                                <td>965 256 487</td>
                                <td class="pr-2">ventas@corporacionvespro.com</td>
                            </tr>
                            <tr>
                                <td class="pl-4">20601682762</td>
                                <td>Corporación Vespro S. A. C.</td>
                                <td>965 256 487</td>
                                <td class="pr-2">ventas@corporacionvespro.com</td>
                            </tr>
                            <tr>
                                <td class="pl-4">20601682762</td>
                                <td>Corporación Vespro S. A. C.</td>
                                <td>965 256 487</td>
                                <td class="pr-2">ventas@corporacionvespro.com</td>
                            </tr>
                        </tbody>
                    </table>
                    <!--Tabla de datos-->
    
                    <!--Título de tabla lista de proveedores-->
                    <div class="col-auto" style="position: absolute; top: -5%; left: 7.5%;">
                        <div class="card rounded-pill border-0 bg-white px-3">
                            <div class="row d-flex justify-content-between text-turquesa mx-auto">
                                <h5 class="bold my-1 mx-auto">Lista de Proveedores</h5>
                            </div>
                        </div>
                    </div>
                    <!--Título de tabla lista de proveedores-->
    
                </div>
            </div>
        </div>
    </div>
</div>
<!--Contenido de proveedores-->

<?php
include_once('layouts/footer.php');
?>