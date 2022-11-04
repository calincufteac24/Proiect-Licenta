@extends('admin.layout')

@section('content')
    
    <div class="py-5">
    <div class="container-lg">
        <div class="text-center">
            <h1 class="border-bottom border-3 border-dark rounded-pill">Produse</h1>
        </div>
        <div class="row justify-content-center align-items-center mt-5">
        @foreach($products as $product)
            <div class="col-lg-6">  
                <div class="thumbnail">
                    <img src="{{ $product->image }}" class="mx-auto d-block" width="200px" alt="">
                        <div class=" text-center mt-2">
                            <h1>{{ $product->name }}</h1>
                           
                            <a href=" {{ url('editproduct/'.$product->id) }} " class="btn btn-primary">Editeaza</a>
                        <a href=" {{ url('deleteproduct/'.$product->id) }} " class="btn btn-danger">Sterge</a>
                        </div>
                       
                </div>
                </a>
             </div>
        @endforeach
        </div>
    </div>
</div>
@endsection