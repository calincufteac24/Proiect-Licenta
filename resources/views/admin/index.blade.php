@extends('admin.layout')


    
  

@section('content')
<div class="card">
        <div class="card-body text-center">
            @foreach($users as $user)
            <h1>Bine ai venit, {{ $user->name }}  {{ $user->lname }}</h1>
            @endforeach
        </div>
    </div>

    <div class="text-center my-4">
        <h2>Comenziile de pe magazin</h2>
        <!-- <a href="{{ 'orders-history' }}" class="btn btn-primary ">Comenzi completate</a> -->
        <h5 class="text-muted"> Aici puteți vedea toate comenziile magazinului
        </h5>
    </div>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table table-bordered text-center my-4 border-3">
                    <thead>
                        <tr>
                            <th>Număr de urmarire</th>
                            <th>Data</th>
                            <th>Status</th>
                            <th>Detalii</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                        @foreach ($orders as $item)
                        <tr>
                            <td> {{$item->tracking_no}} </td>
                            <td> {{$item->created_at}} </td>
                            <td> {{$item->status == '0'?'in așteptare' : 'completate'}} </td>
                            <td> <a href=" {{ url('admin/view-orders/'.$item->id) }} " class="btn btn-info"> Vezi comanda </a> </td>
                        </tr>
                       
                        @endforeach
                    </tbody>
                 </table>
            </div>
        </div>
    </div>


@endsection

