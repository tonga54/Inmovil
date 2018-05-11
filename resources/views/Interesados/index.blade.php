@extends('general.main')

@section('titulo')
	Buscar
@endsection

@section('cantidadMensajes')
	2
@endsection

@section('cantidadNotificaciones')
	3
@endsection

@section('cantidadTareas')
	1
@endsection

@section('tituloPagina')
	Interesados
@endsection

@section('descripcionPagina')
	Aqui podras gestionar tus interesados
@endsection

@section('breadcrumbs')
		<li><a href="#"><i class="fa fa-dashboard"></i> Inmuebles</a></li>
        <li class="active">Buscar</li>
@endsection

@section('contenido')
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Hover Data Table</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Localidad</th>
                <th>Barrio</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($interesados as $int)
                  <tr>
                    <td>{{$int->nombre}} {{$int->apellido}}</td>
                    <td>{{$int->telefono}}</td>
                    <td>{{$int->email}}</td>
                    <td>{{$int->localidad->nombre}}</td>
                    <td>{{$int->barrio->nombre}}</td>
                    <td><a href="{{ route('interesados.edit', $int->id) }}" class="btn btn-primary btn-xs">Editar</a><td>
                    <td><a href="{{ route('interesados.destroy', $int->id) }}" onclick="return confirm('Seguro que deseas borrar el interesado?')" class="btn btn-primary btn-xs">Eliminar</a><td>
                  </tr>
                @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>Rendering engine</th>
                <th>Browser</th>
                <th>Platform(s)</th>
                <th>Engine version</th>
                <th>CSS grade</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        
    </div>
  </div>
	
@endsection

<?php //dd($cliente); ?>
