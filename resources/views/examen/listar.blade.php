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
              <h3 class="box-title">Datos del Examen</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-header">
                <h3 class="box-title"> 
                  <a href="{{ url(route('examen_add'))}}" class="btn btn-info btn-xs"><i class="fa fa-plus"></i> Agregar</a>
                </h3>
            </div><!-- /.box-header -->
                
            <div class="box-body">
              <table id="tabla" class="table table-bordered table-hover">
                <thead>
                    <tr>
        			      <th scope="col">#</th>
        			      <th scope="col">Titulo</th>
        			      <th scope="col">Accion</th>
        			    </tr>
                </thead>
                <tbody>
                   <?php
                    $contador =0;
                    foreach ($examen as $examen) {
                      $contador = $contador + 1;
                  ?>
                  <tr>
                    <th scope="row"><?= $contador ?></th>
                    <td><?= $examen->titulo; ?></td>
                    <td>
                      <a href="{{url(route('examen_ver',$examen->id))}}" class="btn btn-info"><i class="fa fa-pencil fa-fw"></i>Ver</a>
                      <a href="{{url(route('examen_edit',$examen->id))}}" class="btn btn-primary"><i class="fa fa-pencil fa-fw"></i>Editar</a>
                      <a href="{{url(route('examen_eliminar',$examen->id))}}" class="btn btn-danger"><i class="fa fa-trash"></i>Eliminar</a>
                      
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