@extends('formUTP')

@section('content')
<?php

if(isset($_SESSION['rut'])){
    $rut = $_SESSION['rut'];
}

$rut;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        @section('menu')
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="{{'home'}}">Home</a></li>
                <li class="active"><a href="{{'home'}}">Cerrar Sesion</a></li>                
            </ul>
        </div>
        @endsection('menu')
          
        
        <div>
            {!! Form::open(['route' => 'usu.store', 'method'=>'post','validate']) !!}
            <div class="row col-md-6">
                <div class="panel">
                    
                 

                    <h4 class="modal-title" style="text-align: center">Agregar Usuario Alumno</h4>
                
                    <p> Nombre Usuario : <input type="text" name="username" value="" /> </p>
                
                
                    <p>Contraseña      : <input type="password" name="password" value="" />  </p>
                                  
                        <input type="hidden" name="perfil" value="1">
                        
                        <input type="hidden" name="rut" value="<?php echo $rut?>">
                        
                        
                
                    <input type="submit" value="Guardar" />

            </div>
            {!! Form::close() !!}
        </div>


    </body>
</html>
@endsection('content') 