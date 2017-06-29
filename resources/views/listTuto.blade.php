@extends('formUTP')
@section('form')
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <div class="row" style="border: #0000cc; margin: 30px 40px" >      
            <div class="col-lg-10 ">
                <div class="panel">
                    <div class="panel alert-danger">

                        <h3 style="text-align: center"><p>Listado de tutorias agendadas</p></h3>
                    </div>
                    <table class="table table-hover" style="background-color: white ">
                        <tr>
                            <td>ID</td>
                            <td>Fecha</td>
                            <td>Estado</td>
                            <td>Cambio</td>
                            <td>Rut_alumno</td>
                            <td>Rut_profesor</td>
                            <td>Modificar</td>
                           
                        </tr>
                        @foreach($Tuto as $tuto)
                        <tr>
                        <td>{{$tuto->id_tutoria}}</td>
                        <td>{{$tuto->fecha_tutoria}}</td>
                        <td>{{$tuto->estado}}</td>
                        <td>
                            <select name="est"> 
                                <option value="Confirmada">Confirmada</option>
                                <option value="Anulada">Anulada</option>
                                <option value="Perdida">Perdida</option>
                                <option value="Realizada">Realizada</option>
                            </select>
                        </td>
                        <td>{{$tuto->Alumno_rut}}</td>
                        <td>{{$tuto->Profesor_rut}}</td>
                        <td><td><a href="{{ route('tutoria/update',['id'=> $tuto->id_tutoria])}}">Modificar</a></td></td>
                         
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
@endsection('form')