@extends('formUTP')

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

                        <h3 style="text-align: center"><p>Listado de Profesores</p></h3>
                    </div>
                    <table class="table table-hover" style="background-color: white ">
                        <tr>
                          
                            <td>Rut</td>
                            <td>Nombre</td>
                            <td>Fecha de contrato</td>
                            <td>Asignatura</td>
                            <td>Valor</td>
                        </tr>
                            
                        
                        @foreach($profesor as $pro)
                        <tr>
                         <td>{{$pro->rut}}</td>
                        <td>{{$pro->nombre_profesor}}</td>
                        <td>{{$pro->fecha_contrato}}</td>
                        <td>{{$pro->asignatura }}</td>
                        <td>{{$pro->valor_tutoria }}</td>
                        <td>{{$pro->estado }}</td>
                        <td><a href="{{ route('profesor/destroy',['id'=> $pro->rut])}}">eliminar</a></td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="panel" style="text-align: right">                        
                        <a style="text-align: right"href="{{'utp'}}">volver</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection('content')


