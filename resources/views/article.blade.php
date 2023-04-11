@extends('layouts.layout')
    @section('content')

    <button type="button" class="btn btn-secondary btn-lg" ><a class="nav-link" href="{{route('articles')}}">Back</button>
   
    <h1>Article: </h1> 
    <p>{{$article->article}}</p>
    
@endsection 