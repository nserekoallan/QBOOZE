@extends('layout')

@section('content')
    <h1>Orders</h1>

    <div class="row">
        <div class="col-12">

        <form action="orders" method="POST" class="pb-5">

       
            <div class="form-group">
            <label for="name">Name:</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div>{{ $errors->first('name') }}</div>


            <div class="form-group">
            <label for="email">Email:</label>
                <input type="email" name="email" class="form-control">
            </div>

            <div>{{ $errors->first('email') }}</div>


            <div class="form-group pb-2">
            <label for="location">Delivery Location:</label>
                <input type="text" name="location" value="{{ old('location') }}" class="form-control">
            </div>


            <div class="form-group pb-2">
            <label for="contact">Contact:</label>
                <input type="text" name="contact" value="{{ old('contact') }}" class="form-control">
            </div>

            <div>{{ $errors->first('contact') }}</div>

            <button type="submit" class="btn btn-outline-success">Make Order</button>
            <button type="reset" class="btn btn-outline-danger">Cancel Order</button>

            @csrf
        </form>

        </div>
    </div>

    

  
  
@endsection