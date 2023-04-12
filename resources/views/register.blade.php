@extends('layouts.layout')
@section('content')
    <div id="contact" class="container mx-auto">
        <h1 class="mt-4 text-center display-6">Fill in to join our blog</h1>
        <p class="text-center"><em>Register Here</em></p>

        <div  class="mx-4 p-3 mb-2 bg-secondary-subtle text-emphasis-secondary">
    
            <form action="{{route('register.store')}}"method="post" >
            <!-- include csrf token in our form  (\App\Http\Middleware\VerifyCsrfToken) -->
                @csrf

                <div class="col-md-12">
                    <div class="row mt-4">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="name" name="name" placeholder="Name" type="text" value="{{old('name')}}">
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="country" name="country" placeholder="Country" type="text" value="{{old('country')}}">
                            @error('country')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mt-4">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="email" name="email" placeholder="Email" type="email">
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
                    
                    <div class="row mt-4">
                        <div class="col-sm-12 form-group">
                            <textarea class="form-control" id="message" name="message" placeholder="Tell us about your experience with van travel" value="{{old('message')}}"></textarea>
                            @error('message')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12 form-group">
                            <button class="btn btn-secondary" type="submit">Send</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
       <p class="text-center">We look forward to hearing from you!</p>
       <div class="container mt-4">
            <div class="row">
                <a class="text-right"href="{{route('home')}}">Go home</a>
            </div>
        </div>
    </div>
 @endsection
