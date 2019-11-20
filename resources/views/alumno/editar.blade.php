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
            <form id="formNuevo" method="POST" action="{{route('alumno_detail',$alumno->id)}}"   enctype="multipart/form-data">
              {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$alumno->id}}">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputapPaterno">Apellido Paterno</label>
                  <input type="text" class="form-control" name="apPaterno" value="{{$alumno->apPaterno}}" placeholder="Paterno">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputapMaterno">Apellido Materno</label>
                  <input type="text" class="form-control" name="apMaterno" value="{{$alumno->apMaterno}}"placeholder="Materno">
                </div>
              </div>
              <div class="form-group col-md-12">
                <label for="inputNombre">Nombres</label>
                <input type="text" class="form-control" name="nombre" value="{{$alumno->nombre}}" placeholder="">
              </div>
              <div class="form-group col-md-12">
                <label for="inputCodigo">Codigo</label>
                <input type="text" class="form-control" name="codigo" value="{{$alumno->codigo}}"placeholder="">
              </div>
              <div class="form-group col-md-12">
                <label for="inputEscuela">Escuela</label>
                <input type="text" class="form-control" name="escuela" value="{{$alumno->escuela}}" placeholder="">
              </div>
              <div class="form-group col-md-12">
                <label for="inputDNI">DNI</label>
                <input type="text" class="form-control" name="dni" value="{{$alumno->dni}}" placeholder="">
              </div>
              <div class="form-row col-md-12">
                <div class="form-group col-md-6">
                  <label for="inputDepartamento">Departamento</label>
                  <input type="text" class="form-control" name="departamento" placeholder="Departamento">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputDistrito">Distrito</label>
                  <input type="text" class="form-control" name="distrito" placeholder="Distrito">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputDireccion">Direccion</label>
                  <input type="text" class="form-control" name="direccion" placeholder="Direccion">
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
@section('scripts')
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script  src="../js/ubigeo.js"type="text/javascript"></script>
<script  src="../js/funubigeo.js"type="text/javascript"></script>

@endsection