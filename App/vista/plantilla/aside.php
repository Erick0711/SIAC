    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="../../assets/img/Logo-siac.jpg" alt="User Image">
            <div>
                <p class="app-sidebar__user-name"><?php echo $rol; ?></p>
                <p class="app-sidebar__user-designation">Admin</p>
            </div>
        </div>
        <!-- LISTA DE MENU -->
        <ul class="app-menu">
            <li><a class="app-menu__item active" href="./inicio"><i class="app-menu__icon fa fa-home"></i><span class="app-menu__label">Inicio</span></a></li>

            <!-- PERSONA - TABLA - FORMULARIO -->
            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i>
                    <span class="app-menu__label">Persona</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <?php if ($_SESSION['nombre_rol'] == "SIAC") { ?>

                        <li><a class="treeview-item" href="./copropietario.php"><i class="icon fa fa-circle-o"></i> Copropietario</a></li>
                        <li><a class="treeview-item" href="./funcionario.php"><i class="icon fa fa-circle-o"></i> Funcionario</a></li>
                        <li><a class="treeview-item" href="./usuario.php"><i class="icon fa fa-circle-o"></i> Usuario</a></li>
                        <li><a class="treeview-item" href="./apartamento.php"><i class="icon fa fa-circle-o"></i> Apartamento</a></li>
                    <?php } elseif ($_SESSION['nombre_rol'] == "Administrador") { ?>
                        <li><a class="treeview-item" href="./copropietario.php"><i class="icon fa fa-circle-o"></i> Copropietario</a></li>
                    <?php }; ?>
                </ul>
            </li>

            <!-- EXPENSA - TABLA - FORMULARIO -->
            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-clipboard"></i><span class="app-menu__label">Expensa</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="./gasto"><i class="icon fa fa-circle-o"></i>Gasto</a></li>
                    <li><a class="treeview-item" href="./articulo"><i class="icon fa fa-circle-o"></i>Gastos comunes</a></li>
                </ul>
            </li>
            <!-- RECINTO - TABLA - FORMULARIO -->
            <li><a class="app-menu__item" target="_blank" href="./recinto"><i class="app-menu__icon fa fa-car"></i><span class="app-menu__label">Recinto</span></a></li>
            </li>
            <!-- RECINTO - TABLA - FORMULARIO -->
            <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-usd"></i><span class="app-menu__label">Reporte</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item" href="table-basic"><i class="icon fa fa-circle-o"></i>Pagos</a></li>
                    <li><a class="treeview-item" href="table-data-table"><i class="icon fa fa-circle-o"></i>Cuenta Nominal</a></li>
                </ul>
            </li>
            <!-- MANUAL - TABLA - FORMULARIO -->
            <li><a class="app-menu__item" target="_blank" href="./manual"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Manual</span></a></li>
        </ul>
    </aside>