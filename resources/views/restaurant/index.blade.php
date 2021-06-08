@extends('restaurants.layout')

@section('content')

<div class="float-left my-2">
  <a class="btn btn-success" href="{{ route('restaurant.create') }}"> Input Menu</a>

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
  @foreach ($restaurants as $Restaurant)
  <tr>
      <td>{{ $Restaurant->Nama }}</td>
      <td>{{ $Restaurant->Jenis }}</td>
      <td>{{ $Restaurant->Harga }}</td>
      <td>{{ $Restaurant->Stok }}</td>
      
      <td>
          <form action="{{ route('restaurants.destroy',$Restaurant->Nama) }}" method="POST">

            <a class="btn btn-info" href="{{ route('restaurants.show',$Restaurant->Nim) }}">Show</a>
              <a class="btn btn-primary" href="{{ route('restaurants.edit',$Restaurant->Nama) }}">Edit</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
              
          </form>
      </td>
  </tr>
  @endforeach
</table>

@endsection