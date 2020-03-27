<?php
$page_title = 'Estado Financiero';
include_once('layouts/header.php');
?>

<!--Contenido de estado financiero-->
<div class="tab-pane fade show active" role="tabpanel">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">

                <!--Título de sección-->
                <div class="card rounded-pill border-0 bg-white sombra mt-3 mb-5">
                    <div class="row justify-content-between letra-azul">
                        <div class="d-flex flex-row ml-5">
                            <i class="fas fa-file-invoice-dollar fa-md my-auto mr-3"></i>
                            <p class="bold my-1">Estado Financiero</p>
                        </div>
                        <p class="my-1 mr-5">20 - 12 - 2019</p>
                    </div>
                </div>
                <!--Título de sección-->

                <!--Contenedores superiores-->
                <div class="row d-flex justify-content-between px-4">
                    <div class="col-4">
                        <div class="card card-dashboard border-0 sombra mx-3">
                            <div class="card-header bg-caja-gerencia text-white d-flex flex-row align-items-center justify-content-between px-3">
                                <h5 class="bold my-0">Caja Gerencia</h5>
                                <i class="fas fa-building fa-lg"></i>
                            </div>
                            <div class="card-body">
                                <div class="card-title bold h3 text-center text-gris">S/ 700.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card card-dashboard border-0 sombra mx-3">
                            <div class="card-header bg-caja-bancaria text-white d-flex flex-row align-items-center justify-content-between px-3">
                                <h5 class="bold my-0">Cuenta Bancaria</h5>
                                <i class="fas fa-credit-card fa-lg"></i>
                            </div>
                            <div class="card-body">
                                <div class="card-title bold h3 text-center text-gris">S/ 700.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card card-dashboard border-0 sombra mx-3">
                            <div class="card-header bg-total text-white d-flex flex-row align-items-center justify-content-between px-3">
                                <h5 class="bold my-0">Total</h5>
                                <i class="fas fa-database fa-lg"></i>
                            </div>
                            <div class="card-body">
                                <div class="card-title bold h3 text-center text-gris">S/ 700.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Contenedores superiores-->

                <!--Contenedores inferiores-->
                <div class="row d-flex justify-content-between px-4 mt-5 pt-4">
                    <div class="col-6">
                        <div class="card card-dashboard border-0 sombra">
                            <div class="row px-4 py-2 justify-content-center">
                                <div class="text-left t-13 col-3 badge badge-oscuro mr-3 mt-2 pl-3 py-2">Saldo cajas:</div>
                                <div class="text-left t-13 col-8 badge badge-claro mt-2 pl-3 py-2">S/ 700.00</div>
                                <div class="text-left t-13 col-3 badge badge-oscuro mr-3 my-2 pl-3 py-2">Ingresos:</div>
                                <div class="text-left t-13 col-8 badge badge-claro my-2 pl-3 py-2">S/ 700.00</div>
                                <div class="text-left t-13 col-3 badge badge-oscuro mr-3 mb-2 pl-3 py-2">Egresos:</div>
                                <div class="text-left t-13 col-8 badge badge-claro mb-2 pl-3 py-2">S/ 700.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card card-dashboard border-0 sombra">
                            <div class="row px-4 py-2 justify-content-center">
                                <div class="text-left t-13 col-3 badge badge-oscuro mr-3 mt-2 pl-3 py-2">Saldo cajas:</div>
                                <div class="text-left t-13 col-8 badge badge-claro mt-2 pl-3 py-2">S/ 700.00</div>
                                <div class="text-left t-13 col-3 badge badge-oscuro mr-3 my-2 pl-3 py-2">Ingresos:</div>
                                <div class="text-left t-13 col-8 badge badge-claro my-2 pl-3 py-2">S/ 700.00</div>
                                <div class="text-left t-13 col-3 badge badge-oscuro mr-3 mb-2 pl-3 py-2">Egresos:</div>
                                <div class="text-left t-13 col-8 badge badge-claro mb-2 pl-3 py-2">S/ 700.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Contenedores inferiores-->

            </div>
        </div>
    </div>
</div>
<!--Contenido de estado financiero-->

<?php
include_once('layouts/footer.php');
?>