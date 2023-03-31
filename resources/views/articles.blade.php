@extends('layouts.layout')
    @section('content')
    <h1>Blog</h1>

    @foreach ($articles as $article)
        < x-article-preview-card :article="$article" />
    @endforeach
    @endsection