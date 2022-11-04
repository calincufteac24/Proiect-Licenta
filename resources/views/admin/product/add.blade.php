@extends('admin.layout')

@section('content')
<div class="card shadow-3">
        <div class="card-header">
            <h4>Adauga Produs</h4>
        </div>

        <div class="card-body shadow-1">
            <form action="{{ url('/dashboard/insert-product') }}" method="POST" enctype="multipart/form-data">
               @csrf
                <div class="row checkout-form">
                    <div class="col-md-12 mb-3">
                    <select class="form-select" name="category_id" aria-label="Default select example">
                    <option value="">Selectează o categorie</option>
                   @foreach($category as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                   @endforeach
                    </select>
                    </div>
                        <div class="col-md-6">
                            <label for="">Nume</label>
                            <input type="text" required class="form-control" name="name" id="nume1" placeholder=" Introdu Nume">
                        </div>
                        <div class="col-md-6">
                            <label for="">Preț Initial</label>
                            <input type="number"  class="form-control" name="original_price">
                        </div>
                        <div class="col-md-6">
                            <label for="">Preț de vanzare</label>
                            <input type="number"  class="form-control" name="selling_price">
                        </div>
                        <div class="col-md-6">
                            <label for="">Imagine</label>
                            <input type="text" class="form-control" name="image" placeholder=" Introdu link-ul">
                        </div>
                        <div class="col-md-6">
                            <label for="">Cantiate</label>
                            <input type="number"  class="form-control" name="quantity">
                        </div>
                        <div class="col-md-6">
                            <label for="">Trending</label>
                            <input type="number"  class="form-control" name="trending">
                        </div>
                        <div class="col-md-6">
                            <label for="">Descriere Scurtă</label>
                           <textarea name="small_description" class="form-control" cols="10" rows="4" placeholder=" Introdu o descriere scurta"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="">Descriere</label>
                           <textarea name="description" class="form-control" cols="30" rows="4" placeholder=" Introdu o descriere"></textarea>
                        </div>
                       
                       
                        <div class="col-md-6 mt-5">
                            <label for="">Status</label>
                            <input type="checkbox"  name="status" >
                        </div>
                       <div class="col-md-12 mt-4">
                           <button type="submit" class="btn btn-info">Submit</button>
                       </div>

                    </div>
                </div>
            </form>
        </div>
</div>

@endsection