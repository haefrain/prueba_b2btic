@extends('plantilla.base')

@section('title', 'Prueba B2BTIC - Efrain Hernandez')

@section('javascript')
<script>
    $(document).ready(function () {
        $("#table_quantity, #table_records").dataTable();
    })
</script>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <form method="POST" action="{{route('store-files')}}">
            @csrf
            <button class="btn btn-success" type="submit">Obtener archivos</button>
        </form>
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#records" data-toggle="tab">
                    <span class="visible-xs"><i class="fa-list"></i></span>
                    <span class="hidden-xs">Registros</span>
                </a>
            </li>
            <li>
                <a href="#quantity_types" data-toggle="tab">
                    <span class="visible-xs"><i class="fa-percent"></i></span>
                    <span class="hidden-xs">Cantidad por tipos</span>
                </a>
            </li>

        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="records">
                <a class="btn btn-blue" href="#">Exportar PDF</a>
                <table id="table_records" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Codigo</th>
                            <th>Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($files AS $file)
                        <tr>
                            <td>{{$file->type->name}}</td>
                            <td>{{$file->code}}</td>
                            <td>{{$file->name}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="tab-pane" id="quantity_types">
                <a class="btn btn-blue" href="#">Exportar PDF</a>
                <table id="table_quantity" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Cantidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($types AS $type)
                        <tr>
                            <td>{{$type->name}}</td>
                            <td>{{$type->files_count}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
