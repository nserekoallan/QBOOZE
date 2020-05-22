@extends('layout')

@section('content')
   
    <hr>

    <h1>Order History</h1>

    <div class="row">
        <div class="col-12">
            <ul>
            @foreach ($orders as $order)
                <li>{{ $order->name }} || {{ $order->location }} || {{ $order->contact}}</li>
            @endforeach
            </ul>
        </div>
    </div>
    

  
@endsection