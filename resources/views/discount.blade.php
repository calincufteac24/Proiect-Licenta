@extends('layout')

@section('content')

<div class="container">
    <div class="row justify-content-center align-items-center">

        <div class="border  text-center my-5 border-3 border-info">
            <h1 class="border-bottom rounded-pill my-2 border-4">
                Mesaj important!
            </h1>
            <div class="">
                <h4>Dacă comanda dumneavoastră este mai mare decât stocul magazinului, adresați o intrebare în zona de contact și vom reveni în cel mult 24h cu o oferta de preț, durata livrării și toate informațiile pe care le doriți . </h4>
            </div>
        </div>
        
    
        
      <div class="col-lg-4 me-5">

       <form action=" {{ URL::current() }} " method="GET">
           <div class="card text-start">
               <div class="card-header">
              <h5>Categorii <button class="btn btn-primary btn-sm float-end" type="submit" > Filtrați </button></h5>  
            
            </div>
             <div class="card-body">
                 
                 @foreach($categories as $category)
                @php
                 $checked = [];
                 if(isset($_GET['filterbrand']))
                 {
                     $checked = $_GET['filterbrand'];
                 }
                 @endphp
                 <div class="mb-1">
                     <input type="checkbox" name="filterbrand[]" value="{{$category->id}}"
                     @if(in_array($category->id, $checked)) checked  @endif />
                     
                     {{ $category->name }} 
                 </div>
                  @endforeach 
               </div>
               </form>
           </div>
                </div>
         <div class="col-lg-4 ms-5">
           <div class="mt-3">
           <span class="font weight-bold sort-font mt-3"> Sortare dupa: </span><br>
          <a href=" {{ URL::current() }} " class="sort-font">Toate</a><br>
          <a href="{{ URL::current().'?sort= price_asc'}}" class="sort-font">Pret - Crescător</a><br>
          <a href="{{ URL::current().'?sort=price_desc' }}" class="sort-font">Pret - Descrescător  </a>
           </div>
               
           </div>

        <div class="title text-center my-5 border-bottom border-3 ">
            <h2><i class="bi bi-percent"></i> Aici găsiți toate produsele noastre la reducere!</h2>
            <h4 class="text-muted">Stoc limitat !</h4>
        </div>

            


            @foreach($products as $product)
                @if($product->original_price > 0)
        <div class="col-xs-18 col-sm-6 col-md-6 col-lg-3 product_data">
            <div class="thumbnail ">
                <img src="{{ $product->image }}" alt="">
                <div class="caption">
                    <div class="col-sm-10 col-md-12 col-lg-10 mt-5">
                       
                            <h4>{{ $product->name }}</h4>
                            <p>{{ $product->small_description }}</p>
                            @if($product->original_price > 0)
                                <h4 class="text-decoration-line-through text-danger">Preț initial: {{ $product->original_price }}Lei </h4>
                                <h3 class=""><strong>Preț: </strong> {{ $product->selling_price }} Lei</h3>
                                @else
                                <h3 class=""><strong>Preț: </strong> {{ $product->selling_price }} Lei</h3>
                                @endif
                               
                     </div>
                   
                </div>
              
            </div>  
         
         </div>
            @endif
         @endforeach  
       
    </div>
</div>


@endsection

@section('scripts')

 <script>
    $(document).ready(function(){

        $('.FindBtn').click(function(e){
            e.preventDefault();
     var cat = $("#category_id").val();

    alert(cat)
        $.ajax({
            type: "GET",
            dataType: 'html',
            url: "discount",
            data: {'category_id': cat, },
            success: function(response){
                alert(response.status);
            }


        });
        
        
        
        
        
        
        });

    });



</script>
@endsection