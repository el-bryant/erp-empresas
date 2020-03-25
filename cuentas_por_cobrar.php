<?php
$page_title = 'Cuentas por Cobrar';
include_once('layouts/header.php');
?>

<!--Contenido de tareas a realizar-->
<div class="tab-pane fade show active" role="tabpanel">
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto">

                <!--Título de sección-->
                <div class="bold bg-white text-azul sombra rounded-pill mt-3 mb-4 d-flex align-items-center justify-content-between text-azul py-2 pl-3">Cuentas por cobrar</div>
                <!--Título de sección-->

                <div class="row justify-content-between">
                    <div class="col-auto ml-3">
                        <div class="row">
                            
                            <!--Cuadro de búsqueda-->
                            <div class="card card-dashboard border-0 sombra p-0 mr-3">
                                <input type="text" class="form-control border-0 card-dashboard" placeholder="Escribe Nombre del producto">
                            </div>
                            <!--Cuadro de búsqueda-->

                            <!--Botón de búsqueda-->
                            <button class="btn bg-buscar rounded-circle text-white sombra">O</button>
                            <!--Botón de búsqueda-->

                        </div>
                    </div>
                    
                    <!--Botonera de herramientas-->
                    <div class="col-auto mr-3">
                        <div class="row">

                            <!--Botón de Word-->
                            <button class="btn bg-word rounded-circle text-white sombra mx-2">O</button>
                            <!--Botón de Word-->

                            <!--Botón de PDF-->
                            <button class="btn bg-pdf rounded-circle text-white sombra mx-2">O</button>
                            <!--Botón de PDF-->

                            <!--Botón de Excel-->
                            <button class="btn bg-excel rounded-circle text-white sombra mx-2">O</button>
                            <!--Botón de Excel-->

                        </div>
                    </div>
                    <!--Botonera de herramientas-->

                </div>
            </div>
            <div class="col-11 mt-5 mx-auto">

                <!--Tabla de datos-->
                <table class="table table-sm table-hover table-striped text-center bg-white card-dashboard sombra mt-2">
                    <thead class="bg-turquesa border-0 bold">
                        <tr class="text-white">
                            <th scope="col" class="border-0 pl-2" style="border-radius: 15px 0 0 0;">N°</th>
                            <th scope="col" class="border-0">Cliente</th>
                            <th scope="col" class="border-0">Celular</th>
                            <th scope="col" class="border-0">Concepto</th>
                            <th scope="col" class="border-0">Total</th>
                            <th scope="col" class="border-0">Cuotas</th>
                            <th scope="col" class="border-0 pr-2" style="border-radius: 0 15px 0 0;">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="pl-2">01</td>
                            <td>Armando Lios</td>
                            <td>983736153</td>
                            <td>Farola-Semanal</td>
                            <td>S/ 28.00</td>
                            <td>185 + S/ 23.00</td>
                            <td class="pr-2 text-center">S/ 5 203.00</td>
                        </tr>
                        <tr>
                            <td class="pl-2">02</td>
                            <td>Armando Lios</td>
                            <td>983736153</td>
                            <td>Farola-Semanal</td>
                            <td>S/ 28.00</td>
                            <td>185 + S/ 23.00</td>
                            <td class="pr-2 text-center">S/ 5 203.00</td>
                        </tr>
                    </tbody>
                </table>
                <!--Tabla de datos-->

                <!--Total-->
                <div class="row justify-content-end">
                    <div class="col-auto">
                        <div class="card bg-azul text-white bold rounded-pill sombra my-4 px-3 py-1">Total: S/ 10 406.00</button>
                        </div>
                    </div>
                </div>
                <!--Total-->

            </div>
        </div>
    </div>
</div>
<!--Contenido de tareas a realizar-->

<?php
include_once('layouts/footer.php');
?>