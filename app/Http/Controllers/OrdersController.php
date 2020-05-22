<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function list()
    {
        $orders = Order::all();
    
        return view('customer.history',[
            'orders' => $orders,
        ]);
    }

    public function store()
    {
        $data = request()-> validate([
            'name' => 'required|min:3',
            'email'=> 'required',
            'location'=> 'required',
            'contact'=> 'required|min:10|max:10',
        ]);

        $order = new Order();
        $order->name = request('name');
        $order->email = request('email');
        $order->location = request('location');
        $order->contact = request('contact');
        $order->save();  

        return back();
    }
}
