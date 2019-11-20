<!--viene de -->
@extends('admin.layout')

@section('content')
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Registrar Examen</h3>
            </div>
            <form id="formNuevo" action="{{route('examen_guardar')}}" method="POST"  enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="form-group col-md-12">
                <div class="form-group col-md-12">
                  <label for="inputapPaterno">Titulo</label>
                  <input type="text" class="form-control" name="titulo" placeholder="Titulo">
                </div>  
              </div>
              <br>
              <div class="box-footer">
                <a href="{{url(route('examen_view'))}}" class="btn btn-danger">Cancelar</a>
                <!--<input type="submit" value="Guardar"  class="btn btn-primary">-->   
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
              
            </form>
          </div>
        </div>
      </div>        
  </section>
@stop