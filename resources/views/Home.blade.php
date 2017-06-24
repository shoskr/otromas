@extends('index')
@section('content')
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            @section('menu')
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="{{'home'}}">Home</a></li>
                    <li class="active"><a href="{{'login'}}">Login</a></li>
                </ul>
            </div>
            @endsection('menu')
            <a href="{{'UTP'}}"> Guardar Usuario</a>
            
        </div>
    </body>
</html>
@endsection