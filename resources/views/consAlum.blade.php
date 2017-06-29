@extends('formUTP')
@section('form')

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="panel panel-danger">
            <div>
                
                <h1>Alumno Consultado</h1>
                <table class="table table-striped">
                     @foreach($alum as $alu)
                    <tr>
                        <td>Nombre :</td>
                        <td>{{$alu->nombre_alumno}} </td>
                    </tr>
                    <tr>
                        <td>Rut :</td>
                        <td>{{$alu->rut}}</td>
                    </tr>
                    <tr>
                        <td>Fecha Nacimiento :</td>
                        <td>{{$alu->fecha_nacimiento}}</td>
                    </tr>
                    <tr>
                        <td>Curso :</td>
                        <td>{{$alu->curso}}</td>
                    </tr>
                    <tr>
                        <td>Direccion :</td>
                        <td>{{$alu->direccion}}</td>
                    </tr>
                    <tr>
                        <td>Telefono :</td>
                        <td>{{$alu->telefono}}</td>
                    </tr>
                    
                    @endforeach
                </table>
                <a style="text-align: right"href="{{'utp'}}">volver</a>
            </div>
        </div>
       
    </body>
</html>
@endsection('form')