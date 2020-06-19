@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

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
                    <form action="{{ route('product.create') }}">
                    @csrf
                    @method('POST')
                        <div class="group">
                            <label for=""> Name</label>
                            <input type="text" name="nama" class="form-control" placeholder="masukkan nama product">
                        </div>
                        <div class="group">
                            <label for="">Price</label>
                            <input type="text" name="price" class="form-control" placeholder="masukkan nama price">
                        </div>

                        <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tabel</div>

                <div class="card-body">
                    <table id="dataTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name Product</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>

    $(function() {
        $('#dataTable').DataTable({
            processing : true,
            serverSide : true,
            ajax : '{{ route('getDataProduct') }}',
                columns: [
                    {data: 'id'},
                    {data: 'nama'},
                    {data: 'price'},
                    {data: 'action'},
                ]
        });
    });
</script>

@endpush
