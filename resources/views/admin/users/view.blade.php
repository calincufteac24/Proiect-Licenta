@extends('admin.layout')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info">
                        <h4 class="text-white">Detaliile utilizatorului</h4>
                    </div>
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-md-4 mt-3">
                                <label for="">Rol</label>
                                <div class="border p-2"> {{$users->role_as == '0'? 'Utilizator':'Admin'}} </div>
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Prenume</label>
                                <div class="border p-2"> {{ $users->name }} </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                <label for="">Nume</label>
                                <div class="border p-2"> {{ $users->lname }} </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                <label for="">Email</label>
                                <div class="border p-2"> {{ $users->email }} </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                <label for="">Adresa de livrare</label>
                                <div class="border p-2"> 
                                    {{ $users->adresa }} 
                                  
                                 </div>
                                 </div>
                                 <div class="col-md-4 mt-3">
                                 <label for="">Oras</label>
                                <div class="border p-2">   {{ $users->oras }}  </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                <label for="">Judet</label>
                                <div class="border p-2"> {{ $users->judet }}  </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                 <label for="">Cod Poștal</label>
                                <div class="border p-2"> {{ $users->codpostal }} </div>
                                </div>
                                <div class="col-md-4 mt-3">
                                 <label for="">Numar de telefon</label>
                                <div class="border p-2"> {{ $users->telefon }} </div>
                            </div>
                        </div>
</div>

@endsection