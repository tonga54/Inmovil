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
	Interesados
@endsection

@section('descripcionPagina')
	Aqui podras gestionar tus interesados
@endsection

@section('breadcrumbs')
        <li class="active">
          <i class="fa fa-dashboard"></i> Interesados
        </li>
@endsection

@section('contenido')







  <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Filtrar</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            {{-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button> --}}
          </div>
        </div>
        <!-- /.box-header -->
        
        {!! Form::open(['route' => 'interesados.index', 'method' => 'GET', 'class' => 'box-body']) !!}
          <div class="row">

            {{-- <div class="col-md-2">

              <div class="form-group">
                <label>Localidad</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
              <!-- /.form-group -->
            </div>

            <div class="col-md-2">
              <div class="form-group">
                <label>Barrio</label>
                <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
              <!-- /.form-group -->
            </div> --}}

            <!-- /.col -->




            <div class="col-md-2">
              <div class="form-group">
                <label>Nombre</label>

                {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre..']) !!}
                {{-- <input type="text" class="form-control"> --}}
              </div>
            </div>


            <div class="col-md-2">
              <div class="form-group">
                <label>Telefono</label>

                {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Telefono..']) !!}
                {{-- <input type="text" class="form-control"> --}}
              </div>
            </div>


            <div class="col-md-2">
              <div class="form-group">
                <label>Email</label>

                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email..']) !!}
                {{-- <input type="text" class="form-control"> --}}
              </div>
            </div>
        
          </div>

          <input type="submit" name="">
        {!! Form::close() !!}
</div>


    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Hover Data Table</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
            <table id="example1" class="table table-bordered table-hover">
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
                    <td>
                      <a href="{{ route('interesados.edit', $int->id) }}" class="btn btn-primary btn-xs">Editar</a>
                    </td>
                    <td>
                      <a href="{{ route('interesados.destroy', $int->id) }}" onclick="return confirm('Seguro que deseas borrar el interesado?')" class="btn btn-primary btn-xs">Eliminar</a>
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
            
            {{ $interesados->links() }}
          </div>
          <!-- /.box-body -->
        </div>
        
    </div>
  </div>
	

@endsection
