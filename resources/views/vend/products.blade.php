@extends('layout')

@section('content')
    <h1>Add Product</h1>

    <div class="row">
        <div class="col-12">

        <form action="history" method="POST" class="pb-5">

       
            <div class="form-group">
            <label for="name">Product Name:</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div>{{ $errors->first('name') }}</div>


            <div class="form-group">
            <label for="email">Product Type:</label>
                <input type="text" name="type" class="form-control">
            </div>

            <div>{{ $errors->first('type') }}</div>


            <div class="form-group pb-2">
            <label for="location">Price:</label>
                <input type="text" name="price" value="{{ old('price') }}" class="form-control">
            </div>


          <div>{{ $errors->first('price') }}</div>

            <button type="submit" class="btn btn-outline-success">Add item</button>
            <button type="reset" class="btn btn-outline-danger">Cancel </button>

            @csrf
        </form>

        </div>
    </div>

    

   

  
@endsection