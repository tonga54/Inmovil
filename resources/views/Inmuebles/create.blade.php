@extends('Template.main')

@section('titulo')
Crear inmueble
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

        <div class="form-group">
          {!! Form::label('titulo','Titulo') !!}
          {!! Form::text('titulo',null,['class' => 'form-control', 'placeholder' => 'Titulo del inmueble..','required']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('supTotal','Superficie total') !!}
          {!! Form::number('supTotal',null,['class' => 'form-control', 'placeholder' => 'Superficie total..','required']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('supCubierta','Superficie cubierta') !!}
          {!! Form::number('supCubierta',null,['class' => 'form-control', 'placeholder' => 'Superficie cubierta..','required']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('dormitorios','Dormitorios') !!}
          {!! Form::number('dormitorios',null,['class' => 'form-control', 'placeholder' => 'Dormitorios..','required']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('banos','Cantidad banios') !!}
          {!! Form::number('banos',null,['class' => 'form-control', 'placeholder' => 'Cantidad de banios..','required']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('cochera','Cochera') !!}
          {!! Form::number('cochera',null,['class' => 'form-control', 'placeholder' => 'Cochera..','required']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('pisos','Pisos') !!}
          {!! Form::number('pisos',null,['class' => 'form-control', 'placeholder' => 'Pisos..','required']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('antiguedad','Antiguedad') !!}
          {!! Form::number('antiguedad',null,['class' => 'form-control', 'placeholder' => 'Antiguedad..','required']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('orientacion','Orientacion') !!}
          {!! Form::text('orientacion',null,['class' => 'form-control', 'placeholder' => 'Orientacion..','required']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('precio','Precio') !!}
          {!! Form::number('precio',null,['class' => 'form-control', 'placeholder' => 'Precio..','required']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('tipoOperacion','Tipo de operacion') !!}
          {!! Form::select('tipoOperacion',['' => 'Seleccione un tipo de operacion'] + $tiposOperaciones, null,['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('estado','Estado') !!}
          {!! Form::text('estado',null,['class' => 'form-control', 'placeholder' => 'Estado..','required']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('descripcion','Descripcion') !!}
          {!! Form::text('descripcion',null,['class' => 'form-control', 'placeholder' => 'Descripcion..','required']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('localidad','Localidad') !!}
          {!! Form::select('localidad',['' => 'Seleccione una localidad'] + $localidades, null,['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('barrio','Barrio') !!}
          {!! Form::select('barrio',['' => 'Seleccione un barrio'] + $barrios, null,['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('direccion','Direccion') !!}
          {!! Form::text('direccion',null,['class' => 'form-control', 'placeholder' => 'Direccion..','required']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('propietario','Propietario') !!}
          {!! Form::select('propietario',['' => 'Seleccione un propietario'] + $propietarios, null,['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('constructora','Empresa constructora') !!}
          {!! Form::select('constructora',['' => 'Seleccione una empresa constructora'] + $constructoras, null,['class' => 'form-control']) !!}
        </div>

        <div class='row'>
          <h4>Ambientes</h4>

          @foreach ($caracteristicas as $caract)
          @if($caract->tipo == 'AM')
          <div class="form-group col-md-4 col-sm-4 col-xs-5">
            {!! Form::checkbox('caracteristicas[]',$caract->id) !!}
            {!! Form::label($caract->nombre,$caract->nombre) !!}
          </div>
          @endif
          @endforeach
        </div>
        <div class='row'>

          <h4>Caracteristicas adicionales</h4>

          @foreach ($caracteristicas as $caract)
          @if($caract->tipo == 'CA')
          <div class="form-group col-md-4 col-sm-4 col-xs-5">
            {!! Form::checkbox('caracteristicas[]',$caract->id) !!}
            {!! Form::label($caract->nombre,$caract->nombre) !!}
          </div>
          @endif
          @endforeach
        </div>

        <div class='row'>
          <h4>Comodidades</h4>

          @foreach ($caracteristicas as $caract)
          @if($caract->tipo == 'CO')
          <div class="form-group col-md-4 col-sm-4 col-xs-5">
            {!! Form::checkbox('caracteristicas[]',$caract->id) !!}
            {!! Form::label($caract->nombre,$caract->nombre) !!}
          </div>
          @endif
          @endforeach
        </div>

        <div class= "row">
          <h4>Imagenes:</h4>
        </div>

        <div class="form-group col-md-3 col-md-offset-9 top-buffer">
          {!! Form::submit('Guardar inmueble', ['class' => 'btn btn-block btn-success']) !!}
        </div>

        {!! Form::close() !!}

      </div>
      <!-- /.box-body -->
    </div>
  </div>
</div>

@endsection