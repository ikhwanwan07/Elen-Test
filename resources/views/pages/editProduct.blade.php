@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard Edit</div>

                <div class="card-body">
                    @if ($errors->any())
  <div class="alert alert-danger alert-dismissible" role="alert">
     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><em>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
 </ul>
</em>
</div>
@endif
                    <form action="{{ route('product.update',$product) }}" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="group">
                            <label for=""> Name</label>
                            <input type="text" name="nama" class="form-control" placeholder="masukkan nama product" value="{{ $product->nama }}">
                        </div>
                        <div class="group">
                            <label for="">Price</label>
                            <input type="text" name="price" class="form-control" placeholder="masukkan nama price" value="{{ $product->price }}">
                        </div>

                        <div class="form-group mt-2">
                        <button type="submit" class="btn btn-warning">Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

