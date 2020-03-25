<?php
$page_title = 'Stock';
include_once('layouts/header.php');
?>

<!--Contenido de Stock-->
<div class="tab-pane fade show active" role="tabpanel">
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto">

                <!--Lista desplegable con el título de sección-->
                <div class="dropdown mb-4">
                    <a class="btn bold bg-white text-azul sombra dropdown-toggle rounded-pill mt-3 d-flex align-items-center justify-content-between text-azul" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Stock al día</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Stock</a>
                        <a class="dropdown-item" href="#">Lote</a>
                        <a class="dropdown-item" href="#">Kardex</a>
                    </div>
                </div>
                <!--Lista desplegable con el título de sección-->

                <div class="row justify-content-between">
                    <div class="col-auto ml-3">
                        <div class="row">
                
                            <!--Cuadro de búsqueda-->
                            <div class="card card-dashboard border-0 sombra p-0 mr-3">
                                <input type="text" class="form-control border-0 card-dashboard" placeholder="dd/mm/aaaa">
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
                            <th scope="col" class="border-0 text-right">P. Promedio</th>
                            <th scope="col" class="border-0 pr-4 text-right" style="border-radius: 0 15px 0 0;">P. Venta</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="pl-2">00001</td>
                            <td class="text-left">Café con cáscara 1 TN/PL</td>
                            <td class="text-left">1</td>
                            <td class="text-right">S/ 3 391.67</td>
                            <td class="pr-4 text-right">S/ 60 000.00</td>
                        </tr>
                        <tr>
                            <td class="pl-2">00002</td>
                            <td class="text-left">Café con cáscara 1 TN/PL</td>
                            <td class="text-left">134</td>
                            <td class="text-right">S/ 1 783.58</td>
                            <td class="pr-4 text-right">S/ 90 000.00</td>
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
                    <div class="col-auto">
                        <div class="card bg-azul text-white bold rounded-pill sombra my-4 px-3 py-1">Total: S/ 15 000.00</button>
                        </div>
                    </div>
                </div>
                <!--Total-->
            
            </div>
        </div>
    </div>
</div>
<!--Contenido de Stock-->

<?php
include_once('layouts/footer.php');
?>