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
	Constructoras
@endsection

@section('descripcionPagina')
	Aqui podras gestionar las empresas constructoras
@endsection

@section('breadcrumbs')
        <li class="active">
          <i class="fa fa-dashboard"></i> Constructoras
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
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Documento</th>
                <th>Email</th>
                <th>Localidad</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($constructoras as $const)
                  <tr>
                    <td>{{$const->nombre}}</td>
                    <td>{{$const->telefono}}</td>
                    <td>{{$const->documento}}</td>
                    <td>{{$const->email}}</td>
                    <td>{{$const->localidad->nombre}}</td>
                    <td><a href="{{ route('constructoras.edit', $const->id) }}" class="btn btn-primary btn-xs">Editar</a><td>
                    <td><a href="{{ route('constructoras.destroy', $const->id) }}" onclick="return confirm('Seguro que deseas borrar el interesado?')" class="btn btn-primary btn-xs">Eliminar</a><td>
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
            
            {{ $constructoras->links() }}

          </div>
          <!-- /.box-body -->
        </div>
        
    </div>
  </div>
	
@endsection

<?php //dd($cliente); ?>
