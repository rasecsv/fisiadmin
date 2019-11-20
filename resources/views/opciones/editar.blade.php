<!--viene de -->
@extends('admin.layout')

@section('content')
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Editar Alumno</h3>
            </div>
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputapPaterno">Apellido Paterno</label>
                  <input type="text" class="form-control" id="apPaterno" placeholder="Paterno">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputapMaterno">Apellido Materno</label>
                  <input type="text" class="form-control" id="apMaterno" placeholder="Materno">
                </div>
              </div>
              <div class="form-group col-md-12">
                <label for="inputNombre">Nombres</label>
                <input type="text" class="form-control" id="nombre" placeholder="">
              </div>
              <div class="form-group col-md-12">
                <label for="inputCodigo">Codigo</label>
                <input type="text" class="form-control" id="codigo" placeholder="">
              </div>
              <div class="form-group col-md-12">
                <label for="inputEscuela">Escuela</label>
                <input type="text" class="form-control" id="escuela" placeholder="">
              </div>
              <div class="form-group col-md-12">
                <label for="inputDNI">DNI</label>
                <input type="text" class="form-control" id="dni" placeholder="">
              </div>
              <div class="form-row col-md-12">
                <div class="form-group col-md-6">
                  <label for="inputDepartamento">Departamento</label>
                  <input type="text" class="form-control" id="departamento" placeholder="Departamento">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputDistrito">Distrito</label>
                  <input type="text" class="form-control" id="distrito" placeholder="Distrito">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputDireccion">Direccion</label>
                  <input type="text" class="form-control" id="direccion" placeholder="Direccion">
                </div>
              </div>
              <br>
              <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
          </div>
        </div>
    </div>        
  </section>
@stop