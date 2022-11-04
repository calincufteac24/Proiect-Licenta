@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header text-center">{{ 'Bine ai venit,' }}</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <h4> {{ __('Felicitări, te-ai conectat cu succes!') }}</h4> 
                   
                  
                </div>
               
            </div>
            <p class="btn-holder mt-5 text-center"><a href="{{ url('/category') }}" class="btn btn-lg btn-outline-info" role="button"> Vedeți  produsule </a> </p>
        </div>
    </div>
</div>
@endsection
