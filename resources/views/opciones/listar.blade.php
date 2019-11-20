<!--viene de -->
@extends('admin.layout')

@section('content')
	 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Lista de Opción</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-header">
                <h3 class="box-title"> 
                  <a href="{{ url(route('opciones_add',$id))}}" class="btn btn-info btn-xs"><i class="fa fa-plus"></i> Agregar</a>
                </h3>
            </div><!-- /.box-header -->
                
            <div class="box-body">
              <table id="tabla" class="table table-bordered table-hover">
                <thead>
                    <tr>
        			      <th scope="col">#</th>
        			      <th scope="col">Descripcion</th>
        			      <th scope="col">Accion</th>
        			    </tr>
                </thead>
                <tbody>
                  <?php
                    $contador =0;
                    foreach ($opciones as $opciones) {
                      $contador = $contador + 1;
                  ?>
                  
                  <tr>
                    <th scope="row"><?= $contador?></th>
        			      <td><?= $opciones->descripcion?></td>
        			      <td>
                      <a href="" class="btn btn-info"><i class="fa fa-pencil fa-fw"></i>Editar</a>
                      <a href="" class="btn btn-danger"><i class="fa fa-trash"></i>Eliminar</a>
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
  var dataTable = $("#tabla").DataTable({
      "order": [[0],"asc"],
      "autoWidth": true,
      "language": configuration.dataTable_Language,
      "serverSide": true,
      "ajax":{
        "url":"",
        type: "POST",
        "data": function(d){

        },
        "columns":[
        {"data":"codigo"},
        {"data":"escuela"},
        {"data":""},
        {"data":""},
        {"data":""},
        
        ]
      }
  });
</script>
@stop