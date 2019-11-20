<!--viene de -->
@extends('admin.layout')

@section('content')
   <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Test</h3>
            </div>
            <!-- /.box-header -->
                
            <div class="box-body">
              <table id="tabla" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Examen</th>
                    <th scope="col">Alumno</th>
                    <th scope="col">Diagnostico</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Accion</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $contador =0;
                    foreach ($prueba as $prueba) {
                      $alumno;
                      $contador = $contador + 1;
                  ?>
                  <tr>
                    <th scope="row"><?= $contador ?></th>
                    <td><?= $prueba->examen_id; ?></td>
                    <td><?= $prueba->codigo; ?></td>
                    <td><?= $prueba->diagnostico; ?></td>
                    <td><?= $prueba->fecexam; ?></td>
                    <td>
                        <a href="{{url(route('prueba_eliminar',$prueba->alumno_id))}}" class="btn btn-danger"><i class="fa fa-trash"></i>Eliminar</a>
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

</script>
@stop