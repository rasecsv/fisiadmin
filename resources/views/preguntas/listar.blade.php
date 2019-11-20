<!--viene de -->
@extends('admin.layout')

@section('content')
	 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listar Preguntas</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-header">
                <h3 class="box-title"> 
                  <a href="{{ url(route('preguntas_add',$id))}}" class="btn btn-info btn-xs"><i class="fa fa-plus"></i> Agregar</a>
                  </h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table id="tabla" class="table table-bordered table-hover">
                <thead>
                    <tr>
        			      <th scope="col">#</th>
        			      <th scope="col">Encabezado</th>
                    <th scope="col">Accion</th>
        			    </tr>
                </thead>
                <tbody>
                  <?php
                    $contador =0;
                    foreach ($preguntas as $preguntas) {
                      $contador = $contador + 1;
                  ?>
                  
                  <tr>
                    <th scope="row"><?= $contador?></th>
        			      <td><?= $preguntas->encabezado; ?></td>
        			      <td>
                      <a href="{{url(route('preguntas_ver',$preguntas->id))}}" class="btn btn-success"><i class="fa  fa-eye fa-fw"></i>Ver Opciones</a>
                      <a href="{{url(route('preguntas_edit',$preguntas->id))}}" class="btn btn-info"><i class="fa fa-pencil fa-fw"></i>Editar</a>
                      <a href="{{url(route('preguntas_eliminar',$preguntas->id))}}" class="btn btn-danger"><i class="fa fa-trash"></i>Eliminar</a>
                      
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