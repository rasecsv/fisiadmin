<!--viene de -->
@extends('admin.layout')

@section('content')
	 <section class="content">
      <div class="row">
        <div class="col-xs-9">
          <div class="box-header">
                <h3 class="box-title"> 
                  <a href="{{ url(route('horario_add'))}}" class="btn btn-info btn-xs"><i class="fa fa-plus"></i> Agregar</a>
                </h3>
            </div><!-- /.box-header -->
            
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Horarios</h3>
            </div>
            <!-- /.box-header -->
             <div id="calendar"></div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@stop
@section('scripts')
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script >
$(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            // put your options and callbacks here
            events : [

                @foreach($horario as $horario)
                {
                    title : '{{ $horario->descripcion}}',
                    start : '{{ $horario->atencion }}',
                    url : '{{url(route('horario_editar',$horario->id))}}'
                },
                @endforeach
            ]
        })
    });
</script>
@stop