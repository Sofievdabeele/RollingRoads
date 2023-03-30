@extends('layouts.layout')
@section('content')
<h1>Thank you for registering {{ $name }}</h1>
<p>{{ $message }}</p>
<a href="{{route('article')}}">Go back to blog</a>
@endsection