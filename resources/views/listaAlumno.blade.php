@extends('index ')

@section('content')
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="row" style="border: #0000cc">      
            <div class="col-lg-8 col-lg-offset-2">
                <div class="panel">
                    <div class="panel alert-danger">

                        <h3 style="text-align: center"><p>Listado de alumnos</p></h3>
                    </div>
                    <table class="table table-hover" style="background-color: white ">
                        <tr>
                            <td>Rut</td>
                            <td>Nombre</td>
                            <td>Fecha de nacimiento</td>
                            <td>curso</td>
        <!--                    <td>Direccion</td>-->
                            <td>Telefono</td>
                        </tr>
                        @foreach($alumno as $alum)
                        <tr>
                        <td>{{$alum->rut}}</td>
                        <td>{{$alum->nombre_alumno}}</td>
                        <td>{{$alum->fecha_nacimiento}}</td>
                        <td>{{$alum->curso }}</td>
         <!--               <td>{{$alum->direccion}}</td>-->
                        <td>{{$alum->telefono}}</td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="panel" style="text-align: right">                        
                        <a style="text-align: right"href="{{URL::previous()}}">volver</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection('content')