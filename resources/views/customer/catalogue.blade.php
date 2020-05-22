@extends('layout')

@section('content')


<div class="container bootstrap snipets">
    <h1 class="text-center text-muted">Product catalog</h1>
    <div class="row flow-offset-1">
            
            @foreach ($products as $product)
            <div class="col-xs-6 col-md-4">
                <div class="product tumbnail thumbnail-3"><a href="#"><img src="http://static.livedemo00.template-help.com/wt_58434/images/shop-2.jpg" alt=""></a>
                    <div class="caption">
                    <h6><a href="#">{{$product->name}}</a></h6><span class="price">
                    <span class="price sale"> UGX {{$product->location}}</span>
                    </div>
                </div>
            </div>
            @endforeach
            
    </div>
    </div>

    
@endsection

