@extends('formUTP')

@section('content')
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="row col-lg-6">
            <div class="panel">
                <h3><p>Listado de alumnos</p></h3>
                <table class="table table-hover" style="background-color: white ">
                    <tr>
                        <td>Rut</td>
                        <td>Nombre</td>
                        <td>Fecha</td>
                        <td>curso</td>
    <!--                    <td>Direccion</td>-->
                        <td>Telefono</td>
                    </tr>
                    @foreach($alumno as $alum)
                    <td>{{$alum->rut}}</td>
                    <td>{{$alum->nombre_alumno}}</td>
                    <td>{{$alum->fecha_nacimiento}}</td>
                    <td>{{$alum->curso }}</td>
     <!--               <td>{{$alum->direccion}}</td>-->
                    <td>{{$alum->telefono}}</td>
                    @endforeach
                </table>
                <a href="{{'utp'}}">volver</a>
            </div>
        </div>
    </body>
</html>
@endsection('content')