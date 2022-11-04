@extends('admin.layout')

@section('content')
<div class="card shadow-3">
        <div class="card-header">
            <h4>Adaugă Categorie</h4>
        </div>

        <div class="card-body shadow-1">
            <form action="{{ url('insert-category') }}" method="POST">
               @csrf
                <div class="row checkout-form">
                        <div class="col-md-6">
                            <label for="">Nume</label>
                            <input type="text" required class="form-control" name="name" id="nume1" placeholder=" Introdu Nume">
                        </div>
                        <div class="col-md-6">
                            <label for="">Prescurtare</label>
                            <input type="text" required class="form-control " name="slug" placeholder=" Introdu o prescurtare">
                        </div>
                        <div class="col-md-6">
                            <label for="">Descriere</label>
                           <textarea name="description" class="form-control" cols="30" rows="4" placeholder=" Introdu o descriere"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="">Imagine</label>
                            <input type="text" class="form-control" name="image" placeholder=" Introdu link-ul">
                        </div>
                        <div class="col-md-6">
                            <label for="">Status</label>
                            <input type="checkbox"  name="status" >
                        </div>
                        <div class="col-md-6">
                            <label for="">Popularitate</label>
                            <input type="checkbox"  name="popular">
                        </div>
                       <div class="col-md-12">
                           <button type="submit" class="btn btn-info">Submit</button>
                       </div>

                    </div>
                </div>
            </form>
        </div>
</div>

@endsection