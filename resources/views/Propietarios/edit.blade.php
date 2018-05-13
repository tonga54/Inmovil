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
              <h3 class="box-title">Editar propietario</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!! Form::open(['route' => ['propietarios.update', $propietario], 'method' => 'PUT']) !!}
                <!-- text input -->
                <div class="form-group">
                  {!! Form::label('txtNombre','Nombre') !!}
                  {!! Form::text('nombre',$propietario->nombre,['class' => 'form-control', 'placeholder' => 'Nombre..','required']) !!}
                </div>

                <div class="form-group">
                  {!! Form::label('txtApellido','Apellido') !!}
                  {!! Form::text('apellido',$propietario->apellido,['class' => 'form-control', 'placeholder' => 'Apellido..','required']) !!}
                </div>

                <div class="form-group">
                  {!! Form::label('txtTelefono','Telefono') !!}
                  {!! Form::tel('telefono',$propietario->telefono,['class' => 'form-control', 'placeholder' => 'Telefono..','required']) !!}
                </div>

                <div class="form-group">
                  {!! Form::label('documento','Documento') !!}
                  {!! Form::text('documento',$propietario->documento,['class' => 'form-control', 'placeholder' => 'Documento..','required']) !!}
                </div>

                <div class="form-group">
                  {!! Form::label('txtEmail','Email') !!}
                  {!! Form::email('email',$propietario->email,['class' => 'form-control', 'placeholder' => 'Email..','required']) !!}
                </div>

                <div class="form-group">
                  {!! Form::label('slcLocalidad','Localidades') !!}
                  {!! Form::select('slcLocalidad',['' =>'Seleccione una localidad', '1' => 'Montevideo'], null,['class' => 'form-control']) !!}
                </div>

				        <div class="form-group">
                  {!! Form::label('slcBarrios','Barrios') !!}
                  {!! Form::select('slcBarrios',['' =>'Seleccione un barrio', '1' => 'Union'], null,['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                  {!! Form::label('direccion','Direccion') !!}
                  {!! Form::text('direccion',$propietario->direccion,['class' => 'form-control', 'placeholder' => 'Direccion..','required']) !!}
                </div>

                <div class="form-group col-md-3 col-md-offset-9 top-buffer">
                	{!! Form::submit('Editar', ['class' => 'btn btn-block btn-success']) !!}
                </div>
                
              {!! Form::close() !!}
            </div>
            <!-- /.box-body -->
          </div>
		</div>
	</div>
	
@endsection
