@extends('plantilla.base_pdf')

@section('content')
<table>
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
@endsection
