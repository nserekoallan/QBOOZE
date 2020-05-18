@extends('layouts.ven')

@section('content')
<div class="container">
        <h1>Delivery Form</h1>

        <form action="deliveryform" method="POST" class="pd-5">
            <div class="form-group">
                <label for="orderno">Order Number:</label>
                <input type="text" name="product" class="form-group">
            </div>
            <div class="form-group">
                <label for="quantity">Delivery Loaction:</label>
                <input type="text" name="quantity" class="form-group">
            </div>
            <div class="form-group">
                <label for="vendor">Date:</label>
                <input type="text" name="vendor" class="form-group">
            </div>
            <div class="form-group">
                <label for="vendor">Contact Information:</label>
                <input type="text" name="vendor" class="form-group">
            </div>

            <button type="submit" class="btn-success">Confirm Delivery</button>
            <button type="reset" class="btn-danger">Cancel</button>

        </form>
        <hr>

        <h1>Delivery History</h1>

   
</div>
@endsection 