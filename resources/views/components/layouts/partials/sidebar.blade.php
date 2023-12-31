<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">
            {{config('app.name', 'Ventas')}}
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        @if (auth()->check())


        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{auth()->user()->imagen}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{route('users.show',auth()->user())}}" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>
        @endif

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            @if (auth()->user()->admin)
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link">
                        <i class="nav-icon fas fa-store"></i>
                        <p>
                            Inicio
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            Ventas
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('sales.create')}}" class="nav-link">
                                <i class="fas fa-cart-plus nav-icon"></i>
                                <p>Crear venta</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('sales.list')}}" class="nav-link">
                                <i class="fas fa-shopping-cart nav-icon"></i>
                                <p>Mostrar ventas</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{route('categorias')}}" class="nav-link">
                        <i class="nav-icon fas fa-th-list"></i>
                        <p>
                            Categorias
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('products')}}" class="nav-link">
                        <i class="fas fa-tshirt"></i>
                        <p>
                            Productos
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('users')}}" class="nav-link">
                        <i class="fas fa-users"></i>
                        <p>
                            Usuarios
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('tienda')}}" class="nav-link">
                        <i class="fas fa-store-alt"></i>
                        <p>
                            Tienda
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('clients')}}" class="nav-link">
                        <i class="fas fa-user-friends"></i>
                        <p>
                            Clientes
                        </p>
                    </a>
                </li>



            </ul>
            @endif

            @if (auth()->user()->client)
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('user.products')}}" class="nav-link">
                        <i class="nav-icon fas fa-th-list"></i>
                        <p>
                            Productos
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('user.venta')}}" class="nav-link">
                    <i class="nav-icon fas fa-credit-card"></i>
                        <p>
                            Comprar
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('user.quienes')}}" class="nav-link">
                    <i class="nav-icon far fa-address-card"></i>
                        <p>
                            ¿Quienes somos?
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('user.location')}}" class="nav-link">
                    <i class="nav-icon fas fa-location-arrow"></i>
                        <p>
                            Ubicación
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('user.contactar')}}" class="nav-link">
                    <i class="nav-icon fab fa-whatsapp"></i>
                        <p>
                            Contactanos
                        </p>
                    </a>
                </li>

            </ul>
            @endif
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
