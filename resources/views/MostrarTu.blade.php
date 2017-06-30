@extends('formUTP')
@section('form')
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="row col-lg-offset-3">
            <div class=" col-md-6">
                <div class="panel panel-danger">
                    <div>
                        {!! Form::open(['url' => 'tut1']) !!}
                        <h3 style="text-align: center">Ver tutorias</h3>
                        <div>
                            <p>Tutori : 

                                <select name='tuto'>
                                    @foreach($Tuto as $tut)
                                    <option value='{{$tut->id_tutoria}}'>{{'Fecha: '.$tut->fecha_tutoria.', Rut Alumno :'.$tut->Alumno_rut }}</option>
                                    @endforeach
                                </select>
                            </p><div style="text-align: center"> <input type="submit" value="VER" /> </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection('form')