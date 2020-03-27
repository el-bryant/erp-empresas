<ul class="list-unstyled">
    
    <!--Estado financiero-->
    <li>
        <a class="nav-link d-flex flex-row align-items-center pl-0" id="navEstadoFinanciero" href="estado_financiero.php" role="tab">
            <i class="fas fa-file-invoice-dollar fa-md col-1 px-auto"></i>
            <p class="col-11 my-0 pl-2">Estado financiero</p>
        </a>
    </li>
    <!--Estado financiero-->

    <!--Ingresos-->
    <li>
        <div class="nav-link d-flex flex-row align-items-center">
            <i class="fas fa-plus-circle fa-md col-1 pl-0"></i>
            <a class="nav-link dropdown-toggle d-flex flex-row align-items-center justify-content-between col-11 m-0 p-0" id="navIngresos" href="#ingresosSM" data-toggle="collapse" aria-expanded="false">
                <p class="ml-2 my-0">Ingresos</p>
            </a>
        </div>
        <ul class="collapse list-unstyled" id="ingresosSM">

            <!--Venta-->
            <li>
                <a class="nav-link d-flex flex-row align-items-center ml-4 pl-0" id="subnavVenta" href="venta.php" role="tab">
                    <i class="fas fa-shopping-cart fa-md col-1 px-auto"></i>
                    <p class="col-11 my-0 ml-0 pl-2">Venta</p>
                </a>
            </li>
            <!--Venta-->

            <!--Otros ingresos-->
            <li>
                <a class="nav-link d-flex flex-row align-items-center ml-4 pl-0" id="subnavOtrosIngresos" href="otros_ingresos.php" role="tab">
                    <i class="fas fa-money-check-alt fa-md col-1 px-auto"></i>
                    <p class="col-11 my-0 ml-0 pl-2">Otros ingresos</p>
                </a>
            </li>
            <!--Otros ingresos-->

        </ul>
    </li>
    <!--Ingresos-->

    <!--Egresos-->
    <li>
        <div class="d-flex flex-row align-items-center nav-link">
            <i class="fas fa-minus-circle fa-md col-1 pl-0"></i>
            <a class="nav-link dropdown-toggle d-flex flex-row align-items-center justify-content-between col-11 m-0 p-0" id="navEgresos" href="#egresosSM" data-toggle="collapse" aria-expanded="false">
                <p class="ml-2 my-0">Egresos</p>
            </a>
        </div>
        <ul class="collapse list-unstyled" id="egresosSM">

            <!--Inversión-->
            <li>
                <a class="nav-link d-flex flex-row align-items-center ml-4 pl-0" id="subnavInversion" href="inversion.php" role="tab">
                    <i class="fas fa-coins fa-md col-1 px-auto"></i>
                    <p class="col-11 my-0 ml-0 pl-2">Inversión</p>
                </a>
            </li>
            <!--Inversión-->
            
            <!--Otros egresos-->
            <li>
                <a class="nav-link d-flex flex-row align-items-center ml-4 pl-0" id="subnavOtrosEgresos" href="otros_egresos.php" role="tab">
                    <i class="fas fa-money-bill fa-md col-1 px-auto"></i>
                    <p class="col-11 my-0 ml-0 pl-2">Otros egresos</p>
                </a>
            </li>
            <!--Otros egresos-->

        </ul>
    </li>
    <!--Egresos-->

    <!--Conceptos-->
    <li>
        <a class="nav-link d-flex flex-row align-items-center pl-0" id="navConceptos" href="conceptos.php" role="tab">
            <i class="fas fa-list-alt fa-md col-1 px-auto"></i>
            <p class="col-11 my-0 pl-2">Conceptos</p>
        </a>
    </li>
    <!--Conceptos-->

    <!--Colaboradores-->
    <li>
        <a class="nav-link d-flex flex-row align-items-center pl-0" id="navColaboradores" href="colaboradores.php" role="tab">
            <i class="fas fa-user-tie fa-md col-1 px-auto"></i>
            <p class="col-11 my-0 pl-2">Colaboradores</p>
        </a>
    </li>
    <!--Colaboradores-->

    <!--Informes-->
    <li>
        <a class="nav-link d-flex flex-row align-items-center pl-0" id="navInformes" href="informes.php" role="tab">
            <i class="fas fa-file-contract fa-md col-1 px-auto"></i>
            <p class="col-11 my-0 pl-2">Informes</p>
        </a>
    </li>
    <!--Informes-->

    <!--Tareas a realizar-->
    <li>
        <div class="d-flex flex-row align-items-center nav-link">
            <i class="fas fa-clipboard-list fa-md col-1 pl-0"></i>
            <a class="nav-link dropdown-toggle d-flex flex-row align-items-center justify-content-between col-11 m-0 p-0" id="navTareas" href="#tareasSM" data-toggle="collapse" aria-expanded="false">
                <p class="my-0 ml-2">Tareas a realizar</p>
            </a>
        </div>
        <ul class="collapse list-unstyled" id="tareasSM">

            <!--Cuentas por cobrar-->
            <li>
                <a class="nav-link d-flex flex-row align-items-center ml-4 pl-0" id="subnavCuentas" href="cuentas_por_cobrar.php" role="tab">
                    <i class="fas fa-search-dollar fa-md col-1 px-auto"></i>
                    <p class="col-11 my-0 pl-2">Cuentas por cobrar</p>
                </a>
            </li>
            <!--Cuentas por cobrar-->

        </ul>
    </li>
    <!--Tareas a realizar-->

    <!--Contactos-->
    <li>
        <div class="d-flex flex-row align-items-center nav-link">
            <i class="fas fa-user-friends fa-md col-1 pl-0"></i>
            <a class="nav-link dropdown-toggle d-flex flex-row align-items-center justify-content-between col-11 m-0 p-0" id="navContactos" href="#contactosSM" data-toggle="collapse" aria-expanded="false">
                <p class="my-0 ml-2">Contactos</p>
            </a>
        </div>
        <ul class="collapse list-unstyled" id="contactosSM">

            <!--Usuarios-->
            <li>
                <a class="nav-link d-flex flex-row align-items-center ml-4 pl-0" id="subnavUsuarios" href="usuarios.php" role="tab">
                    <i class="fas fa-user fa-md col-1 px-auto"></i>
                    <p class="col-11 my-0 pl-2">Usuarios</p>
                </a>
            </li>
            <!--Usuarios-->

            <!--Clientes-->
            <li>
                <a class="nav-link d-flex flex-row align-items-center ml-4 pl-0" id="subnavClientes" href="clientes.php" role="tab">
                    <i class="fas fa-user-check fa-md col-1 px-auto"></i>
                    <p class="col-11 my-0 pl-2">Clientes</p>
                </a>
            </li>
            <!--Clientes-->

            <!--Prospectos-->
            <li>
                <a class="nav-link d-flex flex-row align-items-center ml-4 pl-0" id="subnavProspectos" href="prospectos.php" role="tab">
                    <i class="fas fa-user-plus fa-md col-1 px-auto"></i>
                    <p class="col-11 my-0 pl-2">Prospectos</p>
                </a>
            </li>
            <!--Prospectos-->

            <!--Proveedores-->
            <li>
                <a class="nav-link d-flex flex-row align-items-center ml-4 pl-0" id="subnavProveedores" href="proveedores.php" role="tab">
                    <i class="fas fa-user-tag fa-md col-1 px-auto"></i>
                    <p class="col-11 my-0 pl-2">Proveedores</p>
                </a>
            </li>
            <!--Proveedores-->

        </ul>
    </li>
    <!--Contactos-->

    <!--Notificaciones-->
    <li>
        <a class="nav-link d-flex flex-row align-items-center pl-0" id="navNotificaciones" href="notificaciones.php" role="tab">
            <i class="fas fa-bell fa-md col-1 px-auto"></i>
            <p class="col-11 my-0 pl-2">Notificaciones</p>
        </a>
    </li>
    <!--Notificaciones-->
    
    <!--Calendario-->
    <li>
        <a class="nav-link d-flex flex-row align-items-center pl-0" id="navCalendario" href="calendario.php" role="tab">
            <i class="fas fa-calendar-alt fa-md col-1 px-auto"></i>
            <p class="col-11 my-0 pl-2">Calendario</p>
        </a>
    </li>
    <!--Calendario-->

    <!--Configuración-->
    <li>
        <a class="nav-link d-flex flex-row align-items-center pl-0" id="navConfiguracion" href="configuracion.php" role="tab">
            <i class="fas fa-user-cog fa-md col-1 px-auto"></i>
            <p class="col-11 my-0 pl-2">Configuración</p>
        </a>
    </li>
    <!--Configuración-->
    
    <!--Inventario-->
    <li>
        <div class="d-flex flex-row align-items-center nav-link">
            <i class="fas fa-barcode fa-md col-1 pl-0"></i>
            <a class="nav-link dropdown-toggle d-flex flex-row align-items-center justify-content-between col-11 m-0 p-0" id="navInventario" href="#inventarioSM" data-toggle="collapse" aria-expanded="false">
                <p class="my-0 ml-2">Inventario</p>
            </a>
        </div>
        <ul class="collapse list-unstyled" id="inventarioSM">
            
            <!--Stock-->
            <li>
                <a class="nav-link d-flex flex-row align-items-center ml-4 pl-0" id="subnavStock" href="stock.php" role="tab">
                    <i class="fas fa-dumpster fa-md col-1 px-auto"></i>
                    <p class="col-11 my-0 pl-2">Stock</p>
                </a>
            </li>
            <!--Stock-->

            <!--Lote-->
            <li>
                <a class="nav-link d-flex flex-row align-items-center ml-4 pl-0" id="subnavLote" href="lote.php" role="tab">
                    <i class="fas fa-box fa-md col-1 px-auto"></i>
                    <p class="col-11 my-0 pl-2">Lote</p>
                </a>
            </li>
            <!--Lote-->

            <!--Kardex-->
            <li>
                <a class="nav-link d-flex flex-row align-items-center ml-4 pl-0" id="subnavKardex" href="kardex.php" role="tab">
                    <i class="fas fa-grip-horizontal fa-md col-1 px-auto"></i>
                    <p class="col-11 my-0 p l-2">Kardex</p>
                </a>
            </li>
            <!--Kardex-->
            
        </ul>
    </li>
    <!--Inventario-->

</ul>