<?php
$page_title = 'Lote';
include_once('layouts/header.php');
?>

<!--Contenido de Lote-->
<div class="tab-pane fade show active" role="tabpanel">
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto">
    
                <!--Título de sección-->
                <div class="bold bg-white text-azul sombra rounded-pill mt-3 mb-4 d-flex align-items-center justify-content-between text-azul py-2 pl-3">Lotes Actuales</div>
                <!--Título de sección-->

            </div>
            <div class="col-11 mt-5 mx-auto">
    
                <!--Tabla de datos-->
                <table class="table table-sm table-hover table-striped text-center bg-white card-dashboard sombra mt-2">
                    <thead class="bg-turquesa border-0 bold">
                        <tr class="text-white">
                            <th scope="col" class="border-0 pl-2" style="border-radius: 15px 0 0 0;">Cod</th>
                            <th scope="col" class="border-0 text-left">Item</th>
                            <th scope="col" class="border-0 text-left">Stock</th>
                            <th scope="col" class="border-0 text-right pr-3">P. C</th>
                            <th scope="col" class="border-0 pr-0" style="border-radius: 0 15px 0 0;">F. V.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="pl-2">00002</td>
                            <td class="text-left">Café con cáscara 1 TN/PL</td>
                            <td class="text-left">4</td>
                            <td class="text-right">S/ 60 000.00</td>
                            <td class="pr-0">2019 - 10 - 24</td>
                        </tr>
                        <tr>
                            <td class="pl-2">00002</td>
                            <td class="text-left">Café con cáscara 1 TN/PL</td>
                            <td class="text-left">30</td>
                            <td class="text-right">S/ 90 000.00</td>
                            <td class="pr-0">2019 - 10 - 24</td>
                        </tr>
                        <tr>
                            <td class="pl-2">00002</td>
                            <td class="text-left">Café con cáscara 1 TN/PL</td>
                            <td class="text-left">100</td>
                            <td class="text-right">S/ 350.00</td>
                            <td class="pr-0">2019 - 10 - 24</td>
                        </tr>
                        <tr>
                            <td class="pl-2">00001</td>
                            <td class="text-left">Café con cáscara 1 TN/PL</td>
                            <td class="text-left">1</td>
                            <td class="text-right">S/ 350.00</td>
                            <td class="pr-0">2019 - 10 - 24</td>
                        </tr>
                    </tbody>
                </table>
                <!--Tabla de datos-->
    
                <!--Total-->
                <div class="row justify-content-end">
                    <div class="col-auto">
                        <div class="card bg-azul text-white bold rounded-pill sombra my-4 px-3 py-1">Total: S/ 10
                            406.00</button>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="card bg-azul text-white bold rounded-pill sombra my-4 px-3 py-1">Total: S/ 15
                            000.00</button>
                        </div>
                    </div>
                </div>
                <!--Total-->
    
            </div>
        </div>
    </div>
</div>
<!--Contenido de Lote-->

<?php
include_once('layouts/footer.php');
?>