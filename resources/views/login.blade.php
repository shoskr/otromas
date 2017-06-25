@extends('index')
@section('content')
<?php
session_start();
session_destroy();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../boostrap/css/bootstrap.min.css">
        <title></title>
    </head>
    <body>
        @section('menu')
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="button"><a href="{{'home'}}">Home</a></li>
               
            </ul>
        </div>
        @endsection('menu')

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading"><p>Ingreso</p></div>
                        <div class="panel-body">
                            {!! Form::open(['route' => 'log.store', 'method'=>'post','validate']) !!}
                            <div class="form-group">
                                <label  class="col-md-4 control-label">Usuario</label>

                                <div class="col-md-6">
                                    <input  type="text" class="form-control" name="username" value="" required autofocus>


                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input  type="password" class="form-control" name="password" value=""  required>
                                </div>
                            </div>

                            <div class="form-group">
                                
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn">
                                        Ingresar
                                    </button>
                                </div>
                            </div>
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection('content')