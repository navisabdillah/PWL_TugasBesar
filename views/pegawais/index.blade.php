@extends('barangs.layout')
@section('content')

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
    <a class="btn btn-success" href="{{ route('pegawais.create') }}"> Input Pegawai</a>
</div>
@endif
    <div class="mx-auto pull-right">
        <div class="float-left">
            <form action="{{ route('pegawais.index') }}" method="GET" role="search">
                <div class="input-group">
                    <span class="input-group-btn mr-3 mt-1">
                        <button class="btn btn-info" type="submit" title="Search Barang">
                            <span class="fas fa-search">Search</span>
                        </button>
                    </span>

                    <input type="text" class="form-control mr-3 mt-1" name="term" placeholder="Search Nama Barang" id="term">
                    <a href="{{ route('pegawais.index') }}" class=" mt-1">
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
            <th>Id_Pegawai</th>
            <th>Kode_Pegawai</th>
            <th>Nama_Pegawai</th>
            <th>Kategori_Pegawai</th>
            <th>Umur</th>
            <th>Gambar</th>
            @if (auth()->user()->level == "admin" )
            <th width="280px">Action</th>
            @endif
        </tr>
        @foreach ($pegawais as $Pegawai)
        <tr>
            <td>{{ $Pegawai->Id_Pegawai }}</td>
            <td>{{ $Pegawai->Kode_Pegawai }}</td>
            <td>{{ $Pegawai->Nama_Pegawai }}</td>
            <td>{{ $Pegawai->Kategori_Pegawai }}</td>
            <td>{{ $Pegawai->Umur }}</td>
            <td><img width="200px" src="{{asset('storage/'.$Pegawai->Gambar)}}" alt=""></td>  
            @if (auth()->user()->level == "admin" )                      
            <td>
                <form action="{{ route('pegawais.destroy',$Pegawai->Id_Pegawai) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data pegawai?')">
                    <a class="btn btn-info" href="{{ route('pegawais.show',$Pegawai->Id_Pegawai) }}">Detail</a>
                    <a class="btn btn-primary" href="{{ route('pegawais.edit',$Pegawai->Id_Pegawai) }}">Edit</a>
                    
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
    
    {{ $pegawais->links() }} 
    
@endsection