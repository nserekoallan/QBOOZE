@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                <div class="carnd-header">{{ __('Customer Signup') }}</div>

                
                   
                    

                        <div class="login-page">
                        @csrf
                                <div class="form">
                                <form class="login-form" >
                                    <label>
                                
                                    <input type="name" placeholder="Enter fullname"  />
                                    </label> <br />
                                    <label>
                                    
                                    <input type="name" placeholder="Enter phone number"/>
                                    </label> <br />

                                    <label>
                                    
                                    <input type="email" placeholder="Enter email"/>
                                    </label> <br />
                                    
                                    <label>
                                    <input type="password" placeholder="password" />
                                    </label> <br />
                                    <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                    </button><br>
                                    
                                </form>
                                                            
                                
                            </div>
                        </div>
                    
                
            
        </div>
    </div>
</div>
@endsection