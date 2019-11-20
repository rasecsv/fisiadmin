<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menú de Navegación</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="">                 
          <a href="{{ url(route('dashboard'))}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>                 
        </li>            
            
        <li class="">
          <a href="{{ url(route('alumno_view'))}}"><i class="fa fa-link">
            </i> <span>Alumnos</span>
          </a>
        </li>
        <li>
          <a href="{{ url(route('doctor_view'))}}"><i class="fa fa-link">
            </i> <span>Doctores</span>
          </a>
        </li>
        <li>
          <a href="{{ url(route('examen_view'))}}"><i class="fa fa-link">
            </i> <span>Examen</span>
          </a>
        </li>
        
        <li>
          <a href="{{ url(route('horario_view'))}}"><i class="fa fa-link">
            </i> <span>Horario</span>
          </a>
        </li>
        <li>
          <a href="{{ url(route('cita_view'))}}"><i class="fa fa-link">
            </i> <span>Gestionar Cita</span>
          </a>
        </li>
        <li>
          <a href="{{ url(route('prueba_view'))}}"><i class="fa fa-link">
            </i> <span>Prueba</span>
          </a>
        </li>
        
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
