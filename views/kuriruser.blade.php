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
    @if (auth()->user()->level == "user" )     
    <div class="container">
      <div class="row">
        <div class="col-6 col-lg-3">
          <div class="site-blocks-cover" style="background-image: url({{ asset('shopper') }}/images/warna.jpg);" data-aos="fade">
          <div class="small-box bg-primary">                  
            <div class="inner">
              <h3>Segera Pesan !!!!</h3>          
              <p>Barang Berkualitas</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{ route('barangs.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
          </div>
        </div>              
        <div class="col-6 col-lg-3">
          <div class="small-box bg-info">
            <div class="inner">
              <h3>Tunggu Apa Lagi</h3>
               <p>Pegawai Sangat Baik</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{ route('pegawais.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>Buruan Yukkk!!!</h3>          
              <p>Kurir Sangat Cepat</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{ route('kurirs.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
    
        <div class="col-6 col-lg-3">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>Ayo Pesan</h3>
              <p>Transaksi</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{ route('transaksis.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div> 
    <!-- produk Terbaru-->
  <div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
      <h2 class="text-center">Produk</h2>
    </div>
    <!-- produk pertama -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ route('barangs.index') }}">
          <img src="{{asset('images/avatar5.png') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ route('kurirs.index') }}" class="text-decoration-none">
            <p class="card-text">
              Kurir
            </p>
          </a>
          <div class="row mt-4">
            <div class="col">
              <button class="btn btn-light">
                <i class="far fa-heart"></i>
              </button>
            </div>
            <div class="col-auto">
              <p>
                JNE
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- produk kedua -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ route('kurirs.index') }}">
          <img src="{{asset('images/avatar4.png') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ route('kurirs.index') }}" class="text-decoration-none">
            <p class="card-text">
              Kurir
            </p>
          </a>
          <div class="row mt-4">
            <div class="col">
              <button class="btn btn-light">
                <i class="far fa-heart"></i>
              </button>
            </div>
            <div class="col-auto">
              <p>
                Grab
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- produk ketiga -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ route('kurirs.index') }}">
          <img src="{{asset('images/avatar5.png') }}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ route('kurirs.index') }}" class="text-decoration-none">
            <p class="card-text">
              Kurir
            </p>
          </a>
          <div class="row mt-4">
            <div class="col">
              <button class="btn btn-light">
                <i class="far fa-heart"></i>
              </button>
            </div>
            <div class="col-auto">
              <p>
                Grab
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end produk terbaru -->  
  @endif
    @if (auth()->user()->level == "admin" )
          <div class="container-fluid">
            <div class="row">
              <div class="col-6 col-lg-3">
                <div class="site-blocks-cover" style="background-image: url({{ asset('shopper') }}/images/warna.jpg);" data-aos="fade">
                <div class="small-box bg-primary">                  
                  <div class="inner">
                    <h3>Barang Berkualitas</h3>          
                    <p>Segera Pesan</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="{{ route('barangs.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                </div>
              </div>              
              <div class="col-6 col-lg-3">
                <div class="small-box bg-info">
                  <div class="inner">              
                    <h3>Tunggu Apa Lagi</h3>
                    <p>Pegawai Sangat Baik</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>
                  <a href="{{ route('pegawais.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <div class="col-6 col-lg-3">
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3>Buruan Yukkk!!!</h3>          
                    <p>Kurir Sangat Cepat</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="{{ route('kurirs.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
          
              <div class="col-6 col-lg-3">
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3>Ayo Pesan</h3>
          
                    <p>Transaksi</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="{{ route('transaksis.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>            
            <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Produk</h4>
                    <div class="card-tools">
                      <a href="{{ route('barangs.index') }}" class="btn btn-sm btn-primary">
                        More
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <form action="#">
                      <div class="row">                                              
                      </div>
                    </form>
                  </div>
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>                  
                 
                          
                          <th>Id_Barang</th>
                          <th>Kode_Barang</th>
                          <th>Nama_Barang</th>
                          <th>Kategori_Barang</th>
                          <th>Harga</th>
                          <th>QTY</th>
                        </tr>
                      </thead>
                      <tbody>                  
                          
                          <td>12</td>
                          <td>1001</td>
                          <td>Mie Sedap Goreng</td>
                          <td>Makanan</td>
                          <td>3000</td>
                          <td>20</td>
                        </tr>
                        <tr>
                          <td>10</td>
                          <td>1002</td>
                          <td>Mie Sedap Soto</td>
                          <td>Makanan</td>
                          <td>3000</td>
                          <td>20</td>
                        </tr>
                        <tr>
                          <td>11</td>
                          <td>1003</td>
                          <td>Roma Kelapa</td>
                          <td>Snack</td>
                          <td>6000</td>
                          <td>50</td>
                        </tr>
                      </tbody>
                    </table>                    
                  </div>  
                  @endif                
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