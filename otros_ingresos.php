<?php
$page_title = 'Otros ingresos';
include_once('layouts/header.php');
?>

<!--Cotenido de otros ingresos-->
<div class="tab-pane fade show active" role="tabpanel">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">

                <!--Título de sección-->
                <div class="card rounded-pill border-0 bg-white sombra mt-3">
                    <div class="row d-flex letra-azul">
                        <p class="bold my-1 ml-5">Ingresos</p>
                    </div>
                </div>
                <!--Título de sección-->

                <!--Combo de tipo-->
                <div class="dropdown">
                    <a class="btn bold bg-turquesa text-white sombra dropdown-toggle rounded-pill ml-3 w-25 d-flex justify-content-between align-items-center my-3"
                        href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Tipo de comprobante
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Boleta</a>
                        <a class="dropdown-item" href="#">Factura</a>
                    </div>
                </div>
                <!--Combo de tipo-->

                <!--Contenedor de datos-->
                <div class="container ml-3">
                    <div class="row">
                        <div class="card card-dashboard mr-5 sombra border-0 px-5 py-4 w-100">

                            <!--Formulario de venta-->
                            <form>

                                <!--Caja de texto para DNI / RUC-->
                                <div class="form-group">
                                    <label for="txtDniRuc" class="bold text-gris">DNI / RUC:</label>
                                    <input type="text" class="form-control rounded-pill badge-claro border-0 w-25"
                                        id="txtDniRuc">
                                </div>
                                <!--Caja de texto para DNI / RUC-->

                                <!--Caja de texto para nombre-->
                                <div class="form-group">
                                    <label for="txtNombre" class="bold text-gris">Nombre / Razón Social:</label>
                                    <input type="text" class="form-control rounded-pill badge-claro border-0 w-75"
                                        id="txtNombre">
                                </div>
                                <!--Caja de texto para nombre-->

                                <div class="row">
                                    <div class="col-9">

                                        <!--Lista desplegable para items de venta-->
                                        <div class="form-group">
                                            <label for="txtItemsVenta" class="bold text-gris">Items de venta:</label>
                                            <div class="dropdown">
                                                <a class="btn bold badge-claro dropdown-toggle rounded-pill d-flex justify-content-end align-items-center py-3"
                                                    href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="#">Item 1</a>
                                                    <a class="dropdown-item" href="#">Item 2</a>
                                                    <a class="dropdown-item" href="#">Item 3</a>
                                                    <a class="dropdown-item" href="#">Item 4</a>
                                                    <a class="dropdown-item" href="#">Item 5</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Lista desplegable para items de venta-->

                                    </div>
                                    <div class="col-3">

                                        <!--Caja de texto para cantidad-->
                                        <div class="form-group">
                                            <label for="txtCantidad" class="bold text-gris">Cantidad :</label>
                                            <input type="text" class="form-control rounded-pill badge-claro border-0"
                                                id="txtCantidad">
                                        </div>
                                        <!--Caja de texto para cantidad-->

                                    </div>
                                </div>
                                <div class="row justify-content-end">

                                    <!--Botón para agregar al carrito-->
                                    <div class="col-3">
                                        <button class="btn btn-azul rounded-pill text-white bold w-100 my-2"
                                            type="submit">Agregar al Carrito</button>
                                    </div>
                                    <!--Botón para agregar al carrito-->

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--Contenedor de datos personales-->

                <!--Relación de cosas-->
                <div class="container">
                    <h5 class="titulo text-azul my-3">Relación de Cosas</h5>
                    <div class="panel panel-default card card-dashboard border-0 sombra mr-3">
                        <table class="table table-hover">
                            <thead class="thead-verde rounded-pill bold">
                                <tr class="text-white">
                                    <th scope="col">Producto</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Precio</th>
                                </tr>
                            </thead>
                            <tbody class="pl-5">
                                <tr>
                                    <td>1. GPS Vespro</td>
                                    <td>1</td>
                                    <td>S/ 60.00</td>
                                </tr>
                                <tr>
                                    <td>2. GPS Vespro</td>
                                    <td>1</td>
                                    <td>S/ 60.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!--Botón guardar-->
                    <div clas="row">
                        <div class="col-3 ml-auto">
                            <button class="btn btn-azul text-white bold w-100 rounded-pill sombra my-4">Guardar</button>
                        </div>
                    </div>
                    <!--Botón guardar-->

                </div>
                <!--Relación de cosas-->

            </div>
        </div>
    </div>
</div>
<!--Contenido de otros ingresos-->

<?php
include_once('layouts/footer.php');
?>