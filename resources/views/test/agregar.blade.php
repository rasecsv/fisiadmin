@extends('admin.layout')

@section('content')
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Registrar Prueba</h3>
            </div>
            <form id="formNuevo" action="{{route('prueba_guardar')}}" method="POST"  enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="form-group col-md-12">
                  <label for="inputGenero">Examen</label>
                  <select id="examen" name="examen" class="form-control">
                      <option selected>Elija una opcion</option>
                      <?php 
                        foreach ($data as $key => $examen) {
                          
                      ?>
                      <option value="<?= $examen->id?>"><?= $examen->titulo; ?></option>
                      <?php
                        }
                      ?>
                  </select>
              </div>

              
              <div class="form-group col-md-12">
                  <div class="box-body">
                <table id="tabla" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Codigo</th>
                      <th scope="col">Escuela</th>
                      <th scope="col">Accion</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $contador =0;
                      foreach ($dato as $key => $alumno) {
                      $contador = $contador + 1;
                    ?>
                      
                    <tr>
                      <th scope="row"><?= $contador ?></th>
                      <td><?= $alumno->codigo; ?></td>
                      <td><?= $alumno->escuela; ?></td>
                      <td><input type="checkbox" name="estado" value="" ></td>
                    </tr>
                    <?php
                    }
                    ?>
                  </tfoot>
                </table>
              </div>
              
              </div>

              <br>
              <div class="box-footer">
                <a href="{{url(route('doctor_view'))}}" class="btn btn-danger">Cancelar</a>
                <!--<input type="submit" value="Guardar"  class="btn btn-primary">-->   
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
              
            </form>
          </div>
        </div>
      </div>        
  </section>
@stop
