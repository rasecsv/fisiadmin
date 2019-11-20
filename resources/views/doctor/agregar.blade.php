@extends('admin.layout')

@section('content')
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Registrar Doctor</h3>
            </div>
            <form id="formNuevo" action="{{route('doctor_guardar')}}" method="POST"  enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="form-group col-md-12">
                <div class="form-group col-md-6">
                  <label for="inputapPaterno">Apellido Paterno</label>
                  <input type="text" class="form-control" name="apPaterno" placeholder="Paterno" required>
                </div> 
                
                <div class="form-group col-md-6">
                  <label for="inputapMaterno">Apellido Materno</label>
                  <input type="text" class="form-control" name="apMaterno" placeholder="Materno" required>
                </div> 
                <div class="form-group col-md-12">
                  <label for="inputNombre">Nombres</label>
                  <input type="text" class="form-control" name="nombre" placeholder="" required>
                </div>
              </div>
              <input type="hidden" class="form-control" name="estado"  value="doctor">

              <div class="form-group col-md-12">
                <div class="form-group col-md-6">
                  <label for="inputCodigo">Codigo</label>
                  <input type="text" class="form-control" name="codigo" placeholder="" pattern="[0-9]{8}" maxlength="8" required>
                </div>

                <div class="form-group col-md-6">
                  <label for="inputCodigo">Especialidad</label>
                  <input type="text" class="form-control" name="especialidad" placeholder=""   required>
                </div>
              </div>
              
              <div class="form-group col-md-12"> 
                <div class="form-group col-md-6">
                  <label for="inputDNI">DNI</label>
                  <input type="text" class="form-control" name="dni" placeholder="" pattern="[0-9]{8}" maxlength="8" required>
                </div>
              </div>
              <div class="form-group col-md-12"> 
                <div class="form-group col-md-6">
                  <label for="inputCorreo">Correo</label>
                  <input type="email" class="form-control" name="correo" placeholder="" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputTelefono">Telefono</label>
                  <input type="text" class="form-control" name="telefono" placeholder="" pattern="[0-9]{9}" maxlength="9" required>
                </div>
              </div>
              
              <div class="form-row col-md-12">
                <div class="form-group col-md-6">
                  <label for="inputDepartamento">Departamento</label>
                   <select id="departamento" name="departamento" class="form-control">
                    </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputDepartamento">Provincia</label>
                  <select id="provincia" name="provincia" class="form-control">
                     
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputDistrito">Distrito</label>
                  <select id="distrito"  name="distrito" class="form-control">
                  </select>
                </div>
                <div class="form-group col-md-12">
                  <label for="inputDireccion">Direccion</label>
                  <input type="text" class="form-control" name="direccion" placeholder="Direccion">
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
