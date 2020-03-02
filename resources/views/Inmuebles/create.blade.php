@extends('Template.main')
@section('titulo')
Crear inmueble
@endsection
@section('crsf')
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('tituloPagina')
Crear inmueble
@endsection

@section('descripcionPagina')

@endsection

@section('breadcrumbs')
<li class="active">
  <a href="{{url('sistema/propietarios')}}" class="disabled">
    <i class="fa fa-dashboard"></i> Inmuebles
  </a>
</li>

<li class="active">
  <i class="fa fa-dashboard"></i> Crear
</li>
@endsection

@section('contenido')
<style type="text/css">
  .top-buffer {
    margin-top: 40px;
  }
</style>

<div class='row'>
  <div class='col-md-8 col-md-offset-2'>
    <div class="box box-warning">
      <div class="box-header with-border">
        <h3 class="box-title">Crear inmueble</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        {!! Form::open(['route' => 'inmuebles.store', 'method' => 'POST']) !!}

        <div class="form-group col-md-12">
          {!! Form::label('titulo','Titulo') !!}
          {!! Form::text('titulo',null,['class' => 'form-control', 'placeholder' => 'Titulo del inmueble..','required']) !!}
        </div>

        <div class="form-group col-md-12">
          {!! Form::label('tiposInmuebles','Tipo de inmueble') !!}
          {!! Form::select('tipoInmueble',['' => 'Seleccione un tipo de inmueble'] + $tiposInmuebles, null,['class' => 'form-control', 'id' => 'slcTipoInmueble']) !!}
        </div>

        <div class="form-group col-md-12" id="tipoOperacion">
          
        </div>

        <div id="camposDinamicos" class="col-md-12">
        </div>

        <div class="form-group col-md-12">
          {!! Form::label('localidad','Localidad') !!}
          {!! Form::select('localidad',['' => 'Seleccione una localidad'] + $localidades, null,['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-md-12">
          {!! Form::label('barrio','Barrio') !!}
          {!! Form::select('barrio',['' => 'Seleccione un barrio'] + $barrios, null,['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-md-12">
          {!! Form::label('direccion','Direccion') !!}
          {!! Form::text('direccion',null,['class' => 'form-control', 'placeholder' => 'Direccion..','required']) !!}
        </div>

        <div class="form-group col-md-12">
          {!! Form::label('propietario','Propietario') !!}
          {!! Form::select('propietario',['' => 'Seleccione un propietario'] + $propietarios, null,['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-md-12">
          {!! Form::label('constructora','Empresa constructora') !!}
          {!! Form::select('constructora',['' => 'Seleccione una empresa constructora'] + $constructoras, null,['class' => 'form-control']) !!}
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

@section('scripts')
  <script src="{{asset('js/Sistema/Inmueble/create.js')}}"></script>
@endsection