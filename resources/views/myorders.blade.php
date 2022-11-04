@extends('layout')

@section('content')


    <div class="text-center my-4">
        <h2>Comenziile dumneavoastra</h2>
        <h5 class="text-muted"> Aici puteți vedea toate comenziile și cele in desfasurare și cele finisate</h5>
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
                            <td> {{$item->status == '0'?'în așteptare' : 'receptionat'}} </td>
                            <td> <a href=" {{ url('view-orders/'.$item->id) }} " class="btn btn-info"> Vezi comanda </a> </td>
                        </tr>
                       
                        @endforeach
                    </tbody>
                 </table>
            </div>
        </div>
    </div>


@endsection