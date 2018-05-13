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
          <a href="{{url('sistema/constructoras')}}" class="disabled">
            <i class="fa fa-dashboard"></i> Constructoras
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
              {!! Form::open(['route' => ['constructoras.update', $constructora], 'method' => 'PUT']) !!}
                <!-- text input -->
                <div class="form-group">
                  {!! Form::label('txtNombre','Nombre empresa') !!}
                  {!! Form::text('nombre',$constructora->nombre,['class' => 'form-control', 'placeholder' => 'Nombre..','required']) !!}
                </div>

                <div class="form-group">
                  {!! Form::label('txtTelefono','Telefono') !!}
                  {!! Form::tel('telefono',$constructora->telefono,['class' => 'form-control', 'placeholder' => 'Telefono..','required']) !!}
                </div>

                <div class="form-group">
                  {!! Form::label('documento','Documento (Ci,Rut,etc)') !!}
                  {!! Form::tel('documento',$constructora->documento,['class' => 'form-control', 'placeholder' => 'Documento..','required']) !!}
                </div>

                <div class="form-group">
                  {!! Form::label('txtEmail','Email') !!}
                  {!! Form::email('email',$constructora->email,['class' => 'form-control', 'placeholder' => 'Email..','required']) !!}
                </div>

                <div class="form-group">
                  {!! Form::label('slcLocalidad','Localidades') !!}
                  {!! Form::select('slcLocalidad',['' =>'Seleccione una localidad', '1' => 'Montevideo'], null,['class' => 'form-control']) !!}
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
