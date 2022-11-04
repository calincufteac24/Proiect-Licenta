@extends('admin.layout')

@section('content')


    <div class="text-center my-4">
        <h2>Intrebarile de pe magazin</h2>
        
        <h5 class="text-muted"> Aici puteți vedea toate intrebările de pe magazin </h5>
    </div>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table table-bordered text-center my-4 border-3">
                    <thead>
                        <tr>
                            <th>Nume</th>
                            <th>Email</th>
                            <th>Telefon</th>
                            <th>Data</th>
                            <th>Mesaj</th>
                        </tr>
                    </thead>
                    <tbody>
                    <form action=" {{ URL::current() }} " method="GET">
                        @foreach ($contacts as $contact)
                        <tr>
                           
                            <td> {{$contact->nume}} </td>
                            <td> {{$contact->email}} </td>
                            <td> {{$contact->telefon}} </td>
                            <td> {{$contact->created_at}} </td>
                            <td> {{$contact->mesaj}}    <input type="checkbox" name="filterbrand" />  </td>
                           
                          
                       
                        </tr>
                       
                        @endforeach
                        
                    </tbody>
                    <button class="btn btn-primary btn-sm float-end" type="submit" > Am văzut </button></h5>  
                 </table>
                 </form>
            </div>
        </div>
    </div>


@endsection