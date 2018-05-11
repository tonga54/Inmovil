@extends('Template.main')

@section('titulo')
	Crear interesado
@endsection

@section('tituloPagina')
	Crear interesado
@endsection

@section('descripcionPagina')
	
@endsection

@section('breadcrumbs')
        <li class="active">
          <a href="{{url('sistema/propietarios')}}" class="disabled">
            <i class="fa fa-dashboard"></i> Propietarios
          </a>
        </li>

        <li class="active">
            <i class="fa fa-dashboard"></i> Editar
        </li>
@endsection

@section('contenido')
	
	<style type="text/css">
		.top-buffer{
			margin-top: 40px;
		}
	</style>
  
	<div class='row'>
		<div class='col-md-8 col-md-offset-2'>
			<div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Editar interesado</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::open(['route' => ['interesados.update', $interesado], 'method' => 'PUT']) !!}
                <!-- text input -->
                <div class="form-group">
                  {!! Form::label('txtNombre','Nombre') !!}
                  {!! Form::text('nombre',$interesado->nombre,['class' => 'form-control', 'placeholder' => 'Nombre..','required']) !!}
                </div>

                <div class="form-group">
                  {!! Form::label('txtApellido','Apellido') !!}
                  {!! Form::text('apellido',$interesado->apellido,['class' => 'form-control', 'placeholder' => 'Apellido..','required']) !!}
                </div>

                <div class="form-group">
                  {!! Form::label('txtTelefono','Telefono') !!}
                  {!! Form::tel('telefono',$interesado->telefono,['class' => 'form-control', 'placeholder' => 'Telefono..','required']) !!}
                </div>

                <div class="form-group">
                  {!! Form::label('txtEmail','Email') !!}
                  {!! Form::email('email',$interesado->email,['class' => 'form-control', 'placeholder' => 'Email..','required']) !!}
                </div>

                <div class="form-group">
                  {!! Form::label('slcLocalidad','Localidades') !!}
                  {!! Form::select('slcLocalidad',['' =>'Seleccione una localidad', '1' => 'Montevideo'], null,['class' => 'form-control']) !!}
                </div>

				        <div class="form-group">
                  {!! Form::label('slcBarrios','Barrios') !!}
                  {!! Form::select('slcBarrios',['' =>'Seleccione un barrio', '1' => 'Union'], null,['class' => 'form-control']) !!}
                </div>

                <div class="form-group col-md-3 col-md-offset-9 top-buffer">
                	{!! Form::submit('Registrar', ['class' => 'btn btn-block btn-success']) !!}
                </div>
                
              {!! Form::close() !!}
            </div>
            <!-- /.box-body -->
          </div>
		</div>
	</div>
	
@endsection
