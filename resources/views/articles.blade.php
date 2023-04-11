@extends('layouts.layout')
    @section('content')
    <h1>Blog</h1>
    <br>
    <button type="button" class="btn btn-secondary btn-lg" ><a class="nav-link" href="{{route('register')}}">Back</button>
    <br>
    <br>
    <br>
    
    @foreach ($articles as $article)
        <div class="card" style="width: 1000%;">
            <div class="card-body">
                <p class="card-text">< x-article-preview-card :article="$article" /></p>
            </div>
            <br>
        </div>
    @endforeach
    @endsection
