@extends('Template.main')

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
	Propietarios
@endsection

@section('descripcionPagina')
	Aqui podras gestionar tus propietarios
@endsection

@section('breadcrumbs')
    <li class="active">
      <i class="fa fa-dashboard"></i> Propietarios
    </li>
@endsection

@section('contenido')
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Hover Data Table</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Documento</th>
                <th>Localidad</th>
                <th>Barrio</th>
                <th>Direccion</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($propietarios as $prop)
                  <tr>
                    <td>{{$prop->nombre}} {{$prop->apellido}}</td>
                    <td>{{$prop->telefono}}</td>
                    <td>{{$prop->email}}</td>
                    <td>{{$prop->documento}}</td>
                    <td>{{$prop->localidad->nombre}}</td>
                    <td>{{$prop->barrio->nombre}}</td>
                    <td>{{$prop->direccion}}</td>
                    <td>
                      <a href="{{ route('propietarios.edit', $prop->id) }}" class="btn btn-primary btn-xs">Editar</a>
                    </td>
                    <td>
                      <a href="{{ route('propietarios.destroy', $prop->id) }}" onclick="return confirm('Seguro que deseas borrar el interesado?')" class="btn btn-primary btn-xs">Eliminar</a>
                    </td>
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

            {{ $propietarios->links() }}

          </div>
          <!-- /.box-body -->
        </div>
        
    </div>
  </div>
	
@endsection

<?php //dd($cliente); ?>
