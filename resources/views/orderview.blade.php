@extends('layout')

@section('content')


    <div class="text-center my-4">
        <h2>Detaliile comenzii</h2>
     
    </div>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info">
                        <h4>Comanda</h4>
                    </div>
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-md-5">
                                <label for="">Prenume</label>
                                <div class="border p-2"> {{ $orders->fname }} </div>
                                <label for="">Nume</label>
                                <div class="border p-2"> {{ $orders->lname }} </div>
                                <label for="">Email</label>
                                <div class="border p-2"> {{ $orders->email }} </div>
                                <label for="">Adresa de livrare</label>
                                <div class="border p-2"> 
                                    {{ $orders->adresa }} 
                                    {{ $orders->oras }} 
                                    {{ $orders->judet }} 
                                    
                                 </div>
                                 <label for="">Cod Poștal</label>
                                <div class="border p-2"> {{ $orders->codpostal }} </div>
                                 <label for="">Număr de telefon</label>
                                <div class="border p-2"> {{ $orders->telefon }} </div>
                                <label for="">Plata</label>
                                <div class="border p-2"> {{ $orders->payment_mode }} </div>
                            </div>
                            <div class="col-md-7">
                                <table class="table table-bordered order-details text-center">
                                    <thead>
                                        <tr>
                                            <th>Nume</th>
                                            <th>Cantitate</th>
                                            <th>Preț</th>
                                            <th>Imagine</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $total = 0; @endphp
                                        @foreach($orders->orderitems as $item)
                                        <tr>
                                            <td> {{ $item->products->name}} </td>
                                            <td> {{ $item->prod_quantity}} </td>
                                            <td> {{ $item->products->selling_price}} </td>
                                            <td> <img src=" {{ $item->products->image}} " width="70px" alt=""> </td>

                                        </tr>
                                    </tbody>
                                    @php $total +=  $item->products->selling_price * $item->prod_quantity; @endphp
                                    @endforeach 
                                </table>
                                <br>
                                <h4 class="border-start border-5 me-5 border-info rounded-pill float-end">   Prețul total: {{$total}} </h4>
                            </div>
                        </div>
                    </div>
                </div>
                   
            </div>
        </div>
    </div>


@endsection