@extends('layouts.ap')

@section('content')
<div class="container">
        <h1>Order Form</h1>

        <form action="order" method="POST" class="pd-5">
            <div class="form-group">
                <label for="product">Product</label>
                <select name="type" id="type" class="form-group">
                    <option value="" disabled>Select product</option>
                    <option value="0">Beer</option>
                     <option value="1">Wine</option>
                     <option value="1">Spirit</option>
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="text" name="quantity" class="form-group">
            </div>
            <div class="form-group">
                <label for="vendor">Vendor</label>
                <select name="type" id="type" class="form-group">
                    <option value="" disabled>Select Vendor</option>
                    <option value="0">Vendor 1</option>
                    <option value="1">Vendor 2</option>
                    <option value="1">Vendor 3</option>
                </select>
            </div>

            <button type="submit" class="btn-success">Proceed to Payment</button>
            <button type="reset" class="btn-danger">Clear</button>

        </form>
        <hr>

        <h1>Order History</h1>

   
</div>
@endsection 