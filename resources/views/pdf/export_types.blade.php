@extends('plantilla.base_pdf')

@section('content')
<h2>Reporte de Extensiones</h2>
<table>
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
@endsection
