<?php
$page_title = 'Editar Cliente';
include_once('layouts/header.php');
?>

<!--Contenido de clientes-->
<div class="tab-pane fade show active" role="tabpanel">
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto">

                <!--Título de sección-->
                <div class="bold bg-white text-azul sombra rounded-pill mt-3 mb-4 d-flex align-items-center justify-content-between text-azul py-2 pl-3">Lista de clientes</div>
                <!--Título de sección-->

            </div>
            <div class="col-8 mx-auto">
                <div class="card card-dashboard border-0 sombra pb-3 mt-5" style="position: relative;">

                    <form class="m-5">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-4">
                                    <label for="txtDniRuc" class="text-gris bold">DNI / RUC:</label>
                                    <input type="text" class="form-control badge-claro border-0 rounded-pill" id="txtDniRuc">
                                </div>
                                <div class="col-8">
                                    <label for="txtNombreRazonSocial" class="text-gris bold">Nombre / Razón Social:</label>
                                    <input type="text" class="form-control badge-claro border-0 rounded-pill" id="txtNombreRazonSocial">
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-4">
                                    <label for="txtCelular" class="text-gris bold">Celular:</label>
                                    <input type="text" class="form-control badge-claro border-0 rounded-pill" id="txtCelular">
                                </div>
                                <div class="col-8">
                                    <label for="txtEmail" class="text-gris bold">Celular:</label>
                                    <input type="text" class="form-control badge-claro border-0 rounded-pill" id="txtEmail">
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-12">
                                    <label for="txtDireccion" class="text-gris bold">Dirección:</label>
                                    <input type="text" class="form-control badge-claro border-0 rounded-pill" id="txtDireccion">
                                </div>
                            </div>
                        </div>
                    </form>

                    <!--Título de datos de clientes-->
                    <div class="col-auto mx-auto" style="position: absolute; top: -5%; left: 30%;">
                        <div class="card rounded-pill border-0 bg-turquesa">
                            <div class="row d-flex justify-content-between text-white">
                                <h5 class="bold my-1 mx-5">Datos de Clientes</h5>
                            </div>
                        </div>
                    </div>
                    <!--Título de datos de clientes-->

                    <!--Botón de guardar-->
                    <button class="btn btn-azul rounded-pill px-5 text-white bold" style="position: absolute; bottom: -5%; left: 40%;">Guardar</button>
                    <!--Botón de guardar-->

                </div>
            </div>
        </div>
    </div>
</div>
<!--Contenido de clientes-->

<?php
include_once('layouts/footer.php');
?>