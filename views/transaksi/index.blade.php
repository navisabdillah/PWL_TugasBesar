@extends('transaksi.layout')
@section('content')
<!-- Page Heading -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Perusahaan Barang Polinema</h1>
        </div><!-- /.col -->           
          
      </div>
</div>

            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('transaksis.create') }}">Input Transaksi</a>
            </div>
            <div class="mx-auto pull-right">
                <div class="float-left">
                    <form action="{{ route('transaksis.index') }}" method="GET" role="search">                           
                        <div class="input-group">
                            <a href="{{ route('transaksis.index') }}" class="mr-4 mt-1">
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button" title="Refresh page">
                                        <span class="fas fa-sync-alt">Refresh</span>
                                    </button>
                                </span>
                            </a>
                            
                            <input type="text" class="form-control mr-4 mt-1" name="term" placeholder="Search" id="term">
                            <span class="input-group-btn mr-2 mt-1">
                                <input type="submit" value="Cari" class="btn btn-primary">
                            </span>
                        </div>
                    </form>
                </div>
            </div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
        <thead class="thead-dark">
        <tr>
            <th scope="">Id Transaksi</th>
            <th scope="">Barang</th>
            <th scope="">Pegawai</th>
            <th scope="">Kurir</th>
            <th scope="">Jumlah</th>
            <th scope="">Total Bayar</th>
            <th scope="">Tanggal</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($transaksis as $Transaksi)
        <tr>
            <td>{{ $Transaksi->id }}</td>
            <td>{{ $Transaksi->barang->Nama_Barang }}</td>
            <td>{{ $Transaksi->pegawai->Nama_Pegawai }}</td>
            <td>{{ $Transaksi->kurir->Nama_Kurir }}</td>
            <td>{{ $Transaksi->jmlh}}</td>
            <td>{{ $Transaksi->total_bayar}}</td>
            <td>{{ $Transaksi->tgl }}</td>
            <td>
                <form action="{{ route('transaksis.destroy', $Transaksi->id ) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data transaksi?')">
                    <a class="btn btn-info" href="{{ route('transaksis.show', $Transaksi->id ) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('transaksis.edit', $Transaksi->id ) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                    <a class="btn btn-warning" href="{{ route('transaksis.cetak_pdf', $Transaksi->id ) }}">Cetak</a>
                </form>
            </td>
        </tr>
        @endforeach
        </thead>
    </table>
    {{ $transaksis->links() }}
    <!-- TARUH LINKS DISINI-->
@endsection
