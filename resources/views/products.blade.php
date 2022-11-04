@extends('layout')

@section('content')

<div class="py-5">
    <div class="container">
        <div class="text-center border-bottom border-dark">
            <h1>{{ $category->name }}</h1>
            <h4 class="text-muted">Aici găsiți toate produsele noastre din această categorie</h4>
        </div>


    <div class="row justify-content-between align-items-center mt-5">
        @foreach($products as $product)

        <div class="col-lg-3 col-md-3">
            
            <div class="text-start">
                    <h1>Despre Produs:</h1>
                    <h5 class="text-muted">{{$product->description}}</h5>
                   
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-5">
                <a href="{{ url('view-category/'.$category->slug) }}">
                <div class=" text-center mt-5">
                            <h1>{{ $product->name }}</h1>
                            <h5 class="text-muted"> {{ $product->small_description }}</h5>
                        </div>
                <div class="thumbnail mt-3">
                     <img src="{{ $product->image }}" alt="">
                </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-3">
                <div class="text-center">
                    @if($product->original_price > 0)
                    <h4 class="text-decoration-line-through text-danger">Preț initial: {{ $product->original_price }}Lei </h4>
                    <h3 class=""><strong>Preț: </strong> {{ $product->selling_price }} Lei</h3>
                    @else
                    <h3 class=""><strong>Preț: </strong> {{ $product->selling_price }} Lei</h3>
                    @endif
                    <hr>
                    @if($product->quantity > 0)
                    <label  class="badge bg-success"><h5>In stoc</h5></label>
                    <div class="row justify-content-center mt-5 product_data">
                            <input type="hidden" class="prod_id" value="{{ $product->id }}">

                            <label for="Quantity">Cantitate</label>

                            <div class="input-group text-center mb-3" style="width:130px">

                                    <button class="input-group-text decrement-btn-{{$product->id}}">-</button>
                                    <input type="text" id="{{$product->id}}" name="quantity" class="form-control text-center quantity-input" value="1" >
                                    <button class="input-group-text increment-btn-{{$product->id}}" >+</button>
                                  
                                   <p><a href="" class="btn btn-primary mt-5 addToCartBtn">Adaugă în coș</a> </p>
                                 
                            </div>
                               
                        </div>
                    @else
                    <label class="badge bg-danger"><h5>Stoc Epuizat</h5></label><br> <br>
                    <a href="{{ url('/contact') }}" class="text-decoration-underline"><h5>Adresați o intrebare ?</h5> </a>
                    @endif
                    
                   
                       
                      
                   
                   
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>

@endsection

@section('scripts')

<script>
    $(document).ready(function(){
        

        $('.addToCartBtn').click(function (e) {
            e.preventDefault();

            var product_id = $(this).closest('.product_data').find('.prod_id').val();
            var product_quantity = $(this).closest('.product_data').find('.quantity-input').val();
           
            $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    });

           $.ajax({
            type: "POST",
            url: "/add-to-cart",
            data: {
                'product_id': product_id,
                'product_quantity' : product_quantity,
            },
            success: function(response){
                alertify.set('notifier','position', 'top-right');
                alertify.success(response.status);
            }

            
           }) 

        }); 



    $.each({!! $products->toJson() !!}, function( index, value) {
        $('.increment-btn-' + value.id).click(function(e){
         e.preventDefault();
         
         $('#' + value.id).val( function(i, oldval) {
            if (oldval < value.quantity) {
                return ++oldval;
            }

            return oldval;
         });
     });

     $('.decrement-btn-' + value.id).click(function(e){
         e.preventDefault();
        
         $('#' + value.id).val( function(i, oldval) {
             if (oldval > 0) {
                 return --oldval;
             }

             return oldval;
         });
     });
    });

    });
 </script>

@endsection