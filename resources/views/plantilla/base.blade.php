<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Psimetrica" />
	<meta name="author" content="Studio 157" />

	<title>@yield('titulo')</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
	<link rel="stylesheet" href="{{asset('css/fonts/linecons/css/linecons.css')}}">
	<link rel="stylesheet" href="{{asset('css/fonts/fontawesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/xenon-core.css')}}">
	<link rel="stylesheet" href="{{asset('css/xenon-forms.css')}}">
	<link rel="stylesheet" href="{{asset('css/xenon-components.css')}}">
    <link rel="stylesheet" href="{{asset('css/xenon-skins.css')}}">

    <link rel="stylesheet" href="{{asset('js/datatables/dataTables.bootstrap.css')}}">

    <script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
	<link rel="stylesheet" href="{{asset('css/custom.css')}}">


</head>
<body class="page-body">

	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

		<div class="main-content">

			<div class="panel panel-default panel-headerless">

				<div class="panel-body layout-variants">

					<div class="row">
                        @if(Session::get('Error'))
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">
                                <span aria-hidden="true">×</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>Error</strong> {{Session::get('Error')}}
                        </div>
                        @endif

                        @if(Session::get('Exito'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">
                                <span aria-hidden="true">×</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <strong>Muy bien,</strong> {{Session::get('Exito')}}
                        </div>
                        @endif

                        @yield('content')

                    </div>

				</div>

			</div>
			<!-- Main Footer -->
			<!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
			<!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
			<!-- Or class "fixed" to  always fix the footer to the end of page -->
			<footer class="main-footer sticky footer-type-1">

				<div class="footer-inner">

					<!-- Add your copyright text here -->
					<div class="footer-text">
						&copy; {{date('Y')}}
						<strong>Prueba B2B TIC</strong>
						Presentado por Efrain Hernandez
					</div>


					<!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
					<div class="go-up">

						<a href="#" rel="go-top">
							<i class="fa-angle-up"></i>
						</a>

					</div>

				</div>

			</footer>
        </div>
	</div>

    <!-- Bottom Scripts -->
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/TweenMax.min.js')}}"></script>
	<script src="{{asset('js/resizeable.js')}}"></script>
	<script src="{{asset('js/joinable.js')}}"></script>
	<script src="{{asset('js/xenon-api.js')}}"></script>
    <script src="{{asset('js/xenon-toggles.js')}}"></script>


    <!-- Datatables -->
    <script src="{{asset('js/datatables/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('js/datatables/dataTables.bootstrap.js')}}"></script>
	<script src="{{asset('js/datatables/yadcf/jquery.dataTables.yadcf.js')}}"></script>
    <script src="{{asset('js/datatables/tabletools/dataTables.tableTools.min.js')}}"></script>

    <script src="{{asset('js/rwd-table/js/rwd-table.min.js')}}"></script>

    <!-- JavaScripts initializations and stuff -->
    <script src="{{asset('js/xenon-custom.js')}}"></script>

    @yield('javascript')

    @yield('modal')

</body>
</html>
