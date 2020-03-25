<?php
$page_title = 'Kardex';
include_once('layouts/header.php');
?>

<!--Contenido de Karkex-->
<div class="tab-pane fade show active" role="tabpanel">
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto">
    
                <!--Título de sección-->
                <div
                    class="bold bg-white text-azul sombra rounded-pill mt-3 mb-4 d-flex align-items-center justify-content-between text-azul py-2 pl-3">
                    Lotes Actuales</div>
                <!--Título de sección-->

                <div class="row justify-content-between">
                    <div class="col-auto ml-3">
                        <div class="row">
                
                            <!--Cuadro de búsqueda-->
                            <div class="card card-dashboard border-0 sombra p-0 mr-3">
                                <input type="text" class="form-control border-0 card-dashboard" placeholder="Escriba para buscar">
                            </div>
                            <!--Cuadro de búsqueda-->
                
                            <!--Botón de búsqueda-->
                            <button class="btn bg-buscar rounded-circle text-white sombra">O</button>
                            <!--Botón de búsqueda-->
                
                        </div>
                    </div>
                    <div class="col-auto">
                
                        <!--Botón de Impresión-->
                        <button class="btn bg-excel rounded-circle text-white sombra mx-2">O</button>
                        <!--Botón de Impresión-->
                
                    </div>
                </div>
            </div>
            <div class="col-11 mt-5 mx-auto">
    
                <!--Tabla de datos-->
                <table class="table table-sm table-hover table-striped text-center bg-white card-dashboard sombra mt-2">
                    <thead class="bg-turquesa border-0 bold">
                        <tr class="text-white">
                            <th scope="col" class="border-0 pl-2" style="border-radius: 15px 0 0 0;">Cod</th>
                            <th scope="col" class="border-0 text-left">Item</th>
                            <th scope="col" class="border-0 text-left">Stock</th>
                            <th scope="col" class="border-0 text-right pr-3">P. Promedio</th>
                            <th scope="col" class="border-0 pr-0" style="border-radius: 0 15px 0 0;">P. Venta</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="pl-2">00001</td>
                            <td class="text-left">Café con cáscara 1 TN/PL</td>
                            <td class="text-left">1</td>
                            <td class="text-right">S/ 3 391.67</td>
                            <td class="pr-0">S/ 60 000.00</td>
                        </tr>
                        <tr>
                            <td class="pl-2">00002</td>
                            <td class="text-left">Café con cáscara 1 TN/PL</td>
                            <td class="text-left">134</td>
                            <td class="text-right">S/ 1 783.58</td>
                            <td class="pr-0">S/ 90 000.00</td>
                        </tr>
                    </tbody>
                </table>
                <!--Tabla de datos-->
    
                <!--Total-->
                <div class="row justify-content-end">
                    <div class="col-auto">
                        <div class="card bg-azul text-white bold rounded-pill sombra my-4 px-3 py-1">Total: S/ 10 406.00</div>
                    </div>
                    <div class="col-auto">
                        <div class="card bg-azul text-white bold rounded-pill sombra my-4 px-3 py-1">Total: S/ 15 000.00</div>
                    </div>
                </div>
                <!--Total-->
    
            </div>
        </div>
    </div>
</div>
<!--Contenido de Kardex-->

<?php
include_once('layouts/footer.php');
?>