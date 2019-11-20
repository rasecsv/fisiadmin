<!--viene de -->
@extends('admin.layout')

@section('content')
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Registrar Horario </h3>
            </div>
           <form  method="POST" action="{{url(route('horario_guardar'))}}"   enctype="multipart/form-data">
              {{csrf_field()}}
              
              <div class="form-group col-md-12">
                  <label for="inputGenero">Doctor</label>
                  <select  name="doctor" class="form-control">
                      <option selected>Elija una opcion</option>
                      <?php 
                        foreach ($data as $key => $doctor) {
                      ?>
                      <option value="<?= $doctor->id?>"><?= $doctor->codigo; ?></option>
                      <?php
                        }
                      ?>
                  </select>
              </div>
              
              <div class="form-group col-md-12">
                <label>Fecha:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control pull-right" name="atencion" >
                </div>
                <!-- /.input group -->
              </div>

              <div class="form-group">
                <div class="form-group col-md-12">
                  <label for="inputapPaterno">Descripción</label>
                  <input type="text" class="form-control"  name="descripcion" >
                </div>
              </div>

              <div class="box-footer">
                <a href="{{url(route('horario_view'))}}" class="btn btn-danger">Cancelar</a>
                <!--<input type="submit" value="Guardar"  class="btn btn-primary">-->   
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
              
            </form>
           
          </div>
        </div>
      </div>        
  </section>
@stop
@section('scripts')
@endsection