@extends('admin.layout')

@section('content')
    
    <div class="py-5">
    <div class="container-lg">
        <div class="text-center">
            <h1 class="border-bottom border-3 border-dark rounded-pill">Categorii</h1>
        </div>
        <div class="row justify-content-center align-items-center mt-5">
        @foreach($categories as $category)
            <div class="col-lg-6">
                <a href="{{ url('view-category/'.$category->slug) }}">
                <div class="thumbnail">
                    <img src="{{ $category->image }}" class="mx-auto d-block" width="200px" alt="">
                        <div class=" text-center mt-2">
                            <h1>{{ $category->name }}</h1>
                            <h5 class="text-muted"> {{ $category->description }}</h5>
                            <a href=" {{ url('editcate/'.$category->id) }} " class="btn btn-primary">Editează</a>
                        <a href=" {{ url('deletecate/'.$category->id) }} " class="btn btn-danger">Șterge</a>
                        </div>
                       
                </div>
                </a>
             </div>
        @endforeach
        </div>
    </div>
</div>
@endsection
@section('scripts')

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('status'))
      <script>
        swal("{{ session('status') }}");
      </script>
      @endif
@endsection