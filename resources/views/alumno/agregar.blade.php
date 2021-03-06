<!--viene de -->
@extends('admin.layout')

@section('content')
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Registrar Alumno</h3>
            </div>
           <form id="formNuevo" action="{{route('alumno_guardar')}}" method="POST"  enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="form-group col-md-12">
                <div class="form-group col-md-6">
                  <label for="inputapPaterno">Apellido Paterno</label>
                  <input type="text" class="form-control" id="apPaterno" name="apPaterno"placeholder="Paterno" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputapMaterno">Apellido Materno</label>
                  <input type="text" class="form-control" id="apMaterno" name="apMaterno" placeholder="Materno" required>
                </div> 
                <div class="form-group col-md-12">
                  <label for="inputNombre">Nombres</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" required>
                </div>
              </div>
              <div class="form-group col-md-12">
                <div class="form-group col-md-6">
                  <label for="inputCodigo">Codigo</label>
                  <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Codigo" pattern="[0-9]{8}" maxlength="8" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputapMaterno">Escuela</label>
                  <input type="text" class="form-control" id="escuela" name="escuela" placeholder="Escuela" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputCiclo">Ciclo</label>
                  <input type="text" class="form-control" id="ciclo" name="ciclo" placeholder="Ciclo" pattern="[0-9]{2}" maxlength="2" required>
                </div>
              </div>
              <input type="hidden" class="form-control" name="estado"  value="alumno">

              <div class="form-group col-md-12"> 
                <div class="form-group col-md-6">
                  <label for="inputDNI">DNI</label>
                  <input type="text" class="form-control" name="dni" id="dni" placeholder="" pattern="[0-9]{8}" maxlength="8" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputGenero">Genero</label>
                  <select id="genero" name="genero" class="form-control">
                      <option selected>Elija una opcion</option>
                      <option>Masculino</option>
                      <option>Femenino</option>
                  </select>
                </div>
              </div>
              <div class="form-group col-md-12"> 
                <div class="form-group col-md-6">
                  <label for="inputCorreo">Correo</label>
                  <input type="email" class="form-control" id="correo" name="correo" placeholder="" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputTelefono">Telefono</label>
                  <input type="text" class="form-control" id="telefono" name="telefono" placeholder="" pattern="[0-9]{9}" maxlength="9" required>
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
                  <input type="text" class="form-control" id="direccion"  name="direccion" placeholder="Direccion" required>
                </div>
                
              </div>
              <div class="box-footer">
                <a href="{{url(route('alumno_view'))}}" class="btn btn-danger">Cancelar</a>
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
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script  src="../js/ubigeo.js"type="text/javascript"></script>
<script  src="../js/funubigeo.js"type="text/javascript"></script>

@endsection