@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Order</div>

                <div class="card-body">
                   <table id="dataTable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Order Code</th>
                            <th>Product name</th>
                            <th>jumlah</th>
                            <th>Total</th>
                            <th>Nama</th>
                            <th>Phone</th>
                            <th>Alamat</th>
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
            ajax : '{{ route('getDataOrder') }}',
                columns: [
                    {data: 'id'},
                    {data: 'Nama'},
                    {data: 'qty'},
                    {data: 'total'},
                    {data: 'nama'},
                    {data: 'phone'},
                    {data: 'alamat'},
                    {data: 'action'},
                ]
        });
    });
</script>
@endpush