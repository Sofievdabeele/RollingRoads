@extends('layouts.layout')
@section('content')
    <div id="contact" class="container">
        <h3 class="text-center">Create User</h3>
        <p class="text-center"><em>Register Here</em></p>

        <div class="row">
    
            <form action="{{route('form.store')}}"method="post" >
            <!-- include csrf token in our form  (\App\Http\Middleware\VerifyCsrfToken) -->
                @csrf

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="fname" name="fname" placeholder="First Name" type="text" value="{{old('fname')}}">
                            @error('fname')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="lname" name="lname" placeholder="Last Name" type="text" value="{{old('lname')}}">
                            @error('lname')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="email" name="email" placeholder="Email" type="email" value="{{old('email')}}">
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="password" name="password" placeholder="Password" type="password">
                            @error('password')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <textarea class="form-control" id="message" name="message" placeholder="Please fill in any questions or remarks" value="{{old('message')}}"></textarea>
                            @error('message')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <button class="btn pull-right" type="submit">Send</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
 @endsection
