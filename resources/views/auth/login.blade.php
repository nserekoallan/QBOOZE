@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                <div class="carnd-header">{{ __('Login') }}</div>

                
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="login-page">
                                <div class="form">
                                <form class="login-form">
                                    <label>
                                
                                    <input type="email" placeholder="email"/>
                                    </label> <br />
                                    <label>
                                    
                                    <input type="password" placeholder="password"/>
                                    </label> <br />
                                    <button name="submit" type="submit">login</button>
                                    <p> Forgotten Password? <a href="#">Recovery</a> or Sign Up as
                                    <a href="customersu">Customer</a> or <a href="vendorsu">Vendor</a>
                                </p>
                                </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    </form>
                
            
        </div>
    </div>
</div>
@endsection
