@extends('admin.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Utilizatori</h4>
        </div>
        <div class="card-body">
           <table class="table table-bordered table-striped">
               <thead>
                   <tr>
                       <th>Id</th>
                       <th>Nume</th>
                       <th>Email</th>
                       <th>Telefon</th>
                   </tr>
               </thead>
               <tbody>
                   @foreach($users as $user)
                   <tr>
                       <td> {{ $user->id }}</td>
                       <td> {{ $user->name.' '.$user->lname }}</td>
                       <td> {{ $user->email }}</td>
                       <td> {{ $user->telefon }}</td>
                       <td>
                       <a href=" {{ url('view-users/'.$user->id) }} " class="btn btn-primary">Vedeți utilizator</a>
                       </td>
                   </tr>
                   @endforeach
               </tbody>
           </table>
        </div>
    </div>


@endsection