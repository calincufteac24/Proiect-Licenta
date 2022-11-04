@extends('layout')

@section('content')
<div>
    <h2 class="text-center mt-5">Coșul tău de cumpărături</h2>
</div>

<div class="container my-5">
    <div class="card shadow ">
        @if($cartitems->count() > 0)
        <div class="card-body">
           @php $total = 0; @endphp
            @foreach($cartitems as $item)
            <div class="row justify-content-between align-items-center product_data">
                <div class="col-md-2 text-center">
                    <img src="{{ $item->products->image }}" alt="imagine">
                </div>
                <div class="col-md-3">
                    <h3>{{ $item->products->name }} </h3>
                </div>
                <div class="col-md-3">
                    <h3 class="ms-4">{{ $item->products->selling_price}} Lei</h3>
                    <input type="hidden" class="prod_id" value="{{ $item->prod_id }}">
                            <label for="Quantity" class="ms-5">Buc</label>
                          
                            <div class="input-group text-center mb-3" style="width:130px">
                                    <button class="input-group-text changeQuantity decrement-btn">-</button>
                                    <input type="text" name="quantity" class="form-control text-center quantity-input" value="{{ $item->prod_quantity }}" >
                                    <button class="input-group-text changeQuantity increment-btn" id="inputq" value="{{$item->products->quantity}}" >+</button>
                            </div>
                </div>
                
                   <div class="col-md-2">
                    <button class="btn btn-danger DeleteCartBtn"><i class="bi bi-trash3-fill"></i> Șterge produs</button>
                </div>
            </div>
            @php $total +=  $item->products->selling_price * $item->prod_quantity; @endphp
            @endforeach
        </div>
        <div class="card-footer bg-muted row justify-content-between">
            <div class="col"> <h3 class="text-start"> Prețul total: {{ $total }}</h3> </div>
            <div class="col"> <a href="{{ url('checkout') }}" class="btn btn-outline-success float-end">Finalizează comanda</a></div>
           
        </div>
        @else
        <div class="card-body text-center">
            <h2><i class="bi bi-cart4"></i> Coșul tău de cumpărături este gol. </h2>
            <a href="{{ url('category') }}" class="btn btn-outline-info float-end"> Continuă cumpărăturile... </a>
        </div>
        @endif
    </div>

</div>


@endsection

@section('scripts')

<script>
    $(document).ready(function(){
      
        $('.increment-btn').click(function(e){
         e.preventDefault();
            var inc_value = $('.quantity-input').val();
            var max = $('#inputq').val();
            var value = parseInt(inc_value, max);
            value = isNaN(value) ? 0 : value;
            if(value < max)
            {
                value++;
                $('.quantity-input').val(value);
            }
     });

     $('.decrement-btn').click(function(e){
         e.preventDefault();
            var max = $('#inputq').val();
            var dec_value = $('.quantity-input').val();
            var value = parseInt(dec_value, max);
            value = isNaN(value) ? 0 : value;
            if(value > 1)
            {
                value--;
                $('.quantity-input').val(value);
            }
     });
   
   

     $('.DeleteCartBtn').click(function (e) {
         e.preventDefault();

         var prod_id = $(this).closest('.product_data').find('.prod_id').val();

         $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                
            });

         $.ajax({
             method: "delete",
             url: "delete-cart-item",
             data: {
                 'prod_id': prod_id,
             },
             
             success: function(response){
                alertify.set('notifier','position', 'top-right');
                alertify.error(response.status);
                window.setTimeout(function(){location.reload()},1000)
             }
         });
     });

     $('.changeQuantity').click(function(e) {
        e.preventDefault();

        $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                
            });

        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
        var prod_quantity = $(this).closest('.product_data').find('.quantity-input').val();

        $.ajax({
             method: "POST",
             url: "update-cart",
             data: {
                 'prod_id': prod_id,
                 'prod_quantity' : prod_quantity,
             },
                 success: function(response){
                alertify.set('notifier','position', 'top-right');
                alertify.success(response.status);
                window.setTimeout(function(){location.reload()},1000)
                 
                
                }
            });
     });


});

 </script>

@endsection