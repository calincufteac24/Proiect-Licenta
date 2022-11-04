@extends('admin.layout')

@section('content')
<div class="card shadow-3">
        <div class="card-header">
            <h4>Editeaza Produs</h4>
        </div>

        <div class="card-body shadow-1">
            <form action="{{ url('updateproduct/'.$products->id) }}" method="GET" enctype="multipart/form-data">
               @csrf
               @method('PUT')
                <div class="row checkout-form">
                    <div class="col-md-12 mb-3">
                    <select class="form-select" aria-label="Default select example">
                    <option value="">{{ $products->category->name }}</option>
                    </select>
                    </div>
                        <div class="col-md-6">
                            <label for="">Nume</label>
                            <input type="text" required class="form-control" name="name" value="{{ $products->name }}" placeholder=" Introdu Nume">
                        </div>
                        <div class="col-md-6">
                            <label for="">Preț Initial</label>
                            <input type="number"  class="form-control" value="{{ $products->original_price }}" name="original_price">
                        </div>
                        <div class="col-md-6">
                            <label for="">Preț de vanzare</label>
                            <input type="number"  class="form-control" value="{{ $products->selling_price }}" name="selling_price">
                        </div>
                        <div class="col-md-6">
                            <label for="">Imagine</label>
                            <input type="text" class="form-control" value="{{ $products->image }}" name="image" placeholder=" Introdu link-ul">
                        </div>
                        <div class="col-md-6">
                            <label for="">Cantiate</label>
                            <input type="number"  class="form-control" value="{{ $products->quantity }}" name="quantity">
                        </div>
                        <div class="col-md-6">
                            <label for="">Trending</label>
                            <input type="number"  class="form-control" value="{{ $products->trending }}" name="trending">
                        </div>
                        <div class="col-md-6">
                            <label for="">Descriere Scurta</label>
                           <textarea name="small_description" class="form-control"  cols="10" rows="4" placeholder=" Introdu o descriere scurta">{{ $products->small_description }}</textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="">Descriere</label>
                           <textarea name="description" class="form-control" cols="30" rows="4" placeholder=" Introdu o descriere">{{ $products->description }}</textarea>
                        </div>
                        <div class="col-md-6 mt-5">
                            <label for="">Status</label>
                            <input type="checkbox" {{ $products->status == '1' ? 'checked':'' }}  name="status" >
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