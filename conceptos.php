<?php
$page_title = 'Conceptos';
include_once('layouts/header.php');
?>

<!--Contenido de conceptos-->
<div class="tab-pane fade show active" role="tabpanel">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
        
                <!--Lista desplegable con el título de sección-->
                <div class="dropdown">
                    <a class="btn bold bg-white text-azul sombra dropdown-toggle rounded-pill ml-3 mt-3 d-flex align-items-center justify-content-between text-azul"
                        href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Ingreso
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Ingreso</a>
                        <a class="dropdown-item" href="#">Egreso</a>
                    </div>
                </div>
                <!--Lista desplegable con el título de sección-->
        
            </div>

            <!--Nombre y tipo de conceptos-->
            <div class="col-5">
                <div class="card card-dashboard sombra border-0 m-5 p-3">
                    <form style="position: relative;">
                        <div class="form-group">
                            <label for="txtNombreConcepto" class="bold text-gris">Nombre de Concepto</label>
                            <input type="text" class="form-control border-0 badge-claro rounded-pill">
                        </div>
                        <div class="form-group mb-4">
                            <label for="txtTipoConcepto" class="bold text-gris">Tipo de Concepto</label>
                            <input type="text" class="form-control border-0 badge-claro rounded-pill">
                        </div>
                        <button type="submit" class="btn bg-azul text-white bold rounded-pill px-5" style="position:absolute; bottom: -20%; left: 25%;">Guardar</button>
                    </form>
                </div>
            </div>
            <!--Nombre y tipo de conceptos-->

            <!--Lista de conceptos-->
            <div class="col-8">
                <div class="panel panel-default card card-dashboard border-0 sombra mr-3" style="position: relative;">
                    <div class="card-header bg-turquesa text-white text-center bold">Lista de conceptos</div>
                    <table class="table table-sm table-hover table-striped text-center">
                        <thead class="text-gris bold">
                            <tr>
                                <th scope="col" class="border-0 pl-2">#</th>
                                <th scope="col" class="border-0">Nombre concepto</th>
                                <th scope="col" class="border-0 pr-2">Tipo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="pl-2">1</td>
                                <td></td>
                                <td class="pr-2"></td>
                            </tr>
                            <tr>
                                <td class="pl-2">2</td>
                                <td></td>
                                <td class="pr-2"></td>
                            </tr>
                            <tr>
                                <td class="pl-2">3</td>
                                <td></td>
                                <td class="pr-2"></td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-azul text-white bold rounded-pill sombra my-4 px-5" style="position: absolute; bottom: -24%; left: 40%;">Guardar</button>
                </div>                                
            </div>
            <!--Lista de conceptos-->

        </div>
    </div>
</div>
<!--Contenido de conceptos-->

<?php
include_once('layouts/footer.php');
?>