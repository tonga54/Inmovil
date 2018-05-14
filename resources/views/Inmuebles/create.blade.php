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
		.top-buffer{
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

                  <div class='row'>
                    <h4>Ambientes</h4>
                    
                    
                    @foreach ($caracteristicas as $caract)
                      @if($caract->tipo == 'AM')
                      <div class="form-group col-md-4">
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
                      <div class="form-group col-md-4">
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
                      <div class="form-group col-md-4">
                        {!! Form::checkbox('caracteristicas[]',$caract->id) !!}
                        {!! Form::label($caract->nombre,$caract->nombre) !!}
                      </div>
                      @endif
                    @endforeach
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