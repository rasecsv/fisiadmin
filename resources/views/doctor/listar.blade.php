<!--viene de -->
@extends('admin.layout')

@section('content')
   <section class="content">
      @if(session('status'))
            <div class="alert alert-success alert-block" >
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>{{ session('status')}}</strong>
            </div>
      @endif  
     
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Datos del Doctor</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-header">
                <h3 class="box-title"> 
                  <a href="{{ url(route('doctor_add'))}}" class="btn btn-info btn-xs"><i class="fa fa-plus"></i> Agregar</a>
                </h3>
            </div><!-- /.box-header -->
                
            <div class="box-body col-xs-12">
              <table id="tabla" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Codigo</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Especialidad</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Accion</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                    $contador =0;
                    foreach ($doctor as $doctor) {
                      $contador = $contador + 1;
                  ?>
                  <tr>
                    <th scope="row"><?= $contador ?></th>
                    <td><?= $doctor->codigo; ?></td>
                    <td><?= $doctor->dni; ?></td>
                    <td><?= $doctor->especialidad; ?></td>
                    <td><?= $doctor->telefono; ?></td>
                    <td>
                      <a href="{{url(route('doctor_edit',$doctor->id))}}" class="btn btn-primary"><i class="fa fa-pencil fa-fw"></i>Editar</a>
                      <a href="{{url(route('doctor_eliminar',$doctor->id))}}" class="btn btn-danger"><i class="fa fa-trash"></i>Eliminar</a>
                      
                    </td>
                    
                  </tr>
                  <?php
                  }

                  ?>    
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@stop
@section('scripts')
<script type="text/javascript">
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 2000);
</script>
@stop