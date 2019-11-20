<!--viene de -->
@extends('admin.layout')

@section('content')
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Editar Horario</h3>
            </div>
            <form id="formNuevo" method="POST" action=""   enctype="multipart/form-data">
              {{ csrf_field() }}
 
              <br>
              <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
          </div>
        </div>
    </div>        
  </section>
@stop