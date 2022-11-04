@extends('layout')

@section('content')

<div class="py-5">
    <div class="container-lg">
        <div class="text-center">
            <h1>Categorii</h1>
            <h4 class="text-muted">Aici găsiți toate categoriile noastre de produse</h4>
        </div>
        <div class="row justify-content-center align-items-center mt-5">
        @foreach($categories as $category)
            <div class="col-lg-4">
                <a href="{{ url('view-category/'.$category->slug) }}">
                <div class="thumbnail">
                    <img src="{{ $category->image }}" alt="">
                        <div class=" text-center mt-2">
                            <h1>{{ $category->name }}</h1>
                            <h5 class="text-muted"> {{ $category->description }}</h5>
                        </div>
                </div>
                </a>
             </div>
        @endforeach
        </div>
    </div>
</div>

@endsection