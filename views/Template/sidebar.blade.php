<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="https://www.polinema.ac.id/" class="brand-link">
      <img src="AdminLTE/dist/img/polinema.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">POLINEMA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="AdminLTE/dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>{{ auth()->user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               @if (auth()->user()->level == "user" )
               <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Produk</p>
                    </a>
                  </li>
                </ul>                
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('kuriruser') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kurir</p>
                    </a>
                  </li>
                </ul>
              </li>
               <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-folder-open"></i>
                  <p>
                    Produk
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('barangs.index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Produk</p>
                    </a>
                  </li>
                </ul>
               </li>           
         
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-shopping-cart"></i>
                <p>
                  Transaksi
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('transaksis.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Transaksi</p>
                  </a>
                </li>
              </ul>
              @endif 
                @if (auth()->user()->level == "user" )
                <li class="nav-item">
                  <a href="{{ route('logout') }}" class="nav-link">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>
                        Keluar
                    </p>
                  </a>
                </li>
                @endif
                   
              @if (auth()->user()->level == "admin" )
              <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Dashboard
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Produk</p>
                    </a>
                  </li>
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('pegawai') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pegawai</p>
                    </a>
                  </li>
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('kurir') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kurir</p>
                    </a>
                  </li>
                </ul>
              </li>
               <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-folder-open"></i>
                  <p>
                    Produk
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('barangs.index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Produk</p>
                    </a>
                  </li>
                </ul>
               </li>           
         
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-shopping-cart"></i>
                <p>
                  Transaksi
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('transaksis.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Transaksi</p>
                  </a>
                </li>
              </ul>              
              <li class="nav-item">
                <a href="{{ route('pegawais.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Pegawai dan Kurir
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('pegawais.index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pegawai</p>
                    </a>
                  </li>
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('kurirs.index') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kurir</p>
                    </a>
                  </li>
                </ul>
              </li>
              @endif            
              @if (auth()->user()->level == "admin" )
              <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link">
                  <i class="nav-icon fas fa-sign-out-alt"></i>
                  <p>
                      Keluar
                  </p>
                </a>
              </li>
              @endif
          
        </ul>
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

          