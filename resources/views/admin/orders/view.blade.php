@extends('admin.layout')

@section('content')


    <div class="text-center my-4">
        <h2>Detaliile comenzii</h2>
     
    </div>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info">
                        <h4 class="text-white">Comanda {{ $orders->tracking_no }}
                            <a href="{{ url('/dashboard/orders') }}" class="btn btn-warning float-end">Mergi inapoi</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-md-5">
                                <label for="">Prenume:</label>
                                <div class="border p-2"> {{ $orders->fname }} </div>
                                <label for="">Nume:</label>
                                <div class="border p-2"> {{ $orders->lname }} </div>
                                <label for="">Email:</label>
                                <div class="border p-2"> {{ $orders->email }} </div>
                                <label for="">Adresa de livrare:</label>
                                <div class="border p-2"> 
                                    {{ $orders->adresa }} 
                                 </div>
                                 <label for="">Oras:</label>
                                 <div class="border p-2"> {{ $orders->oras }} </div>
                                
                                 <label for="">Judet:</label>
                                 <div class="border p-2"> {{ $orders->judet }} </div>
                                
                                 <label for="">Cod Postal:</label>
                                <div class="border p-2"> {{ $orders->codpostal }} </div>
                                 <label for="">Numar de telefon:</label>
                                <div class="border p-2"> {{ $orders->telefon }} </div>
                                <label for="">Plata prin:</label>
                                <div class="border p-2"> {{ $orders->payment_mode }}</div>
                            </div>
                            <div class="col-md-7">
                                <table class="table table-bordered order-details text-center">
                                    <thead>
                                        <tr>
                                            <th>Nume</th>
                                            <th>Cantitate</th>
                                            <th>Pret</th>
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
                                            <td> <img src=" {{ $item->products->image}} " width="80px" alt=""> </td>

                                        </tr>
                                    </tbody>
                                    @php $total +=  $item->products->selling_price * $item->prod_quantity; @endphp
                                    @endforeach 
                                </table>
                                <br>
                                <h4 class="border-start border-5 me-5 border-info rounded-pill float-end">   Pretul total: {{$total}} </h4>
                                    <div class="mt-5">
                                    <label for="">Status Comanda</label>
                                    <form action="{{ url('update-order/'.$orders->id) }}" method="GET">
                                        @csrf
                                        
                                <select class="form-select" name="order_status">
                                <option selected>Selecteaza statusul</option>
                                <option  {{ $orders->status == '0' ? 'selected': '' }} value="0">In desfasurare</option>
                                <option  {{ $orders->status == '1'? 'selected': '' }}  value="1">Completata</option>
                                </select>
                                <button type="submit" class="btn btn-primary mt-3 float-end"> Modifica </button>
                                </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                   
            </div>
        </div>
    </div>


@endsection