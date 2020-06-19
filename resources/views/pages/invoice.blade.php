@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Sukses</div>

                @foreach ($order as $orders)
                    
               
                <div class="card-body">
                    <h2>Terimkasih Sudah belanja</h2>
                    <table class="table table-borderless">
                        <tr>
                            <th>Kode ID</th>
                            <th>Nama Product</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                        </tr>
                        <tr>
                            <td>{{ $orders->id }}</td>
                            <td>{{ $orders->product->nama }}</td>
                            <td>{{ $orders->qty }}</td>
                            <th>{{ $orders->total }}</td>
                            
                        </tr>
                    </table>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
