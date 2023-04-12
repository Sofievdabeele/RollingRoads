@extends('layouts.layout')
    @section('content')
    <div class="container mx-auto">
        <h1 class="mt-4 text-center display-1">Blog</h1>
        <div class="col-md-12 text-center">
            <button type="button" class="btn btn-secondary btn-lg" ><a class="nav-link" href="{{route('register')}}">Back</button>
        </div>
    
        @foreach ($articles as $article)
        <div class="container mx-auto my-3">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <p class="card-text">< x-article-preview-card :article="$article" /></p>
                </div>
           </div>
        </div>
        @endforeach
    </div>
    @endsection
