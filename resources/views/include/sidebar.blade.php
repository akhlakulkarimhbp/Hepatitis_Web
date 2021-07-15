<a href="{{ url('/') }}" class="brand-link">
      <img src="{{asset ('dist/img/Pacitan.jpg')}}" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-dark">HEPATITIC RATE</span>
    </a>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open ">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link">
                  <i class="nav-icon fa fa-map "></i>                  
                  <p>Pemetaan Map</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="nav-icon fa fa-bar-chart"></i>
                  <p>Grafik Kerawanan</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('/grafik2017') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>2017</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('/grafik2018') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>2018</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('/grafik2019') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>2019</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-treeview">
                <a href="" class="nav-link ">
                    <i class="nav-icon fas fa-table"></i>
                    <p>
                        Hasil Clustering
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('/cluster2017') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>2017</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('/hasilcluster2018') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>2018</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('/hasilcluster2019') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>2019</p>
                        </a>
                    </li>
                </ul>
            </li>
              <li class="nav-item ">
                <a href="{{ url('/datakriteria') }}" class="nav-link ">
                  <i class="nav-icon fas fa-database"></i>
                  <p>Data Kriteria</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/datainfohepa') }}" class="nav-link">
                  <i class="nav-icon fas fa-info"></i>
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