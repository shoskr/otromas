@extends('formSecretaria')


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>       
        @section('content')
        <div class="row col-lg-offset-2">            
            {!! Form::open(['route' => 'tuto.store', 'method'=>'post','validate']) !!}
            <div class="Panel col-md-5 " style="margin: 110px 100px; text-align: center" >
                <h1> Agregar Tutorias</h1>


                <div class="Panel" style="text-align: right">
                    <p> Fecha : <input type="date" name="fecha" value="" /> </p>
                </div>

                <div class="Panel" style="text-align: right">
                    <p> Alumno : 
                        <select name="alumno">
                            @foreach($Alumno as $alum)    
                            <option value="{{$alum->rut}}" >{{$alum->nombre_alumno}}</option>
                            @endforeach
                        </select>
                    </p>
                </div>

                <div class="Panel" style="text-align: right">
                    <p> Profesor : 
                        <select name="profesor">
                            @foreach($Profesor as $prof)    
                            <option value="{{$prof->rut}}" >{{$prof->nombre_profesor}}</option>
                            @endforeach
                        </select>

                    </p>
                </div>
                <div class="Panel" style="text-align: right">
                    <input type="submit" value="Guardar" />
                </div>
            </div>
            {!! Form::close() !!}

        </div>

        @endsection('content')
    </body>
</html>
