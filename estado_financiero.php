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
                    <div class="row d-flex justify-content-between letra-azul">
                        <p class="bold my-1 ml-5">Estado financiero</p>
                        <p class="my-1 mr-5 pr-5">20 - 12 - 2019</p>
                    </div>
                </div>
                <!--Título de sección-->

                <!--Contenedores superiores-->
                <div class="row d-flex justify-content-between px-4">
                    <div class="col-3">
                        <div class="card card-dashboard border-0 sombra">
                            <h5 class="card-header bg-caja-gerencia text-white px-2">Caja Gerencia</h5>
                            <div class="card-body">
                                <div class="card-title bold h4 text-center text-gris">S/ 700.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card card-dashboard border-0 sombra">
                            <h5 class="card-header bg-caja-bancaria text-white px-2">Cuenta Bancaria</h5>
                            <div class="card-body">
                                <div class="card-title bold h4 text-center text-gris">S/ 700.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card card-dashboard border-0 sombra">
                            <h5 class="card-header bg-total text-white px-2">Total</h5>
                            <div class="card-body">
                                <div class="card-title bold h4 text-center text-gris">S/ 700.00</div>
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
                                <div class="col-3 badge badge-oscuro mt-2 mr-3 py-2 pl-3 text-left">Saldo cajas:</div>
                                <div class="col-8 badge badge-claro mt-2 py-2 pl-3 text-left">S/ 700.00</div>
                                <div class="col-3 badge badge-oscuro my-2 mr-3 py-2 pl-3 text-left">Ingresos:</div>
                                <div class="col-8 badge badge-claro my-2 py-2 pl-3 text-left">S/ 700.00</div>
                                <div class="col-3 badge badge-oscuro mb-2 mr-3 py-2 pl-3 text-left">Egresos:</div>
                                <div class="col-8 badge badge-claro mb-2 py-2 pl-3 text-left">S/ 700.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card card-dashboard border-0 sombra">
                            <div class="row px-4 py-2 justify-content-center">
                                <div class="col-3 badge badge-oscuro mt-2 mr-3 py-2 pl-3 text-left">Saldo cajas:</div>
                                <div class="col-8 badge badge-claro mt-2 py-2 pl-3 text-left">S/ 700.00</div>
                                <div class="col-3 badge badge-oscuro my-2 mr-3 py-2 pl-3 text-left">Ingresos:</div>
                                <div class="col-8 badge badge-claro my-2 py-2 pl-3 text-left">S/ 700.00</div>
                                <div class="col-3 badge badge-oscuro mb-2 mr-3 py-2 pl-3 text-left">Egresos:</div>
                                <div class="col-8 badge badge-claro mb-2 py-2 pl-3 text-left">S/ 700.00</div>
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