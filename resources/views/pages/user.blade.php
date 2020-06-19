@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   <table class="table table-bordered">
                       <thead>
                           <tr>
                               <th>Name</th>
                               <th>Email</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach ($user as $u)
                           <tr>
                            <th>{{ $u->name }}</th>
                            <th>{{ $u->email }}</th>
                        </tr>
                           @endforeach
                           
                       </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
