@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                <div class="carnd-header">{{ __('Vendor Signup') }}</div>

                
                   
                    

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

                                    <label>
                                    
                                    <input type="name" placeholder="Enter location"/>
                                    </label> <br />
                                    <label> Payment plan:
                                    <select name="type" id="type" class="form-control" >
                                        <option value="" disabled>Select payment plan</option>
                                        <option value="0">MM</option>
                                        <option value="1">Visa</option>
                                    </select>
                                    </label>
                                    
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