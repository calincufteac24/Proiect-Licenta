@extends('admin.layout')

@section('content')


    <div class="text-center my-4">
        <h2>Comenziile de pe magazin</h2>
        <a href="{{ 'orders-history' }}" class="btn btn-primary ">Comenzi completate</a>
        <h5 class="text-muted"> Aici puteti vedea toate comenziile in desfasurare</h5>
    </div>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table table-bordered text-center my-4 border-3">
                    <thead>
                        <tr>
                            <th>Tracking number</th>
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
                            <td> {{$item->status == '0'?'in asteptare' : 'completate'}} </td>
                            <td> <a href=" {{ url('admin/view-orders/'.$item->id) }} " class="btn btn-info"> Vezi comanda </a> </td>
                        </tr>
                       
                        @endforeach
                    </tbody>
                 </table>
            </div>
        </div>
    </div>


@endsection