<!-- extinde layout-ul pentru toate paginile -->
@extends('layout')

<!-- contentul din prima pagina -->
@section('content')
<div class="container mt-3">
    <div class="row justify-content-center " >
                <div class="text-center  text-secondary ">
                    <h3>Bine ați venit, la PsMaster. Cel mai bun magazin online pentru produse de power-supply și electronice. </h3>
                </div>
    </div>
</div>
             
<!-- carousel poze -->
<div class="container-sm d-flex justify-content-center align-items-center ">
    <div class="carousel slide carousel-fade" id="carouselExample" data-bs-interval="5000" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="slide 1"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-current="true" aria-label="slide 2"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-current="true" aria-label="slide 3"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="3" aria-current="true" aria-label="slide 4"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="4" aria-current="true" aria-label="slide 5"></button>
        </div>
        
       <div class="carousel-inner justify-content-center align-items-center">
        <div class="carousel-item active">
            <img src="carusel/wifi.jpg" alt="asus" class="d-block w-100">
            <div class="carousel-caption d-none d-md-block text-start">
                <h5>Routere Wifi 6</h5>
            </div>
        </div>

        <div class="carousel-item ">
            <img src="carusel/pwr.jpg" alt="pwr" class="d-block ">
        </div>

        <div class="carousel-item ">
            <img src="carusel/casti.jpg" alt="casti" class="d-block ">   
        </div>

        <div class="carousel-item ">
            <img src="carusel/set.jpg" alt="set" class="d-block ">
        </div>

        <div class="carousel-item ">
            <img src="carusel/ftp.jpg" alt="ftp" class="d-block ">
            <div class="carousel-caption d-none d-md-block">
                <h5>Cabluri de retea FTP/Cat5/Cat6/Cat6A</h5>
            </div>
        </div>

       </div> 
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>

</div>



<section>
<div class="text-center pt-3 ">
    <h1>Cele mai vandute produse</h1>
    <h4 class="text-muted">Aici veți găsi o listă cu cele mai căutate produse</h4>
    <i class="bi bi-star-fill"></i>
    <i class="bi bi-star-fill"></i>
    <i class="bi bi-star-fill"></i>
    <i class="bi bi-star-fill"></i>
    <i class="bi bi-star-fill"></i>
</div>

 <!-- cele mai bine vandute produse -->
 <div class="row justify-content-around align-items-center text-center mt-5 shadow-lg">
                @foreach($products as $product)
                    @if($product->trending > 0)
                <div class="col-xs-18 col-sm-6 col-md-6 col-lg-3">
                    <div class="thumbnail">
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
                <div class="col-md-12">
                    <p class="btn-holder mt-5"><a href="{{ url('/category') }}" class="btn btn-lg btn-outline-info" role="button"> Vedeți  produsele </a> </p>
                </div>
</div>

</section>




@endsection


