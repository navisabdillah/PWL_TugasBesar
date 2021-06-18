
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
<title>Perusahaan Barang Polinema</title>
  @include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <!-- Content Wrapper. Contains page content -->
  @if (auth()->user()->level == "admin" )
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Perusahaan Barang Polinema</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
          <div class="container-fluid">
            <div class="row">
              <div class="col-6 col-lg-3">
                <div class="site-blocks-cover" style="background-image: url({{ asset('shopper') }}/images/warna.jpg);" data-aos="fade">
                <div class="small-box bg-primary">                  
                  <div class="inner">
                    <h3>150</h3>          
                    <p>Order Baru</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                </div>
              </div>
              <div class="col-6 col-lg-3">
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3>150</h3>
          
                    <p>Produk</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <div class="col-6 col-lg-3">
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3>150</h3>
          
                    <p>Member</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
          
              <div class="col-6 col-lg-3">
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3>150</h3>
          
                    <p>Transaksi</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Produk Baru</h4>
                    <div class="card-tools">
                      <a href="{{ route('transaksis.index') }}" class="btn btn-sm btn-primary">
                        More
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Id_Pegawai</th>
                          <th>Kode_Pegawai</th>
                          <th>Nama_Pegawai</th>
                          <th>Kategori_Pegawai</th>
                          <th>Umur</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>PRO-1</td>
                          <td>Baju Atasan</td>
                          <td>Baju Anak</td>
                          <td>12 kodi</td>
                         
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>PRO-2</td>
                          <td>Gamis</td>
                          <td>Baju Wanita</td>
                          <td>20 kodi</td>
                         
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>PRO-3</td>
                          <td>Daster</td>
                          <td>Baju Wanita</td>
                          <td>20 kodi</td>
                          
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endif

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('Template.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>
</body>
</html>

