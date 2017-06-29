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
                
                <h1>Profesor Consultado</h1>
                <table class="table table-striped">
                     @foreach($pro as $prof)
                    <tr>
                        <td>Nombre :</td>
                        <td>{{$prof->nombre_profesor}} </td>
                    </tr>
                    <tr>
                        <td>Rut :</td>
                        <td>{{$prof->rut}}</td>
                    </tr>
                    <tr>
                        <td>Fecha Contratacion :</td>
                        <td>{{$prof->fecha_contrato}}</td>
                    </tr>
                    <tr>
                        <td>Asignatura :</td>
                        <td>{{$prof->asignatura}}</td>
                    </tr>
                    
                    <tr>
                        <td>Valor :</td>
                        <td>{{$prof->valor_tutoria}}</td>
                    </tr>
                    @endforeach
                </table>
                <a style="text-align: right"href="{{'utp'}}">volver</a>
            </div>
        </div>
       
    </body>
</html>
@endsection('form')
