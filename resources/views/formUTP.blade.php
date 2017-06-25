@extends('index')
@section('content')


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


        <div class="container">
            <!-- Trigger the modal with a button -->
            @section('nab')
            <?php
            $_SESSION['user'];
            if (isset($_SESSION['user'])) {
                echo '<font size="5" color="white" ><b> Usuario:  ' . $_SESSION['user'] . '</b></font>';
            }
            ?>
            <div class="btn-group-vertical ">
                <div class="dropdown">
                    <button class="btn btn-info btn-lg dropdown-toggle" type="button" data-toggle="dropdown">Usuario<span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a data-toggle="modal" data-target="#SaveUser">Agregar Usuario</a></li>
                    </ul>
                </div>
                <p></p>

                <div class="dropdown">
                    <button class="btn btn-info btn-lg dropdown-toggle" type="button" data-toggle="dropdown">Profesor<span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a data-toggle="modal" data-target="#SaveProfesor">Agregar Profesor</a></li>
                        <li><a data-toggle="modal" data-target="#">Listar Profesores</a></li>
                        <li><a data-toggle="modal" data-target="#">Consultar Profesores</a></li>
                        <li><a data-toggle="modal" data-target="#">Despedir Profesores</a></li>
                    </ul>
                </div>
                <p></p>

                <div class="dropdown">
                    <button class="btn btn-info btn-lg dropdown-toggle" type="button" data-toggle="dropdown">Alumnos<span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a data-toggle="modal" data-target="#SaveAlumno">Agregar Alumnos</a></li>
                        <li><a data-toggle="modal" data-target="#">Listar Alumnos</a></li>
                        <li><a data-toggle="modal" data-target="#">Consultar Alumnos</a></li>
                        <li><a data-toggle="modal" data-target="#">Eliminar Alumnos</a></li>
                    </ul>
                </div>
            </div>
        </div>

        @endsection('nab')
        <!-- Modal -->
        <div class="modal fade" id="SaveUser" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->

                {!! Form::open(['route' => 'usu.store', 'method'=>'post','validate']) !!}
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="text-align: center">Agregar Usuario</h4>
                    </div>
                    <div class="modal-body" style="text-align: right">
                        <p> Nombre Usuario : <input type="text" name="username" value="" /> </p>
                    </div>
                    <div class="modal-body" style="text-align: right">
                        <p>Contraseña      : <input type="password" name="password" value="" />  </p>
                    </div>
                    <div class="modal-body" style="text-align: right">
                        <p>Tipo De Usuario : 
                            <select name="perfil">
                                <option>Seleccionar Tipo</option>
                                <option value="1">Alumno</option>
                                <option value="2">Profesor</option>
                                <option value="3">UTP</option>
                                <option value="4">Director</option>
                            </select> 
                        </p>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Guardar" />
                    </div>
                </div>
                {!! Form::close() !!}

            </div>
        </div>

        <!--Profesores -->

        <div class="modal fade" id="SaveProfesor" role="dialog">
            <div class="modal-dialog">

                <!--  Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>

                    <table class="table tab-pane" style="text-align: center">
                        <tr>
                            <td> Nombre :</td>
                            <td> <input type="text" name="nombre" value="" /> </td>
                        </tr>
                    </table>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

        <!--Alumnos-->

        <div class="modal fade" id="SaveAlumno" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                        <p>Some text in the modal.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>



    </div>

</body>
</html>
@endsection