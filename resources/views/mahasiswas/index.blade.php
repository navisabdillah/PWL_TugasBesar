@extends('mahasiswas.layout')
@section('content')
<div class="row justify-content-center">
    <div class="col-sm-10">
        <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
    </div>

</div>
<div class="float-left my-2">
    <a class="btn btn-success" href="{{ route('mahasiswas.create') }}"> Input Mahasiswa</a>

</div>

<div class="row justify-content-end">
    <div class="col-md-4">
        <form action="{{ route('mahasiswas.index') }}" accept-charset="UTF-8" method="get">
            <div class="input-group">
                <input type="text" name="search" id="search" placeholder="Cari" class="form-control">
                <span class="input-group-btn">
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
    <tr>
        <th>Nama</th>
        <th>Jenis</th>
        <th>Harga</th>
        <th>Stok</th>
       
        
        <th width="280px">Action</th>
    </tr>
    @foreach ($mahasiswas as $Mahasiswa)
    <tr>
        <td>{{ $Mahasiswa->Nama }}</td>
        <td>{{ $Mahasiswa->Jenis }}</td>
        <td>{{$Mahasiswa->Harga}}</td> 
        <td>{{ $Mahasiswa->Stok }}</td>
        <td>
            <form action="{{ route('mahasiswas.destroy',$Mahasiswa->Nama) }}" method="POST">

                <a class="btn btn-info" href="{{ route('mahasiswas.show',$Mahasiswa->Nama) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('mahasiswas.edit',$Mahasiswa->Nama) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                 </form>
        </td>
    </tr>
    @endforeach
</table>

{{ $mahasiswas -> links('mahasiswas.pagination') }}
