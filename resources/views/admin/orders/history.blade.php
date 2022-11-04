@extends('admin.layout')

@section('content')


    <div class="text-center my-4">
        <h2>Istoricul comenzilor</h2>
        <a href="{{ '/dashboard/orders' }}" class="btn btn-primary ">Comenzi in desfasurare</a>
       
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
                            <td> {{$item->status == '0'?'asteptare' : 'completata'}} </td>
                            <td> <a href=" {{ url('admin/view-orders/'.$item->id) }} " class="btn btn-info"> Vezi comanda </a> </td>
                        </tr>
                       
                        @endforeach
                    </tbody>
                 </table>
            </div>
        </div>
    </div>


@endsection