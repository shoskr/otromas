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

        @if(Session::has('flash_message'))
        {{Session::get('flash_message')}}
        @endif




        <div class="container">
            <!-- Trigger the modal with a button -->
            @section('nab')
            <?php
           
            if (isset($_SESSION['user'])) {
                echo '<font size="5" color="white" ><b> Usuario:  ' . $_SESSION['user'] . '</b></font>';
            }
            $tipo = $_SESSION['tipo']; 
            ?>
<!--            formulario UTP-->
            @if($tipo == 3)
            <div class="btn-group-vertical ">
                <div class="dropdown">
                    <button class="btn btn-info btn-lg dropdown-toggle" type="button" data-toggle="dropdown">Usuario<span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a data-toggle="modal" data-target="#SaveUser">Agregar Usuario</a></li>
                        <li><a data-toggle="modal" href="{{url('usu')}}">Listar Usuario</a></li>
                        <li><a data-toggle="modal" data-target="#BuscarUsuario">Consultar Usuarios</a></li>
                        <li><a data-toggle="modal" href="{{url('usu2')}}">Eliminar Usuarios</a></li>
                    </ul>
                </div>
                <p></p>

                <div class="dropdown">
                    <button class="btn btn-info btn-lg dropdown-toggle" type="button" data-toggle="dropdown">Profesor<span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a data-toggle="modal" data-target="#SaveProfesor">Agregar Profesor</a></li>
                        <li><a data-toggle="modal" href="{{url('pro')}}">Listar Profesor</a></li>
                        <li><a data-toggle="modal" data-target="#BuscarProfesor">Consultar Profesores</a></li>
                        <li><a data-toggle="modal" href="{{url('pro2')}}">Despedir Profesores</a></li>
                    </ul>
                </div>
                <p></p>
                <p></p>
                <div class="dropdown">
                    <button class="btn btn-info btn-lg dropdown-toggle" type="button" data-toggle="dropdown">Alumnos<span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a data-toggle="modal" data-target="#SaveAlumno">Agregar Alumnos</a></li>
                        <li><a data-toggle="modal" href="{{url('alum')}}">Listar Alumnos</a></li>
                        <li><a data-toggle="modal" data-target="#BuscarAlumno">Consultar Alumnos</a></li>
                        <li><a data-toggle="modal" href="{{url('alum2')}}">Eliminar Alumnos</a></li>
                    </ul>
                </div>
            </div>
            
            @endif
            
