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
  Aqui podras gestionar tus inmuebles
@endsection

@section('breadcrumbs')
        <li class="active">
          <i class="fa fa-dashboard"></i> Inmubles
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
        <div class="box-body">
          <div class="row">
            <div class="col-md-2">
              <div class="form-group">
                <label>Tipo operacion</label>
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
                <label>Tipo de inmueble</label>
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

            <!-- /.col -->
            <div class="col-md-3">
              <div class="form-group">
                <label>Multiple</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                        style="width: 100%;">
                  <option>Alabama</option>
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





            <div class="col-md-1">
              <div class="form-group">
                  <label>Precio min</label>
                  <input type="number" class="form-control" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label>Precio max</label>
                  <input type="number" class="form-control" placeholder="Enter ...">
                </div>
              <!-- /.form-group -->
            </div>

            <div class="col-md-1">
              
              <!-- /.form-group -->
            </div>


            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <div class="col-md-1 col-md-offset-11">
            <button type="button" class="btn btn-block btn-success">Buscar</button>
          </div>
          
        </div>
      </div>









    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Inmuebles</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body table-responsive">
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

