@extends('layouts.layout')
    @section('content')
    <div class="container mx-auto">
         <h1 class="mt-4 text-center display-1">Trip to {{$article->country}}</h1>
         <div class="col-md-12 mt-4 text-center">
            <button type="button" class="btn btn-secondary btn-lg" ><a class="nav-link" href="{{route('register')}}">Back</button>
        </div>
        <div class="container mx-auto my-3 mt-5 mb-5">
            <p style="text-align: justify">{{$article->article}}</p>
        <div>
    </div>    
@endsection 