<!--            formulario secretaria-->
            
            @if($tipo == 2)
            <div class="btn-group-vertical ">
               
                <div class="dropdown">
                    <button class="btn btn-info btn-lg dropdown-toggle" type="button" data-toggle="dropdown">Profesor<span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a data-toggle="modal" href="{{url('pro')}}">Listar Profesor</a></li>
                        <li><a data-toggle="modal" data-target="#BuscarProfesor">Consultar Profesores</a></li>
                    </ul>
                </div>
                <p></p>

                <div class="dropdown">
                    <button class="btn btn-info btn-lg dropdown-toggle" type="button" data-toggle="dropdown">Alumnos<span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a data-toggle="modal" href="{{url('alum')}}">Listar Alumnos</a></li>
                        <li><a data-toggle="modal" data-target="#BuscarAlumno">Consultar Alumnos</a></li>
                       
                    </ul>
                </div>
                <p></p>
                <div class="dropdown">
                    <button class="btn btn-info btn-lg dropdown-toggle" type="button" data-toggle="dropdown">Tutorias<span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a data-toggle="modal" href="{{url('Tuto')}}">Agendar Tutorias</a></li>
                        <li><a data-toggle="modal" href="{{url('tut')}}">Manipular Tutorias</a></li>
                        
                       
                    </ul>
                </div>
            </div>
            @endif
            
            <!-- formulario Alumno-->
            
            @if($tipo == 1)
             <div class="btn-group-vertical ">
                <div class="dropdown">
                    <button class="btn btn-info btn-lg dropdown-toggle" type="button" data-toggle="dropdown">Usuario<span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a data-toggle="modal" data-target="#SaveUser">Agregar Usuario</a></li>
                        <li><a data-toggle="modal" href="{{url('usu')}}">Listar Usuario</a></li>
                        <li><a data-toggle="modal" data-target="#BuscarUsuario">Consultar Usuarios</a></li>
                        <li><a data-toggle="modal" href="{{url('usu2')}}">Eliminar Usuarios</a></li>
                    </ul>
                </div>
                <p></p>

            </div>
            @endif
             <!-- formulario director-->
            @if($tipo == 4)
            @endif
            
        </div>


        <!-- Modal -->
        <div class="modal fade" id="SaveUser" role="dialog"  >
            <div class="modal-dialog">

                <!-- Modal content-->

                {!! Form::open(['route' => 'usu.store', 'method'=>'post','validate']) !!}
                <div class="modal-content" style="margin: 200px 100px;" >
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
                                <option value="2">Secretaria</option>
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
                <div class="modal-content" style="margin: 200px 100px;">
                    <div class="modal-header">
                        {!! Form::open(['route' => 'profesor.store', 'method'=>'post','validate']) !!}
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Ingresar Alumno</h4>
                    </div>
                    <div class="modal-body" style="text-align: center">
                        <p> Rut                : <input type="number" name="rut" value="" placeholder="Ingresar rut sin puntos" required>-<input required type="text" name="dv" value="" size="1" placeholder="DV"/> </p>
                    </div>
                    <div class="modal-body" style="text-align: center">
                        <p> Nombre Completo    : <input type="text" name="nombre" value="" placeholder="Ingresar Nombre" required/></p>
                    </div>
                    <div class="modal-body" style="text-align: center">
                        <p> Fecha contratacion   : <input type="date" name="fechac" value="" max=""required size="7"/></p>
                    </div>
                    <div class="modal-body" style="text-align: center">
                        <p> Asignatura              : <input type="text" name="asignatura" value="" placeholder="Ingresar curso"required /></p>
                    </div>
                    <div class="modal-body" style="text-align: center">
                        <p> Valor Tutoria          : <input type="text" name="valor" value="" placeholder="Ingresar Direccion" required/></p>
                    </div>

                    <div class="modal-footer">
                        <input type="submit" value="Guardar" />
                    </div>
                    {!!form::close() !!}

                </div>

            </div>
        </div>
        <!--Profesor-->
        <div class="modal fade" id="BuscarProfesor" role="dialog">
            <div class="modal-dialog">

                <!--Modal content-->

                <div class="modal-content" style="margin: 200px 100px;">
                    <div class="modal-header">
                        {!!   Form::open(['url' => 'prof']);!!}
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Buscar Profesor</h4>
                    </div>
                    <div class="modal-body" style="text-align: center">
                        <p> Rut                : <input type="number" name="rut" value="" placeholder="Ingresar rut sin puntos ni digito verificado" required> </p>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Consultar" />

                    </div>
                    {!! Form::close() !!}

                </div>

            </div>
        </div>

        <!--Alumnos-->

        <div class="modal fade" id="SaveAlumno" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->

                <div class="modal-content" style="margin: 200px 100px;">
                    <div class="modal-header">
                        {!! Form::open(['route' => 'alumno.store', 'method'=>'post','validate']) !!}
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Ingresar Alumno</h4>
                    </div>
                    <div class="modal-body" style="text-align: center">
                        <p> Rut                : <input type="number" name="rut" value="" placeholder="Ingresar rut sin puntos" required>-<input required type="text" name="dv" value="" size="1" placeholder="DV"/> </p>
                    </div>
                    <div class="modal-body" style="text-align: center">
                        <p> Nombre Completo    : <input type="text" name="nombre" value="" placeholder="Ingresar Nombre" required/></p>
                    </div>
                    <div class="modal-body" style="text-align: center">
                        <p> Fecha Nacimiento   : <input type="date" name="fecha" value="" max=""required size="7"/></p>
                    </div>
                    <div class="modal-body" style="text-align: center">
                        <p> Curos              : <input type="text" name="curso" value="" placeholder="Ingresar curso"required /></p>
                    </div>
                    <div class="modal-body" style="text-align: center">
                        <p> Direccion          : <input type="text" name="direccion" value="" placeholder="Ingresar Direccion" required/></p>
                    </div>
                    <div class="modal-body" style="text-align: center">
                        <p> Telefono           : <input type="text" name="telefono" value="" placeholder="Ingresar telefono"required /></p>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Guardar" />
                    </div>
                    {!!form::close() !!}

                </div>

            </div>
        </div>

        <!--Alumnos Buscar-->

        <div class="modal fade" id="BuscarAlumno" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->

                <div class="modal-content" style="margin: 200px 100px;">
                    <div class="modal-header">
                        {!!   Form::open(['url' => 'alu']);!!}
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Buscar Alumno</h4>
                    </div>
                    <div class="modal-body" style="text-align: center">
                        <p> Rut                : <input type="number" name="rut" value="" placeholder="Ingresar rut sin puntos ni digito verificado" required> </p>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Consultar" />

                    </div>
                    {!! Form::close() !!}

                </div>

            </div>
        </div>


        <!--Usuario Buscar-->

        <div class="modal fade" id="BuscarUsuario" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->

                <div class="modal-content" style="margin: 200px 100px;">
                    <div class="modal-header">
                        {!!   Form::open(['url' => 'usu1']);!!}
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Buscar Usuario</h4>
                    </div>
                    <div class="modal-body" style="text-align: center">
                        <p> Nombre Usuario  : <input type="text" name="rut" value="" placeholder="Ingresar rut sin puntos ni digito verificado" required> </p>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Consultar" />

                    </div>
                    {!! Form::close() !!}

                </div>

            </div>
        </div>


    </div>
    @endsection('nab')

    @yield('form')

</body>
</html>
@endsection
