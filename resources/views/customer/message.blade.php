@extends('layouts.ap')

@section('content')
   <div class="container">
            <h1>Send mesage</h1>

            <form action="order" method="POST" class="pd-5">
                <div class="form-group">
                    <label for="product">Receipient</label>
                    <input type="text" name="product" class="form-group">
                </div>
                <div class="form-group">
                    <label for="message">Message</label><br>
                    <textarea name="message" class="form-group" rows="4" cols="50"></textarea>
                </div>
                

                <button type="submit" class="btn-success">Send Message</button>
                <button type="reset" class="btn-danger">Cancel Message</button>

            </form>
            <hr>

            <h1>Message History</h1>

    
    </div>
@endsection