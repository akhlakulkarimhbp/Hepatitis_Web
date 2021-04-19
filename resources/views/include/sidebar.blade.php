<a href="{{ url('/') }}" class="brand-link">
      <img src="{{asset ('dist/img/header2.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-dark">HEPATITIC RATE</span>
    </a>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>                  
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{ url('/datakriteria') }}" class="nav-link ">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Data Kriteria</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/datainfohepa') }}" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>Informasi Hepatitis A</p>
                </a>
              </li>
            </ul>
          </li>
                <!--  
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ url('/datakriteria') }}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kriteria</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/penduduk') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Penduduk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/datakasus') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kasus</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/dataairbersih') }} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Air Bersih</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/datasanitasi') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Sanitasi Lingkungan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/datarumahsehat') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Rumah Sehat</p>
                </a>
              </li>
            </ul>
             -->

          </li>
        </ul>
        </nav>
      </div>
    <!-- /.sidebar -->