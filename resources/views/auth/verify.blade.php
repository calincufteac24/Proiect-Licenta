@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header text-center text-5"><h4>{{ __('Verificare adresa de email') }}</h4></div>

                <div class="card-body text-center">
                    @if (session('resent'))
                        <div class="alert alert-success text-center" role="alert">
                            {{ __('Un link de verificare a fost trimisa la adresa dumneavoastra de email cu care v-ati inregistrat.') }}
                        </div>
                    @endif
                        <h5> {{ __('Inainte de a continua, va rugam sa verificati adresa de email.') }}
                    {{ __('Daca nu ati primit nici o adresa de email') }},</h5>
                   
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <div class="text-center mt-3">
                        <button type="submit" class="btn btn-info">{{ __('Click aici pentru a retrimite') }}</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
