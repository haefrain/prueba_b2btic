<div class="sidebar-menu-inner">

    <header class="logo-env">

        <!-- logo -->
        <div class="logo">
            <a href="dashboard-1.html" class="logo-expanded">
                <img src="assets/images/logo@2x.png" width="80" alt="" />
            </a>

            <a href="dashboard-1.html" class="logo-collapsed">
                <img src="assets/images/logo-collapsed@2x.png" width="40" alt="" />
            </a>
        </div>

        <!-- This will toggle the mobile menu and will be visible only on mobile devices -->
        <div class="mobile-menu-toggle visible-xs">
            <a href="#" data-toggle="user-info-menu">
                <i class="fa-bell-o"></i>
                <span class="badge badge-success">7</span>
            </a>

            <a href="#" data-toggle="mobile-menu">
                <i class="fa-bars"></i>
            </a>
        </div>

    </header>



    <ul id="main-menu" class="main-menu">
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
        @if(count($menu) > 0)
        <li>
            <a href="{{route('/')}}">
                <span class="title">Inicio</span>
            </a>
        </li>
        @endif
        @foreach($menu AS $opcion)
            <li>
                <a href="{{url($opcion->ObtenerModulo->url.'/'.$opcion->url)}}">
                    <span class="title">{{$opcion->nombre}}</span>
                </a>
            </li>
        @endforeach
    </ul>

</div>
