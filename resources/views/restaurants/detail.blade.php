@extends('restaurants.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Menu
                </div>

                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Nama: </b>{{$Restaurant->Nama}}</li>
                        <li class="list-group-item"><b>Jenis: </b>{{$Restaurant->Jenis}}</li>
                        <li class="list-group-item"><b>Harga: </b>{{$Restaurant->Harga}}</li>
                        <li class="list-group-item"><b>Stok: </b>{{$Restaurant->Stok}}</li>
                       </ul>
                </div>

                <a class="btn btn-success mt3" href="{{ route('mahasiswas.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection