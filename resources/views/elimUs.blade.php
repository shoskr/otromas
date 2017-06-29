@extends('formUTP')
@section('content')
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <div class="row" style="border: #0000cc; margin: 30px 40px" >      
            <div class="col-lg-8 col-lg-offset-2">
                <div class="panel">
                    <div class="panel alert-danger">

                        <h3 style="text-align: center"><p>Listado de Usuarios</p></h3>
                    </div>
                    <table class="table table-hover" style="background-color: white ">
                        <tr>
                            <td>Id Usuario</td>
                            <td>Nombre Usuario</td>
                            <td>Perfil</td>
                            <td></td>
                        </tr>
                        @foreach($Usua as $usu)
                        <tr>
                        <td>{{$usu->id_usuario}}</td>
                        <td>{{$usu->username}}</td>
                        <td>{{$usu->perfil}}</td>
                        <td><a href="{{ route('usuario/destroy',['id'=> $usu->id_usuario])}}">eliminar</a></td>
                        
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