<?php
$page_title = 'Informes';
include_once('layouts/header.php');
?>

<!--Contenido de informes-->
<div class="tab-pane fade show active" role="tabpanel">
    <div class="container">
        <div class="row justify-content-center">
            
            <!--Título de sección-->
            <div class="col-10">
                <div class="bold bg-white text-azul sombra rounded-pill mt-3 mb-5 d-flex align-items-center justify-content-between text-azul py-2 pl-3">Egresos</div>
            </div>
            <!--Título de sección-->
    
            <div class="col-10 ml-3">
                <div class="card card-dashboard border-0 sombra mr-3">

                    <!--Lista de conceptos-->
                    <table class="table table-sm table-hover table-striped text-center">
                        <thead class="bg-turquesa border-0 bold">
                            <tr class="text-white">
                                <th scope="col" class="border-0 pl-2" style="border-radius: 15px 0 0 0;">Fecha</th>
                                <th scope="col" class="border-0">Documento</th>
                                <th scope="col" class="border-0">Proveedor</th>
                                <th scope="col" class="border-0">Total</th>
                                <th scope="col" class="border-0 pr-2" style="border-radius: 0 15px 0 0;">Detalle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="pl-2">2019-08-29 13:12:45</td>
                                <td>455585</td>
                                <td>Tokio</td>
                                <td>S/ 23 000.00</td>
                                <td class="pr-2 text-center">
                                    <button class="btn rounded-circle border-0 p-0">
                                        <hr class="rounded-circle ic-perfil m-0">
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!--Lista de conceptos-->

                </div>

                <!--Total-->
                <div class="row justify-content-end">
                    <div class="col-auto mr-3">
                        <div class="card bg-azul text-white bold rounded-pill sombra my-4 px-3 py-1">Total: S/ 23 000.00</button>
                        </div>
                    </div>
                </div>
                <!--Total-->

            </div>
    
        </div>
    </div>
</div>
<!--Contenido de informes-->

<?php
include_once('layouts/footer.php');
?>