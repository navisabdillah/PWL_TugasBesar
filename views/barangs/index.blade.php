@extends('barangs.layout')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Perusahaan Barang Polinema</h1>
        </div><!-- /.col -->           
          
      </div>
  </div>
  @if (auth()->user()->level == "admin" )
  <div class="float-right my-2">
    <a class="btn btn-success" href="{{ route('barangs.create') }}"> Input Barang</a>
</div>
@endif
    <div class="mx-auto pull-right">
        <div class="float-left">
            <form action="{{ route('barangs.index') }}" method="GET" role="search">
                <div class="input-group">
                    <span class="input-group-btn mr-3 mt-1">
                        <button class="btn btn-info" type="submit" title="Search Barang">
                            <span class="fas fa-search">Search</span>
                        </button>
                    </span>

                    <input type="text" class="form-control mr-3 mt-1" name="term" placeholder="Search Nama Barang" id="term">
                    <a href="{{ route('barangs.index') }}" class=" mt-1">
                        <span class="input-group-btn mr-10 mt-5">
                            <button class="btn btn-danger" type="button" title="Refresh page">
                                <span class="fas fa-sync-alt">Refresh</span>
                            </button>
                        </span>
                    </a>
                </div>
            </form>
            
        </div>
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
            <th>Id_Barang</th>
            <th>Kode_Barang</th>
            <th>Nama_Barang</th>
            <th>Kategori_Barang</th>
            <th>Harga</th>
            <th>Qty</th>     
            <th>Gambar</th> 
            @if (auth()->user()->level == "admin" )
            <th width="280px">Action</th>
            @endif
        </tr>
        @foreach ($barangs as $Barang)
        <tr>            
            <td>{{ $Barang->Id_Barang }}</td>
            <td>{{ $Barang->Kode_Barang }}</td>
            <td>{{ $Barang->Nama_Barang }}</td>
            <td>{{ $Barang->Kategori_barang }}</td>
            <td>{{ $Barang->Harga }}</td>
            <td>{{ $Barang->Qty }}</td>  
            <td><img width="200px" src="{{asset('storage/'.$Barang->Gambar)}}" alt=""></td>   
            @if (auth()->user()->level == "admin" )                  
            <td>
                <form action="{{ route('barangs.destroy',$Barang->Id_Barang) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data barang?')">
                    <a class="btn btn-info" href="{{ route('barangs.show',$Barang->Id_Barang) }}">Detail</a>
                    <a class="btn btn-primary" href="{{ route('barangs.edit',$Barang->Id_Barang) }}">Edit</a>
                    
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
            @endif
        </tr>
    @endforeach
        </thead>
    </table>
    {{ $barangs->links() }}
    
    @endsection
