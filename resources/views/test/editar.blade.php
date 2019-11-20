@extends('admin.layout')

@section('content')
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Editar doctor</h3>
            </div>
            <form id="formNuevo" method="POST" action="{{route('doctor_detail',$doctor->id)}}"   enctype="multipart/form-data">
              {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$doctor->id}}">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputapPaterno">Apellido Paterno</label>
                  <input type="text" class="form-control" name="apPaterno" value="{{$doctor->apPaterno}}" placeholder="Paterno">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputapMaterno">Apellido Materno</label>
                  <input type="text" class="form-control" name="apMaterno" value="{{$doctor->apMaterno}}"placeholder="Materno">
                </div>
              </div>
              <div class="form-group col-md-12">
                <label for="inputNombre">Nombres</label>
                <input type="text" class="form-control" name="nombre" value="{{$doctor->nombre}}" placeholder="">
              </div>
              <div class="form-group col-md-12">
                <label for="inputCodigo">Codigo</label>
                <input type="text" class="form-control" name="codigo" value="{{$doctor->codigo}}"placeholder="">
              </div>
              <div class="form-group col-md-12">
                <label for="inputDNI">DNI</label>
                <input type="text" class="form-control" name="dni" value="{{$doctor->dni}}" placeholder="">
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
