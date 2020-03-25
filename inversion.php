<?php
$page_title = 'Inversión';
include_once('layouts/header.php');
?>

<!--Contenido de inversión-->
<div class="tab-pane fade show active" role="tabpanel">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">

                <!--Lista desplegable con el título de sección-->
                <div class="dropdown">
                    <a class="btn bold bg-white text-azul sombra dropdown-toggle rounded-pill ml-3 mt-3 d-flex align-items-center justify-content-between text-azul"
                        href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Inversión
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Inversión</a>
                        <a class="dropdown-item" href="#">Otros egresos</a>
                    </div>
                </div>
                <!--Lista desplegable con el título de sección-->
            
            </div>
            
            <!--Formulario de registro de egresos-->
            <div class="col-8">
                <div class="card card-dashboard border-0 sombra my-5 p-3">
                    <form style="position: relative;">
                        <div class="form-group">
                            <label for="txtRazonSocial" class="bold text-gris">Razón Social:</label>
                            <input type="text" class="form-control rounded-pill border-0 badge-claro" id="txtRazonSocial">
                        </div>
                        <div class="row mb-3">
                            <div class="col-6 pr-4">
                                <label for="txtNDocumento" class="bold text-gris">N° de Documento:</label>
                                <input type="text" class="form-control rounded-pill border-0 badge-claro" id="txtNDocumento">
                            </div>
                            <div class="col-6 pl-4">
                                <label for="txtTipoDocumento" class="bold text-gris">Tipo de Documento:</label>
                                <input type="text" class="form-control rounded-pill border-0 badge-claro" id="txtTipoDocumento">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="txtConcepto" class="bold text-gris">Concepto:</label>
                            <input type="text" class="form-control rounded-pill border-0 badge-claro" id="txtConcepto">
                        </div>
                        <div class="form-group">
                            <label for="txtDescripcion" class="bold text-gris">Descripción:</label>
                            <input type="text" class="form-control rounded-pill border-0 badge-claro" id="txtDescripcion">
                        </div><div class="row mb-3">
                            <div class="col-6 pr-4">
                                <label for="txtPrecio" class="bold text-gris">Precio:</label>
                                <input type="text" class="form-control rounded-pill border-0 badge-claro" id="txtPrecio">
                            </div>
                            <div class="col-6 pl-4">
                                <label for="txtCantidad" class="bold text-gris">Cantidad:</label>
                                <input type="text" class="form-control rounded-pill border-0 badge-claro" id="txtCantidad">
                            </div>
                        </div>
                        <div class="form group">
                            <label class="bold text-gris">Total:</label>
                            <div class="rounded-pill border-0 bg-turquesa py-2 text-center text-white mb-4">S/ 0.00</div>
                        </div>
                        <div class="btn btn-azul rounded-pill px-5 text-white bold" style="position: absolute; bottom: -8%; left: 38%;">Guardar</div>
                    </form>
                </div>
            </div>
            <!--Formulario de registro de egresos-->

        </div>
    </div>
</div>
<!--Contenido de inversión-->

<?php
include_once('layouts/footer.php');
?>