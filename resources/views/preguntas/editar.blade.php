<!--viene de -->
@extends('admin.layout')

@section('content')
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Editar Pregunta</h3>
            </div>
            <form id="formNuevo" action="{{route('preguntas_editar',$preguntas->id)}}" method="POST"  enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="form-group col-md-12">
                <div class="form-group col-md-12">
                  <label for="inputEncabezado">Encabezado</label>
                  <input type="text" class="form-control" name="encabezado" placeholder="descripcion" value="{{$preguntas->encabezado}}">
                </div>  
              </div>
              <!-- /.box-header -->
              <input type="hidden" name="id" value="{{$preguntas->id}}">
              <input type="hidden" name="examen_id" value="{{$preguntas->examen_id}}">
                  
              <br>
               <div class="box-footer">
                <!--<input type="submit" value="Guardar"  class="btn btn-primary">-->   
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
             
            </form>
          </div>
        </div>
      </div>        
  </section>
@stop