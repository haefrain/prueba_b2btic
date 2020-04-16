<!-- User Info, Notifications and Menu Bar -->
<nav class="navbar user-info-navbar" role="navigation">

    <!-- Left links for user info navbar -->
    <ul class="user-info-menu left-links list-inline list-unstyled">

        <li class="hidden-sm hidden-xs">
            <a href="#" data-toggle="sidebar">
                <i class="fa-bars"></i>
            </a>
        </li>

    </ul>


    <!-- Right links for user info navbar -->
    <ul class="user-info-menu right-links list-inline list-unstyled">

        <li class="dropdown user-profile">
            <a href="#" data-toggle="dropdown">
                <img src="{{(is_file(asset('imagenes/usuarios/'.Auth::user()->id.'.jpg'))) ? asset('imagenes/usuarios/'.Auth::user()->id.'.jpg') : asset('imagenes/default/usuario.png')}}" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
                <span>
                    {{Auth::user()->name}}
                    <i class="fa-angle-down"></i>
                </span>
            </a>

            <ul class="dropdown-menu user-profile-menu list-unstyled">
                <li>
                    <a href="#settings">
                        <i class="fa-wrench"></i>
                        Configuracion
                    </a>
                </li>
                <li>
                    <a href="#profile">
                        <i class="fa-user"></i>
                        Mi perfil
                    </a>
                </li>
                <li>
                    <a href="#help">
                        <i class="fa-info"></i>
                        Ayuda
                    </a>
                </li>
                <li class="last">
                    <a href="{{route('cerrar-sesion')}}">
                        <i class="fa-lock"></i>
                        Cerrar sesión
                    </a>
                </li>
            </ul>
        </li>

    </ul>

</nav>
